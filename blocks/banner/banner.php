<?php
$hero_heading = explode(' ',get_field( 'banner_heading' ));
$hero_description  = get_field( 'banner_description' );
$hero_bg = get_field('banner_background_image');

?>
  
  <!-- Hero -->
  <section class="relative overflow-hidden">
    <!-- Background image placeholder -->
    <div class="absolute inset-0">
      <div class="h-full w-full bg-neutral-900">
        <!-- Replace with your hero image -->
        <img
          src="<?php echo esc_html( $hero_bg['url'] ); ?>"
          alt=""
          class="h-full w-full object-cover opacity-70"
        />
      </div>
      <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/10"></div>
    </div>

    <div class="relative mx-auto max-w-6xl px-4 py-14 md:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        <!-- Copy -->
        <div class="lg:col-span-7">
            <h1 class="font-display text-white text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05]">
            <?php echo esc_html($hero_heading[0]); ?>
            <br class="hidden sm:block" />
            <?php echo esc_html($hero_heading[1]); ?>
            </h1>
          <p class="mt-5 max-w-xl text-white/85 text-sm md:text-base leading-relaxed">
            We bring you old, rare and unusual whiskies. No longer will they gather dust in some dark,
            damp cellar, instead they will be enjoyed by you!
          </p>
          <div class="mt-7">
            <a
              href="#"
              class="inline-flex items-center justify-center rounded-full bg-[color:var(--brand)] px-7 py-3 text-xs font-semibold tracking-wide text-white hover:brightness-110"
            >
              SHOP NOW
            </a>
          </div>
        </div>

        <!-- Product visual -->
        <div class="lg:col-span-5">
          <div class="mx-auto w-full max-w-sm">
            <div class="relative">
              <!-- bottle/card mock -->
              <div class="rounded-2xl bg-white/5 backdrop-blur border border-white/10 p-6">
                <div class="grid grid-cols-2 gap-4 items-end">
                  <div class="h-64 rounded-xl bg-white/10 border border-white/10 grid place-items-center">
                    <span class="text-white/70 text-xs">Box image</span>
                  </div>
                  <div class="h-64 rounded-xl bg-white/10 border border-white/10 grid place-items-center">
                    <span class="text-white/70 text-xs">Bottle image</span>
                  </div>
                </div>
              </div>

              <!-- Decorative wave (like screenshot) -->
              <svg class="absolute -bottom-24 left-1/2 -translate-x-1/2 w-[140%] opacity-90" viewBox="0 0 1440 320" aria-hidden="true">
                <path fill="#ffffff" fill-opacity="1"
                  d="M0,288L48,272C96,256,192,224,288,218.7C384,213,480,235,576,234.7C672,235,768,213,864,197.3C960,181,1056,171,1152,186.7C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>