<div class="tgf-row">
	<div class="col-10">
		<div class="tgf-row">
			<?php $data = get_field('casinos'); ?>
			<?php foreach ($data as $item) { $casino = $item['casino']; ?>
				<div class="col-3">
					<div class="tgf-box fast-casino mt-15">
						<div class="cas-logo text-center">
							<?php $logo = $casino['logo']; ?>
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
						<?php $stars = $casino['rating']; ?>
						<div class="rate-stars text-center">
							<?php for ($i=0; $i<$stars; $i++) { ?>
								<span class="star"></span>
							<?php } ?>
							<?php for ($i=0; $i<5-$stars; $i++) { ?>
								<span class="star empty"></span>
							<?php } ?>
							<span><?php echo $stars; ?> / 5</span>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
