<?php
$classname = "fairness tgf-box";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<h5><?php echo the_field('text') ?></h5>
</div>
