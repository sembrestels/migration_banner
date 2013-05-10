<?php
/**
 * Migration banner plugin settings
 */

echo '<div>';
echo elgg_echo('migration_banner:text:label');
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => 'params[text]',
	'value' => $vars['entity']->text,
));
echo '</div>';
