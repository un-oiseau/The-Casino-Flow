<?php $data = get_field('faq'); ?>
<?php foreach ($data as $faq) { ?>
	<div class="faq-item open tgf-box">
		<div class="box-head">
			<h6><?php echo $faq['faq_item']['question']; ?>
				<small class="f-right" onclick="toggle(this)">aufrollen</small>
			</h6>
		</div>
		<div class="box-content">
			<div class="faq-answer">
				<?php echo $faq['faq_item']['answer']; ?>
			</div>
		</div>
	</div>
<?php } ?>
