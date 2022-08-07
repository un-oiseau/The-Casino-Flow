<?php
$classname = "tgf-box expert-box exp-vertical";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="box-head text-right">
		<?php foreach (get_field('social_links') as $link): ?>
			<a href="<?php echo $link['link_group']['url']; ?>" target="_blank">
				<?php $icon = $link['link_group']['icon']; ?>
				<?php if ($icon) :  ?>
					<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
				<?php endif; ?>
			</a>
		<?php endforeach; ?>
	</div>
	<div class="box-content">
		<div class="flex-box">
			<?php $logo = get_field('photo'); ?>
			<?php if ($logo) :  ?>
				<img class="expert-img" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
			<?php endif; ?>

			<div class="expert-info">
				<h5><?php the_field('full_name'); ?></h5>
				<p>Experte</p>
			</div>
		</div>

		<p><?php the_field('text'); ?></p>
	</div>
</div>
