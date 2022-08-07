<div class="bordered-box">
	<div class="tgf-row">
		<div class="col-6">
			<?php $data = get_field('green_list_group'); ?>

			<?php if ($data['title']): ?>
				<h5><?php echo $data['title']; ?></h5>
			<?php endif; ?>
			<ul class="che_list">
				<?php foreach ($data['green_list'] as $li) { ?>

					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
		<div class="col-6">
			<?php $data = get_field('red_list_group'); ?>

			<?php if ($data['title']): ?>
				<h5><?php echo $data['title']; ?></h5>
			<?php endif; ?>
			<ul class="unche_list">
				<?php foreach ($data['red_list'] as $li) { ?>

					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>
