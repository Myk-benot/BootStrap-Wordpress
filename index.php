


<?php
get_header();
?>
    
     <!-- Hero Banner -->
      <div class="d-flex align-items-center justify-content-center hero-banner">
        <div class="text-center bg-black opacity-75 p-2 rounded-5">
          <h1 class="display-4 text-danger">Welcome to the Horror</h1>
          <p class="lead text-warning mb-4">
            Dive into the darkness of horror cinema and chilling stories...
          </p>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container my-5">
      <h2 class="text-center text-danger mb-4">About</h2>
      <p>
        Welcome to the Midnight Vault, your gateway to the sinister and the
        supernatural. Here, we dive into the depths of horror cinema,
        spine-chilling shows, and terrifying books. But we don’t stop there.
        Explore tales from the dark side of reality, from haunted sites and
        infamous murderers to demon lore and real-life events that will leave
        you sleepless. Whether you're a horror fanatic or a seeker of the
        macabre, step inside… if you dare.
      </p>
    </section>

    <!-- Featured Content -->
    <section id="featured" class="container my-5">
  <h2 class="text-center text-danger mb-4">Featured Content</h2>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php
    $featured_posts = new WP_Query(array(
      'posts_per_page' => 6, 
      'post_status' => 'publish'
    ));

    if ($featured_posts->have_posts()) :
      while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
        <div class="col">
          <div class="card bg-black text-white border-white shadow mb-4">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title text-danger"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-danger">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata();
    else : ?>
      <p class="text-center text-white">No posts available at the moment.</p>
    <?php endif; ?>
  </div>
</section>



    <!-- Contact Section -->
    <section id="contact" class="container my-5">
  <h2 class="text-center text-danger mb-4">Newsletter</h2>
  <div class="w-50 mx-auto flex-column">
    <?php echo do_shortcode('[wpforms id="11" title="false"]'); ?>
  </div>
</section>



<?php
get_footer();
?>  