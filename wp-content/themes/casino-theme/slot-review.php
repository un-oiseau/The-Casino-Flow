<?php /* Template Name: Slot Reviw */ ?>

<?php
get_header(); ?>

<section class="wp-block-blocks-sectionblock">
    <div class="tgf-container">

        <div class="page-content slot-page">

            <?php
            $classname = "";
            if (!empty($block['className'])) {
            	$classname .= ' ' . $block['className'];
            }
            ?>
            <div class="<?php echo esc_attr($classname) ?>">

            	<?php $data = get_field('slot_block_1'); ?>

                <h4><?php echo $data['name']; ?></h4>

                <div class="tgf-row">
                    <div class="col-9">
                		<div class="slot-img">
                			<?php $image = $data['image']; ?>
                			<?php if ($image) : ?>
                				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                			<?php endif; ?>

                            <div class="btn-group">
                                <?php $link = $data['button_1']; ?>
                    			<?php if ($link) : ?>
                                    <button type="button" class="btn-tgf" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    			<?php endif; ?>

                                <?php $link = $data['button_2']; ?>
                                <?php if ($link) : ?>
                                    <button type="button" class="btn-tgf btn-tgf-outline" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                                <?php endif; ?>
                            </div>
                        </div>
                	</div>

                	<?php $data2 = get_field('slot_block_2'); ?>
                	<div class="col-3">
                        <div class="slot-general dark-box">
                			<?php $image = $data2['image']; ?>
                			<?php if ($image) : ?>
                				<div class="slot-logo">
                					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="company">
                				</div>
                			<?php endif; ?>
                            <?php $list = $data2['item_list']; ?>
                            <?php if ($list): ?>
                                <ul>
                                    <?php foreach ($list as $key => $value): ?>
                                        <li><b><?php echo ucwords(str_replace('_',' ',$key)); ?></b>: <?php echo $value; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tgf-row">
                    <div class="col-9">
                        <h3>Where to play the Mega Moolah slot</h3>
                        <div class="tgf-row">
                            <?php for ($i=3; $i < 6 ; $i++) { $data2 = get_field('slot_block_'.$i); ?>
                                <div class="col-4">
                                    <div class="dark-box mb-15">
                                        <?php $image = $data2['image']; ?>
                                        <?php if ($image) : ?>
                                            <div class="slot-logo text-center">
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="company">
                                            </div>
                                        <?php endif; ?>
                                        <?php $description = $data2['description']; ?>
                                        <?php if ($description) : ?>
                                            <p class="slot-description text-center">
                                                <?php echo $description; ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php $link = $data2['button']; ?>
                                        <?php if ($link) : ?>
                                            <button type="button" class="btn-tgf btn-tgf-light btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <?php $data3 = get_field('block_6'); ?>
                <h4 class="mt-3"><?php echo $data3['subtitle']; ?></h4>
                <div class="slot-text">
                    <?php echo $data3['description']; ?>
                </div>

                <?php the_content(); ?>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
