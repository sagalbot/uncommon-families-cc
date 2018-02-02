<?php
/**
 * Template Name: HomePage
 *
 * @package WordPress
 * @subpackage blankslate
 * @since blankslate
 */
?>
<?php get_header(); ?>
<div id="homepage">
    <section class="section-1" style="background-image:url('<?php the_field('hero_image'); ?>')">
        <div class="overlay">
            <div class="container">
                <h2><?php the_field('hero_subtitle'); ?></h2>
                <h1><?php the_field('hero_title'); ?></h1>
                <div class="cta">
                    <a href="<?php the_field('hero_cta_link'); ?>">
                        <div class="cta-left">
                            <span><?php the_field('hero_cta_text'); ?></span>
                        </div>
                        <div class="cta-mid">
                            <span class="arrow"></span>
                            <span class="cta-up"></span>
                            <span class="cta-down"></span>
                        </div>
                        <div class="cta-right"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="slides">

                <div class="slide" id="slide-1" style="background-image:url('<?php the_field('slide_1_image'); ?>')">
                    <div class="overlay">
                        <div class="content">
                            <div class="left-content">
                                <div class="hour"><?php the_field('slide_1_time_hour_short'); ?></div>
                            </div>
                            <div class="right-content">
                                <div class="midday"><?php the_field('slide_1_time_ampm'); ?></div>
                                <div class="title"><?php the_field('slide_1_title'); ?></div>
                                <div class="subtitle"><?php the_field('slide_1_subtitle'); ?></div>
                                <div class="description"><?php the_field('slide_1_description'); ?></div>
                                <div class="cta">
                                    <a href="<?php the_field('hero_cta_link'); ?>">
                                        <div class="cta-left">
                                            <span>play Clip</span>
                                        </div>
                                        <div class="cta-mid">
                                            <span class="arrow"></span>
                                            <span class="cta-up"></span>
                                            <span class="cta-down"></span>
                                        </div>
                                        <div class="cta-right"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="controls">
                <div class="slide-control" data-slide="1">
                    <span class="loader"></span>
                    <p><?php the_field('slide_1_time_hour'); ?><?php the_field('slide_1_time_ampm'); ?></p>
                </div>
                <div class="slide-control" data-slide="2">
                    <span class="loader"></span>
                    <p><?php the_field('slide_2_time_hour'); ?><?php the_field('slide_2_time_ampm'); ?></p>
                </div>
                <div class="slide-control active" data-slide="3">
                    <span class="loader"></span>
                    <p><?php the_field('slide_3_time_hour'); ?><?php the_field('slide_3_time_ampm'); ?></p>
                </div>
                <div class="slide-control" data-slide="4">
                    <span class="loader"></span>
                    <p><?php the_field('slide_4_time_hour'); ?><?php the_field('slide_4_time_ampm'); ?></p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>