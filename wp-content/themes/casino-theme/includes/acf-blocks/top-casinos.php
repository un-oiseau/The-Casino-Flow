<div class="top_table">
	<div class="box-head">
		<table class="w-100 mb-0">
			<tr>
				<td>Rank</td>
				<td class="casino-td">Top Casinos</td>
				<td style="width:170px;">Deposit Method</td>
				<td class="text-center">Payout Speed</td>
				<td class="text-center">Win Rate</td>
			</tr>
		</table>
	</div>
	<table class="table_top5">
		<?php for ($j=1; $j < 6; $j++) {
			$data = get_field('casino_'.$j); ?>

			<?php if ($data): ?>

				<tr class="cas-item cas-horizontal text-center tgf-box" data-row-number="<?php echo $j ?>">
					<td data-type="row-number"><h1 class="top-counter"><?php echo $j ?></h1></td>
					<td data-type="logo">
						<?php $logo = $data['logo']; ?>
						<div class="cas-logo flex-box">
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
						<?php $stars = $data['stars']; ?>
						<div class="rate-stars">
							<?php for ($i=0; $i<$stars; $i++) { ?>
								<span class="star"></span>
							<?php } ?>
							<?php for ($i=0; $i<5-$stars; $i++) { ?>
								<span class="star empty"></span>
							<?php } ?>
							<span><?php echo $stars; ?> / 5</span>
						</div>
					</td>
					<td data-type="description" class="text-left">
						<h5><?php echo $data['title']; ?></h5>
						<h5 class="text-yellow"><?php echo $data['description']; ?></h5>
						<?php $link = $data['review_link']; ?>
						<?php if ($link) : ?>
							<div class="text-left">
								<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
							</div>
						<?php endif; ?>
					</td>
					<td data-type="button">
						<?php $link = $data['button_link']; ?>
						<?php if ($link) : ?>
							<button type="button" class="btn-tgf btn-tgf-light btn-block mb-1" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
						<?php endif; ?>
						<?php $link2 = $data['link']; ?>
						<?php if ($link2) : ?>
							<div class="text-center">
								<a href="<?php echo $link2['url']; ?>"><?php echo $link2['title']; ?></a>
							</div>
						<?php endif; ?>
					</td>
					<td data-type="deposit">
						<div class="icons-box text-left">
							<?php foreach ($data['deposit_methods'] as $item): $image = $item['method_icon']; ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
							<?php endforeach; ?>
						</div>
					</td>
					<td><?php echo $data['payout_speed']; ?></td>
					<td><?php echo $data['win_rate']; ?></td>
				</tr>

			<?php endif; ?>

		<?php } ?>
	</table>
</div>
