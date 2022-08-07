<div class="tgf-row top-games">

	<?php $data = get_field('casino'); ?>

	<?php if ($data): ?>

		<div class="col-9">
			<div class="cas-item cas-vertical flag-top tgf-box">
				<div class="box-head flex-box">
					<h5>TOP RATED ONLINE CASINO SITE</h5>
					<div class="box-right flex-box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/check-white.svg" alt="icon" title="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flag.svg" alt="icon" title="icon">
					</div>
				</div>
				<div class="box-content">
					<div class="tgf-row">

						<div class="col-4 text-center">
							<?php $logo = $data['logo']; ?>
						   <div class="cas-logo mx-auto mb-1 mt-1">
							   <?php if ($logo) :  ?>
								   <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							   <?php endif; ?>
						   </div>
						   <div class="mb-1">
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
						   <?php $link1 = $data['link']; ?>
						   <?php if ($link1) : ?>
							   <div class="text-center mb-15">
								   <a href="<?php echo $link1['url']; ?>"><?php echo $link1['title']; ?></a>
							   </div>
						   <?php endif; ?>
						   <?php $link = $data['button_link']; ?>
						   <?php if ($link) : ?>
							   <button type="button" class="btn-tgf btn-tgf-light btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
						   <?php endif; ?>
						</div>

						<div class="col-4">
							<div class="cas-title">
								<h4><?php echo $data['title']; ?></h4>
								<h5><?php echo $data['description']; ?></h5>
							</div>
							<table>
								<?php if ($data['payout_speed']): ?>
									<tr>
										<td>Payout Speed</td>
										<td><?php echo $data['payout_speed'] ?></td>
									</tr>
								<?php endif; ?>
								<?php if ($data['win_rate']): ?>
									<tr>
										<td>Win Rate (%)</td>
										<td><?php echo $data['win_rate'] ?></td>
									</tr>
								<?php endif; ?>
							</table>
							<hr>
							<?php if ($data['description_list']): $list = $data['description_list']; ?>
								<ul class="che_list-white">
									<?php foreach ($list as $item): ?>
										<li><?php echo $item['list_item']; ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>

						<div class="col-4">
							<div class="cas-options">
								<p><?php echo $data['deposit_title'] ?></p>
								<div class="icons-box">
									<?php foreach ($data['deposit_methods'] as $item): $image = $item['method_item']; ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
									<?php endforeach; ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	<?php endif; ?>

</div>
