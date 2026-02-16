<?php get_template_part('template-parts/sections/header/top-header'); ?>

<!-- Header -->
<header class="border-b border-neutral-200 bg-white">
  <div class="mx-auto max-w-6xl px-4 py-4">
    <div class="flex items-center justify-between gap-4">
      <!-- Logo -->
          <?php if (has_custom_logo()) : ?>
              <div class="w-[200px]"><?php the_custom_logo(); ?></div>
          <?php else : ?>
              <span class="text-xl font-semibold"><?php bloginfo('name'); ?></span>
          <?php endif; ?>
      <!-- Search -->
      <div class="hidden md:flex flex-1 justify-center">
        <div class="w-full max-w-md relative">
          <input
            class="w-full rounded-full border border-neutral-200 bg-neutral-50 px-4 py-2 pr-12 text-sm focus:outline-none focus:ring-2 focus:ring-[color:var(--brand)]/30"
            placeholder="Search"
            />
          <button class="absolute right-[3px] top-1/2 -translate-y-1/2 h-8 w-8 rounded-full bg-[color:var(--brand)] text-white grid place-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
          </button>
        </div>
      </div>

      <!-- Icons -->
      <div class="flex items-center gap-3">
        <button class="h-9 w-9 rounded-full border border-neutral-200 grid place-items-center hover:bg-neutral-50" aria-label="Wishlist">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-icon lucide-heart"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/></svg>
        </button>

        <button class="h-9 w-9 rounded-full border border-neutral-200 grid place-items-center hover:bg-neutral-50" aria-label="Account">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </button>

        <button class="relative h-9 w-9 rounded-full border border-neutral-200 grid place-items-center hover:bg-neutral-50" aria-label="Cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
          <span class="absolute -right-1 -top-1 h-5 min-w-5 px-1 rounded-full bg-[color:var(--brand)] text-white text-[10px] grid place-items-center">0</span>
        </button>
      </div>
    </div>

    <!-- Nav pills -->
    <nav class="mt-4 flex flex-wrap items-center gap-2">
      <a class="rounded-full bg-[color:var(--brand)] px-4 py-2  font-semibold text-white" href="#">ALL DISTILLERIES</a>
      <a class="rounded-full bg-neutral-100 px-4 py-2  font-semibold text-neutral-800 hover:bg-neutral-200" href="#">All bottles</a>
      <a class="rounded-full bg-neutral-100 px-4 py-2  font-semibold text-neutral-800 hover:bg-neutral-200" href="#">Drink it now</a>
      <a class="rounded-full bg-neutral-100 px-4 py-2  font-semibold text-neutral-800 hover:bg-neutral-200" href="#">Lost society</a>
      <a class="rounded-full bg-neutral-100 px-4 py-2  font-semibold text-neutral-800 hover:bg-neutral-200" href="#">Mini dram collective</a>
      <a class="rounded-full bg-neutral-100 px-4 py-2  font-semibold text-neutral-800 hover:bg-neutral-200" href="#">Old &amp; rare</a>
    </nav>

    <!-- Mobile search -->
    <div class="mt-4 md:hidden">
      <div class="relative">
        <input
          class="w-full rounded-full border border-neutral-200 bg-neutral-50 px-4 py-2 pr-12 text-sm focus:outline-none focus:ring-2 focus:ring-[color:var(--brand)]/30"
          placeholder="Search"
        />
        <button class="absolute right-[3px] top-1/2 -translate-y-1/2 h-8 w-8 rounded-full bg-[color:var(--brand)] text-white grid place-items-center">
          <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M8.5 3.5a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm-6 5a6 6 0 1 0 10.52 3.72l3.13 3.13a.75.75 0 1 0 1.06-1.06l-3.13-3.13A6 6 0 0 0 2.5 8.5Z" clip-rule="evenodd"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>


