<?php
$classname = "tgf-box tips-box";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<?php
	$image = get_field('icon');
	if( !empty( $image ) ): ?>
		<div class="round-box">
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		</div>
	<?php endif; ?>
	<p class="title"><b><?php echo the_field('title') ?></b></p>
	<?php echo the_field('text') ?>
</div>
