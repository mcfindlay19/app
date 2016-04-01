<?php

require_once( __DIR__ . '/../Maintenance.php' );

/**
 * Remove incorrect entries from specials.events_local_users
 *
 * @see PLATFORM-2061
 */
class CleanEventsLocalUsersMaintenance extends Maintenance {

	public function execute() {
		global $wgCityId, $wgSpecialsDB;

		$dbw = $this->getDB( DB_MASTER, [], $wgSpecialsDB );
		$dbw->query(
			sprintf( "DELETE FROM events_local_users where wiki_id = '%d' and (user_name = '0' OR all_groups = '0' OR single_group = '0')", $wgCityId ),
			__METHOD__
		);

		$this->output( sprintf ("Rows removed: %d\n", $dbw->affectedRows() ) );

		wfWaitForSlaves( $wgSpecialsDB );
	}
}

$maintClass = CleanEventsLocalUsersMaintenance::class;
require_once( RUN_MAINTENANCE_IF_MAIN );
