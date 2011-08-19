<?php
/**
 * WikiaBaseTest class - part of Wikia UnitTest Fraework - W(U)TF
 * @author ADi
 * @author Owen
 * Usage:
 *		$this->mockGlobalVariable( 'wgCityId', '12345' );
 *		$this->mockGlobalFunction( 'getDB', $dbMock );
 *      // If you do not call this helper, $app is a real App object
 *		$this->mockApp();  
 *      // Now $this->app in a test case is the mock App object
 *
 */
class WikiaBaseTest extends PHPUnit_Framework_TestCase {

	protected $app = null;
	protected $appOrig = null;
	private $appMock = null;
	private $mockedClasses = array();

	protected function setUp() {
		$this->app = F::app();
		$this->appOrig = F::app();
		$this->appMock = new WikiaAppMock( $this );
	}

	protected function tearDown() {
		F::setInstance('App', $this->appOrig);
		$this->unsetClassInstances();
	}

	protected function mockClass($className, $mock) {
		F::setInstance( $className, $mock );
		$this->mockedClasses[] = $className;
	}

	protected function mockGlobalVariable( $globalName, $returnValue ) {
		if($this->appMock == null) {
			$this->markTestSkipped('WikiaBaseTest Error - add parent::setUp() and/or parent::tearDown() to your own setUp/tearDown methods');
		}
		$this->appMock->mockGlobalVariable( $globalName, $returnValue );
	}

	protected function mockGlobalFunction( $functionName, $returnValue, $callsNum = 1, $inputParams = array() ) {
		if($this->appMock == null) {
			$this->markTestSkipped('WikiaBaseTest Error - add parent::setUp() and/or parent::tearDown() to your own setUp/tearDown methods');
		}
		$this->appMock->mockGlobalFunction( $functionName, $returnValue, $callsNum, $inputParams );
	}

	// After calling this, any reference to $this->app in a test now uses the mocked object
	protected function mockApp() {
		$this->appMock->init();
		$this->app = F::app(); 
	}

	private function unsetClassInstances() {
		foreach( $this->mockedClasses as $className ) {
			F::unsetInstance( $className );
		}
		$this->mockedClasses = array();
	}
}

class WikiaAppMock {

	/**
	 * Test case object
	 * @var PHPUnit_Framework_TestCase
	 */
	private $testCase = null;
	private $mock = null;
	private $methods = array();
	private $mockedGlobals = array();
	private $mockedFunctions = array();

	public function __construct( PHPUnit_Framework_TestCase $testCase ) {
		$this->testCase = $testCase;
	}

	public function init() {
		$wikiaAppArgs = array();

		$globalRegistryMock = null;
		$functionWrapperMock = null;

		if( in_array( 'getGlobal', $this->methods )) {
			$globalRegistryMock = $this->testCase->getMock( 'WikiaGlobalRegistry', array( 'get', 'set' ) );
			$globalRegistryMock->expects( $this->testCase->any() )
				->method( 'get' )
				->will( $this->testCase->returnCallback(array( $this, 'getGlobalCallback')) );
		}
		if( in_array( 'runFunction', $this->methods ) ) {
			$functionWrapperMock = $this->testCase->getMock( 'WikiaFunctionWrapper' );
			foreach( $this->mockedFunctions as $functionName => $functionData ) {
				$functionWrapperMock->expects( $this->testCase->exactly( $functionData['calls'] ) )
				    ->method( $functionName )
				    ->will( $this->testCase->returnValue( $functionData['value'] ) );
			}
		}
		$wikiaAppArgs[] = $globalRegistryMock;
		$wikiaAppArgs[] = null; // WikiaLocalRegistry
		$wikiaAppArgs[] = null; // WikiaHookDispatcher
		$wikiaAppArgs[] = $functionWrapperMock;

		$this->mock = $this->testCase->getMock( 'WikiaApp', array( 'ajax' /* we just have to have something to prevent mocking everything */), $wikiaAppArgs, '' );
		F::setInstance('App', $this->mock);
	}

	public function mockGlobalVariable($globalName, $returnValue) {
		if(!in_array( 'getGlobal', $this->methods )) {
			$this->methods[] = 'getGlobal';
		}
		if(!in_array($globalName, $this->mockedGlobals)) {
			$this->mockedGlobals[$globalName] = array( 'value' => $returnValue );
		}
		else {
			$this->markTestSkipped( "Global variable $globalName already mocked, multiple mocks of the same variable not supported." );
		}
	}

	/**
	 * @brief mock global function
	 * @param string $functionName
	 * @param mixed $returnValue
	 * @param int $callsNum
	 * @param array $inputParams  // FIXME: not used
	 *
	 * @todo support params
	 */
	public function mockGlobalFunction($functionName, $returnValue, $callsNum = 1, $inputParams = array() ) {
		if(!in_array( 'runFunction', $this->methods )) {
			$this->methods[] = 'runFunction';
		}
		if(!in_array($functionName, $this->mockedFunctions)) {
			$this->mockedFunctions[$functionName] = array( 'value' => $returnValue, 'calls' => $callsNum, 'params' => $inputParams );
		}
		else {
			$this->markTestSkipped( "Function $functionName already mocked, multiple mocks of the same function not supported." );
		}
	}

	// If the global variable is not being overridden, return the actual global variable
	public function getGlobalCallback( $globalName ) {
		return ( isset($this->mockedGlobals[$globalName]['value']) ? $this->mockedGlobals[$globalName]['value'] : $GLOBALS[$globalName] );
	}

}

/*
class WrappedFunctionMock {
	public $name;
	public $returnValue;
	public $params = array();

	public function __construct( $name, $returnValue, $params = array() ) {
		$this->name = $name;
		$this->returnValue = $returnValue;
		$this->params = $params;
	}
}
*/
