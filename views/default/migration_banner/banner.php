<?php
?>
<div id='layout_spotlight' class="migration_banner">
<div id='wrapper_spotlight'>
  <div class="collapsable_box">
	<div class="collapsable_box_header">
<?php

	$closed = false;
	if (get_loggedin_user() instanceof ElggUser) {
		if (get_loggedin_user()->migrationbanner_closed) {
			$closed = true;
		}
	}
	if ($closed) {
?>
		<a href="javascript:void(0);" class="toggle_box_contents" onclick="$.post('<?php echo elgg_add_action_tokens_to_url("{$vars['url']}action/migration_banner/banner?closed=false"); ?>')">+</a>
<?php
		} else {
?>
		<a href="javascript:void(0);" class="toggle_box_contents" onclick="$.post('<?php echo elgg_add_action_tokens_to_url("{$vars['url']}action/migration_banner/banner?closed=true"); ?>')">-</a>
<?php

		}

?>
	<h1><? echo elgg_echo("migration_banner:title"); ?></h1>
	</div>

    <div class="collapsable_box_content" <?php if ($closed) echo "style=\"display:none\"" ?>>
	<div><? echo elgg_get_plugin_setting("text", "migration_banner"); ?></div>
    </div>
  </div>
</div>
</div>
<div>
</div>
