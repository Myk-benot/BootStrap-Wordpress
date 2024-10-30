<?php
get_header(); 
?>

<div class="d-flex align-items-center justify-content-center hero-banner-two">
<div class="text-center bg-black opacity-75 p-2 rounded-5">
      <h1 class="display-4 text-danger"><?php the_title(); ?></h1>
      <h1 class="display-4 text-warning"> <?php echo get_the_date(); ?> </h1>
    </div>
</div>
  <!-- Post Content Section -->
  <main class="container my-5">
    <article>
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-4" />
      <?php endif; ?>
      <div>
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            the_content(); 
          endwhile;
        endif;
        ?>
      </div>
    </article>
  </main>



<?php
get_footer(); 
?>
