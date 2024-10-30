<?php
/*
Template Name: Custom Page Template
*/
get_header(); 
?>

  <!-- Post Hero Banner -->
  <div class="d-flex align-items-center justify-content-center hero-banner-two">
    <div class="text-center bg-black opacity-75 p-2 rounded-5">
      <h1 class="display-4 text-danger"><?php the_title(); ?></h1>
    </div>
  </div>

  <section class="content-section my-5">
    <h2 class="text-center text-danger mb-4" style="font-family: 'UnifrakturMaguntia', cursive;">
      <!-- Optional Heading Here -->
    </h2>
    <div>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content(); 
        endwhile;
      endif;
      ?>
    </div>
  </section>


<?php get_footer(); ?>
