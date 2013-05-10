<?php

function migration_banner_init() {
	global $CONFIG;
	register_translations($CONFIG->pluginspath . "migration_banner/languages/");
	elgg_extend_view("page/elements/body", "migration_banner/banner", 0);
	register_action("migration_banner/banner",false,$CONFIG->pluginspath . "migration_banner/actions/banner.php");
	elgg_extend_view('css','migration_banner/css');
#extend_view("page_elements/elgg_topbar", "migration_banner/banner");
}

register_elgg_event_handler('init','system','migration_banner_init');
