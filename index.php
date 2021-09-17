<?php get_header() ?>

<?php if(have_posts()){ ?>
<?php while(have_posts()){ the_post(); ?>
<?php the_content(); ?>
<?php } ?>
<?php } ?>


<?php  get_template_part("template-parts/content","lista"); ?>


<?php get_footer() ?>