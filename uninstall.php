<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_opentable = new TrustindexPlugin_opentable("opentable", __FILE__, "12.4.1", "Widgets for Opentable Reviews", "Opentable");
$trustindex_pm_opentable->uninstall();
?>