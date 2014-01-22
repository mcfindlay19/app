/*global describe, it, expect, beforeEach, modules */
describe( 'VideoPageTool: Admin Category Collection ( Backbone ):', function() {
	'use strict';
	var CategoryCollection,
			instance;

	beforeEach( function() {
		CategoryCollection = modules[ 'videopageadmin.collections.category' ]();
		instance = new CategoryCollection();
	} );

	it( 'should export a constructor', function() {
		expect( typeof CategoryCollection ).toBe( 'function' );
	} );

	it( 'should extend Backbone.Collection', function() {
		expect( instance instanceof Backbone.Collection ).toBe( true );
	} );

	it( 'should send requests to wikia.php', function() {
		expect( instance.url ).toBe( '/wikia.php' );
	} );

	it( 'should call the right controller and method', function() {
		expect( instance.controller ).toBe( 'CategorySelect' );
		expect( instance.method ).toBe( 'getWikiCategories' );
	} );

	it( 'should not be instantiated with a selectedCategory', function() {
		expect( instance.selectedCategory ).toBe( undefined );
	} );

	it( 'should allow setting of selectedCategory with a string value', function() {
		instance.setCategory( 'foo' );
		expect( instance.selectedCategory ).toBe( 'foo' );
	} );

	it( 'should allow setting of selectedCategory with an instance of Backbone.Model', function() {
		var model = new Backbone.Model( {
			name: 'bar'
		} );
		instance.setCategory( model );
		expect( instance.selectedCategory ).toBe( 'bar' );
	} );

	it( 'should\'t allow setting of selectedCategory with anything that isn\'t a string or Backbone.Model', function() {
		// passing in a Number
		expect( function() {
			instance.setCategory( 0 );
		} ).toThrow( new TypeError( 'data is not an instance of Backbone.Model' ) );
		// passing in undefined
		expect( function() {
			instance.setCategory( undefined );
		} ).toThrow( new TypeError( 'data is not an instance of Backbone.Model' ) );
		// passing in null
		expect( function() {
			instance.setCategory( null );
		} ).toThrow( new TypeError( 'data is not an instance of Backbone.Model' ) );
		// passing in an {}
		expect( function() {
			instance.setCategory( {} );
		} ).toThrow( new TypeError( 'data is not an instance of Backbone.Model' ) );
	} );

	it( 'autocomplete() should lowercase user search queries', function() {
		instance.autocomplete( 'FooBar' );
		expect( instance.query ).toBe( 'foobar' );
	} );

	it( 'autocomplete() should only accept strings', function() {
		expect( function() {
			instance.autocomplete( 0 );
		} ).toThrow( new TypeError( 'value must be a String' ) );
		expect( function() {
			instance.autocomplete( undefined );
		} ).toThrow( new TypeError( 'value must be a String' ) );
		expect( function() {
			instance.autocomplete( null );
		} ).toThrow( new TypeError( 'value must be a String' ) );
		expect( function() {
			instance.autocomplete( {} );
		} ).toThrow( new TypeError( 'value must be a String' ) );
	} );

	it( 'parse() should store the raw response', function() {
		var response = [ 'foo', 'bar' ];
		instance.parse( response );
		expect( instance.raw.length ).toBe( 2 );
	} );

	it( 'parse() should only return a populated array if a query is present', function() {
		expect( instance.parse( [ 'foo' ] ).length ).toBe( 0 );
	} );

	it( 'parse() should return suitable objects to be new\'d with Backbone.Model', function() {
		var response, parsed;

		response = [ 'foo', 'bar' ];
		instance.query = 'foo';

		parsed = instance.parse( response );

		expect( typeof parsed[0] ).toBe( 'object' );
	} );
} );
