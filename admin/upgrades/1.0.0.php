<?php
/**
 * @version $Header$
 */
global $gBitInstaller;

$infoHash = array(
	'package'      => LIBERTYSECURE_PKG_NAME,
	'version'      => str_replace( '.php', '', basename( __FILE__ )),
	'description'  => "Update content type guid table to allow longer character string for guid values.",
	'post_upgrade' => NULL,
);

$gBitInstaller->registerPackageUpgrade( $infoHash, array(

array( 'DATADICT' => array(
	// insert new column
	array( 'ALTER' => array(
		'liberty_secure_permissions_map' => array(
			'content_type_guid' => array( '`content_type_guid`', 'VARCHAR(32)' ),
		),
	)),
)),

));
