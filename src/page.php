<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_id(); ?>" <?php post_class(); ?>>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </article>

<?php endwhile; ?>

<?php get_footer(); ?>
