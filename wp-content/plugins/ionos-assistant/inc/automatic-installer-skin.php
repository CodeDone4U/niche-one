<?php
// Do not allow direct access!
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden' );
}

class Ionos_Automatic_Installer_Skin extends Automatic_Upgrader_Skin {
	function __construct( $args = array() ) {
		parent::__construct( $args );
	}

	function before() {
		return;
	}

	function feedback( $data ) {
		return;
	}

	function after() {
		return;
	}
}
