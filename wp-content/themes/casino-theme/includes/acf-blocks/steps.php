<ul class="steps">
	<?php $data = get_field('steps'); ?>
	<?php foreach ($data as $i => $step) { ?>
		<li>
			<span class="counter"><?php echo $i+1 ?></span>
			<h5><?php echo $step['step']['title']; ?></h5>
			<p class="mb-0"><?php echo $step['step']['text']; ?></p>
		</li>
	<?php } ?>
</ul>
