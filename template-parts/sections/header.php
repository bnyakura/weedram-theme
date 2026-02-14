<header class="border-b border-neutral-200 bg-white">
  <div class="mx-auto max-w-6xl px-4 py-4 flex items-center justify-between gap-4">

    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <span class="text-xl font-semibold"><?php bloginfo('name'); ?></span>
      <?php endif; ?>
    </a>

    <!-- Nav -->
    <nav class="hidden md:block">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'flex gap-6 text-sm font-medium',
        'fallback_cb'    => false,
      ]);
      ?>
    </nav>

    <!-- Cart (Woo) -->
    <div class="flex items-center gap-3">
      <?php if (class_exists('WooCommerce')) : ?>
        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="relative inline-flex items-center">
          <span class="text-sm font-semibold">Cart</span>
          <span class="ml-2 rounded-full bg-[#8b0f2e] px-2 py-0.5 text-[11px] font-semibold text-white">
            <?php echo (int) WC()->cart->get_cart_contents_count(); ?>
          </span>
        </a>
      <?php endif; ?>
    </div>

  </div>
</header>