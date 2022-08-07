<?php $data = get_field('casino'); ?>

<?php if ($data): ?>

		<div class="tgf-box cas-item cas-vertical flag-top peaky-box">
			<div class="box-head flex-box">
				<h5>Peaky Blinders Slot Spiele</h5>
			</div>
			<div class="box-content">
				<div class="tgf-row">
					<div class="col-3 text-center">
						<?php $logo = $data['logo']; ?>
						<div class="cas-logo mt-1 mb-1">
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
						<?php $stars = $data['rating']; ?>
						<div class="stars">
							<?php for ($i=0; $i<$stars; $i++) { ?>
								<span class="star"></span>
							<?php } ?>
							<?php for ($i=0; $i<5-$stars; $i++) { ?>
								<span class="star empty"></span>
							<?php } ?>
						</div>
						<span>Rating: <?php echo $stars; ?> / 5</span>
					</div>
					<div class="col-9">
						<p class="mt-15"><?php echo $data['description']; ?></p>
						<?php if ($data['list']): $list = $data['list']; ?>
							<ul class="che_list-white">
								<?php foreach ($list as $item): ?>
									<li><?php echo $item['item']; ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						<?php if ($data['game']): $data = $data['game']; ?>
							<div class="top_table">
								<table class="table_top5">
									<tr class="cas-item cas-horizontal text-center tgf-box">
										<td data-type="logo">
											<?php $logo = $data['logo']; ?>
											<div class="cas-logo w-100 mb-0">
												<?php if ($logo) :  ?>
													<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
												<?php endif; ?>
											</div>
											<?php $stars = $data['stars']; ?>
											<div class="rate-stars text-center mt-0">
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
										<td class="text-left" data-type="payouts">
											<p>Payout Speed <span><?php echo $data['payout_speed']; ?></span></p>
											<p>Win Rate (%) <span><?php echo $data['win_rate']; ?></span></p>
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
									</tr>
								</table>

							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>
