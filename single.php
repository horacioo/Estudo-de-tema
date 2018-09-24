<?php get_header()?>
<?php while (have_posts()) : the_post(); ?>
	<!---------------------------------->
	<?php get_template_part("partes/header");?>
	<!---------------------------------->
	<main class="container-fluid page">
		<div class="row">
			<div class="
			col-md-10 offset-md-1 
			col-lg-10 offset-lg-1 
		    ">
				<?php  the_content(); ?>
			</div>
		</div>
	</main>
	<!---------------------------------->
<?php endwhile; ?>
<?php get_footer()?>