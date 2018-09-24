<?php while (have_posts()) : the_post(); ?>

<?php 
if(!is_page()){echo the_ID();}
?>

<?php the_content(); ?>
<?php endwhile; ?>