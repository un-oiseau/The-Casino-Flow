<?php $items = get_field('bonus_boxes'); ?>

<?php if ($items): ?>
	<div class="tgf-row">

		<?php foreach ($items as $item): ?>

			<div class="col-6 mb-1">
				<div class="bonus-box hoverable">
					<h6><?php echo $item['bonus_item']['title']; ?></h6>
					<p><?php echo $item['bonus_item']['text']; ?></p>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
<?php endif; ?>
