<?php
/**
 * Template Name: About Us
 */
?>
<div itemscope itemtype="http://schema.org/AboutPage">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
</div>