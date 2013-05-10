<?php

	/**
	 * Elgg blog CSS extender
	 * 
	 * @package ElggBlog
	 */

?>
.migration_banner {
	-webkit-border-radius: 5px; 
	-moz-border-radius: 5px;
	border-radius: 5px;
	background: white url(<?php echo $CONFIG->wwwroot; ?>mod/migration_banner/migration_banner.png) no-repeat !important;
}

.migration_banner .collapsable_box_content > div {
	padding: 20px;
	text-align: right;
	font-weight: bold;
	background-color: rgba(190, 190, 190, 0.5);
}
