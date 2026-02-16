  <footer class="bg-neutral-950 text-neutral-200">
    <div class="mx-auto max-w-6xl px-4 py-14">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
          <h3 class="font-display text-lg text-[color:#c8a34a]">Contact</h3>
          <p class="mt-4 text-sm text-neutral-300 leading-relaxed">
            10 Harvey Road,<br />
            Redhill, RH1 4EA
          </p>
          <p class="mt-3 text-sm text-neutral-300">+44 20 8638 8176</p>
          <a class="mt-2 inline-block text-sm text-neutral-300 hover:text-white" href="#">
            info@weedramcollective.com
          </a>
        </div>

        <div>
          <h3 class="font-display text-lg text-[color:#c8a34a]">Quick Links</h3>
          <?php
            $menu_locations = get_nav_menu_locations();
            $quick_links = isset($menu_locations['quick-links']) ? $menu_locations['quick-links'] : false;
            if ($quick_links) {
              wp_nav_menu(array(
                'theme_location' => 'quick-links',
                'container' => false,
                'menu_class' => 'mt-4 space-y-2 text-sm text-neutral-300',
                'link_before' => '',
                'link_after' => '',
                'item_spacing' => 'discard'
              ));
            } else {
              echo '<p class="text-red-500 italic text-xs mt-4">Please assign a menu to "Footer Quick Links" in Appearance → Menus</p>';
            }
          ?>
        </div>

        <div>
          <h3 class="font-display text-lg text-[color:#c8a34a]">Legal</h3>
          <?php
            $menu_locations = get_nav_menu_locations();
            $legal = isset($menu_locations['legal']) ? $menu_locations['legal'] : false;
            if ($legal) {
              wp_nav_menu(array(
                'theme_location' => 'legal',
                'container' => false,
                'menu_class' => 'mt-4 space-y-2 text-sm text-neutral-300',
                'link_before' => '',
                'link_after' => '',
                'item_spacing' => 'discard'
              ));
            } else {
              echo '<p class="text-red-500 italic text-xs mt-4">Please assign a menu to "Footer Legal" in Appearance → Menus</p>';
            }
          ?>
        </div>

        <div>
          <h3 class="font-display text-lg text-[color:#c8a34a]">Subscribe to our newsletter</h3>
          <form class="mt-4 space-y-3">
            <input class="w-full rounded border border-neutral-700 bg-neutral-900 px-3 py-2 text-sm placeholder:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-[color:var(--brand)]/40"
              placeholder="Email" />
            <div class="grid grid-cols-2 gap-3">
              <input class="w-full rounded border border-neutral-700 bg-neutral-900 px-3 py-2 text-sm placeholder:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-[color:var(--brand)]/40"
                placeholder="First Name" />
              <input class="w-full rounded border border-neutral-700 bg-neutral-900 px-3 py-2 text-sm placeholder:text-neutral-500 focus:outline-none focus:ring-2 focus:ring-[color:var(--brand)]/40"
                placeholder="Last Name" />
            </div>
            <button class="inline-flex items-center justify-center rounded-full bg-[color:var(--brand)] px-5 py-2 text-xs font-semibold text-white hover:brightness-110">
              Subscribe
            </button>
          </form>
        </div>
      </div>

      <div class="mt-12 border-t border-white/10 pt-6 text-center text-[11px] text-neutral-500">
        WEE DRAM COLLECTIVE © <span id="year"></span> • All rights reserved
      </div>
    </div>

    <!-- Floating chat bubble (visual only) -->
    <div class="fixed bottom-5 right-5 flex items-center gap-3">
      <div class="hidden sm:block rounded-lg bg-white px-3 py-2 text-xs text-neutral-800 shadow">
        Need help? Chat with us
      </div>
      <button class="h-12 w-12 rounded-full bg-emerald-500 text-white shadow-lg grid place-items-center" aria-label="Chat">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M4 4h16v12H7l-3 3V4z"/>
        </svg>
      </button>
    </div>
  </footer>