<?php /* Template Name: Brand Reviw */ ?>

<?php
get_header(); ?>

    <section class="wp-block-blocks-sectionblock">
        <div class="tgf-container">

            <div class="page-content brand-page">
                <?php $data1 = get_field('block_1'); ?>

                <div class="tgf-row">
                    <div class="col-8">
                        <h1 class="mb-1"><?php echo $data1['name']; ?></h1>
                        <?php $stars = $data1['rating']; ?>
                        <div class="stars mb-2">
                            <span class="dark-rate"><?php echo $stars .'.0' ?></span>
                            <?php for ($i=0; $i<$stars; $i++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                            <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                <span class="star empty"></span>
                            <?php } ?>
                        </div>
                        <p class="brand-description"><?php echo $data1['description']; ?></p>
                        <?php if ($data1['what_we_love']): $list = $data1['what_we_love']; ?>
                            <div class="bordered-box">
                                <h5>
                                    <img class="tgf-header-lang" src="<?php echo get_template_directory_uri(); ?>/images/heart.svg" alt="icon" title="icon">
                                    What we love
                                </h5>
                                <ul>
                                    <?php foreach ($list as $item): ?>
                                        <li><?php echo $item['item'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        <?php endif; ?>
                        <?php if ($data1['what_we_dont_love']): $list = $data1['what_we_dont_love']; ?>
                            <div class="bordered-box">
                                <h5>
                                    <img class="tgf-header-lang" src="<?php echo get_template_directory_uri(); ?>/images/broken-heart.svg" alt="icon" title="icon">
                                    What we don't love
                                </h5>
                                <ul>
                                    <?php foreach ($list as $item): ?>
                                        <li><?php echo $item['item'] ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-4 col-right">
                        <?php $data2 = get_field('block_2'); ?>
                        <?php $image = $data2['logo']; ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                        <div class="tgf-box brand-general">
                            <p>Welcome bonus:</p>
                            <h3><?php echo $data2['welcome_bonus'] ?></h3>
                            <hr>
                            <div class="stars w-100">
                                <?php for ($i=0; $i<$stars; $i++) { ?>
                                    <span class="star"></span>
                                <?php } ?>
                                <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                    <span class="star empty"></span>
                                <?php } ?>
                                <span class="light-rate f-right"><?php echo $stars .'.0' ?></span>
                            </div>
                            <p>Win Rate: <?php echo $data2['win_rate'] ?></p>
                            <p>Payout Speed: <?php echo $data2['payout_speed'] ?></p>
                            <p>Wagering requirements <?php echo $data2['wagering_requirements'] ?></p>
                            <?php $link = $data2['button_link']; ?>
                            <?php if ($link) : ?>
                                <button type="button" class="btn-tgf btn-tgf-light btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tgf-row mt-15">
                    <div class="col-8">
                        <div class="tgf-row">
                            <div class="col-6">
                                <?php $data3 = get_field('software_providers'); ?>
                                <?php if ($data3): ?>
                                    <h5>Software Providers:</h5>
                                    <div class="icons-box">
                                        <?php foreach ($data3 as $item): $image = $item['icon']; ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-6">
                                <?php $data4 = get_field('top_payment_methods'); ?>
                                <?php if ($data4): ?>
                                    <h5>Top Payment Methods:</h5>
                                    <div class="icons-box flex-box">
                                        <?php foreach ($data4 as $item): $image = $item['icon']; ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php the_content(); ?>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
