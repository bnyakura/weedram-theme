<?php get_header(); ?>
<main class="min-h-screen">
  <?php
  if (have_posts()) {
    while (have_posts()) { the_post();
      the_content();
    }
  }
  ?>
</main>
<?php get_footer(); ?>