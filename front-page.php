<?php
/**
 * Homepage template - every text, button and image comes from ACF fields
 * (Pages > Home > edit). Defaults live in inc/defaults.php.
 */
get_header();
?>

  <main>

    <!-- ================= HERO ================= -->
    <section class="hero" id="home">
      <img class="hero-img" src="<?php echo esc_url(dmcc_image('hero_image', 'hero-1920.webp')); ?>" width="1920" height="1280" alt="White container truck driving on a highway at sunset">
      <div class="hero-overlay"></div>

      <div class="container hero-content">
        <div class="row">
          <div class="col-lg-7">
            <h1 class="hero-title"><?php echo wp_kses(dmcc_field('hero_title'), array('br' => array())); ?></h1>
            <p class="hero-text"><?php dmcc_e('hero_text'); ?></p>
            <div class="hero-buttons">
              <a href="<?php echo esc_url(dmcc_field('hero_btn1_link')); ?>" class="btn btn-gold"><?php dmcc_e('hero_btn1_text'); ?></a>
              <a href="<?php echo esc_url(dmcc_field('hero_btn2_link')); ?>" class="btn btn-outline-light"><?php dmcc_e('hero_btn2_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="stats">
      <div class="container">
        <div class="stats-box row text-center g-0">
          <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div class="col-6 col-md-3 stat"><h2><?php dmcc_e("stat_{$i}_number"); ?></h2><p><?php dmcc_e("stat_{$i}_label"); ?></p></div>
          <?php endfor; ?>
        </div>
      </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section class="section" id="about">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-6 photo-col reveal-left">
            <img class="photo" src="<?php echo esc_url(dmcc_image('about_image', 'team-1440.webp')); ?>" width="1440" height="796" loading="lazy" alt="Logistics team in hard hats and safety vests at a freight yard">
          </div>
          <div class="col-lg-6 reveal-right d-flex flex-column justify-content-center">
            <h2><?php dmcc_e('about_title'); ?></h2>
            <p class="big"><?php dmcc_e('about_para1'); ?></p>
            <p><?php dmcc_e('about_para2'); ?></p>

            <h3 class="small-title"><?php dmcc_e('about_offices_heading'); ?></h3>
            <div>
              <?php for ($i = 1; $i <= 3; $i++) : ?>
                <span class="tag"><?php dmcc_e("about_office_{$i}"); ?></span>
              <?php endfor; ?>
            </div>

            <h3 class="small-title"><?php dmcc_e('about_expand_heading'); ?></h3>
            <div>
              <?php for ($i = 1; $i <= 3; $i++) : ?>
                <span class="tag tag-gold"><?php dmcc_e("about_expand_{$i}"); ?></span>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= MISSION & VISION ================= -->
    <section class="purpose">
      <img class="bg-img" src="<?php echo esc_url(dmcc_image('purpose_image', 'convoy-1200.webp')); ?>" width="1200" height="686" loading="lazy" alt="">
      <div class="bg-overlay"></div>
      <div class="container purpose-content">
        <div class="cards">
          <div class="box box-blue reveal-left">
            <i class="bi bi-bullseye"></i>
            <div>
              <h2><?php dmcc_e('mission_title'); ?></h2>
              <p><?php dmcc_e('mission_text'); ?></p>
            </div>
          </div>
          <div class="box box-gold reveal-right">
            <i class="bi bi-eye"></i>
            <div>
              <h2><?php dmcc_e('vision_title'); ?></h2>
              <p><?php dmcc_e('vision_text'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= FLEET ================= -->
    <?php
      $vehicle_icons = array(1 => 'bi-truck', 2 => 'bi-truck-flatbed', 3 => 'bi-box-seam');
    ?>
    <section class="section bg-grey" id="fleet">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-7 reveal-left d-flex flex-column justify-content-center">
            <h2><?php dmcc_e('fleet_title'); ?></h2>
            <p class="big"><?php dmcc_e('fleet_intro'); ?></p>

            <h3 class="small-title"><?php dmcc_e('fleet_vehicles_heading'); ?></h3>
            <div class="row g-3 vehicles">
              <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="col-sm-4"><div class="vehicle"><i class="bi <?php echo esc_attr($vehicle_icons[$i]); ?>"></i> <strong><?php dmcc_e("vehicle_{$i}"); ?></strong></div></div>
              <?php endfor; ?>
            </div>

            <h3 class="small-title"><?php dmcc_e('fleet_lengths_heading'); ?></h3>
            <?php for ($i = 1; $i <= 5; $i++) :
              $percent = max(0, min(100, (int) dmcc_field("length_{$i}_percent")));
              $bar_class = ($i === 5) ? 'bar bar-gold' : 'bar'; ?>
              <div class="length"><span><?php dmcc_e("length_{$i}_label"); ?></span><div class="track"><div class="<?php echo esc_attr($bar_class); ?>" style="width: <?php echo esc_attr($percent); ?>%"></div></div></div>
            <?php endfor; ?>
          </div>
          <div class="col-lg-5 photo-col reveal-right">
            <img class="photo" src="<?php echo esc_url(dmcc_image('fleet_image', 'fleet-truck.webp')); ?>" width="1100" height="829" loading="lazy" alt="White truck carrying a freight container at sunset">
          </div>
        </div>
      </div>
    </section>

    <!-- ================= INDUSTRIES ================= -->
    <?php
      $industry_icons = array(1 => 'bi-buildings', 2 => 'bi-briefcase', 3 => 'bi-cpu', 4 => 'bi-headset', 5 => 'bi-car-front', 6 => 'bi-gear-wide-connected', 7 => 'bi-mortarboard', 8 => 'bi-heart-pulse');
    ?>
    <section class="section" id="industries">
      <div class="container">
        <h2 class="reveal-up"><?php dmcc_e('industries_title'); ?></h2>
        <p class="big reveal-up"><?php dmcc_e('industries_intro'); ?></p>

        <div class="row g-3 mt-3 industry-row">
          <?php for ($i = 1; $i <= 8; $i++) : ?>
            <div class="col-6 col-lg-3"><div class="industry"><i class="bi <?php echo esc_attr($industry_icons[$i]); ?>"></i><h3><?php dmcc_e("industry_{$i}"); ?></h3></div></div>
          <?php endfor; ?>
        </div>
      </div>
    </section>

    <!-- ================= SAFETY ================= -->
    <?php
      $safety_vehicle_icons = array(1 => 'bi-geo-alt', 2 => 'bi-camera-video', 3 => 'bi-fire', 4 => 'bi-wrench-adjustable');
      $safety_driver_icons  = array(1 => 'bi-person-vcard', 2 => 'bi-person-check');
    ?>
    <section class="section bg-grey" id="safety">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-6 reveal-left d-flex flex-column justify-content-center">
            <h2><?php dmcc_e('safety_title'); ?></h2>

            <h3 class="small-title"><?php dmcc_e('safety_group1_heading'); ?></h3>
            <ul class="feature-list">
              <?php for ($i = 1; $i <= 4; $i++) : ?>
                <li><i class="bi <?php echo esc_attr($safety_vehicle_icons[$i]); ?>"></i> <?php dmcc_e("safety_vehicle_{$i}"); ?></li>
              <?php endfor; ?>
            </ul>

            <h3 class="small-title"><?php dmcc_e('safety_group2_heading'); ?></h3>
            <ul class="feature-list">
              <?php for ($i = 1; $i <= 2; $i++) : ?>
                <li><i class="bi <?php echo esc_attr($safety_driver_icons[$i]); ?>"></i> <?php dmcc_e("safety_driver_{$i}"); ?></li>
              <?php endfor; ?>
            </ul>
          </div>
          <div class="col-lg-6 photo-col reveal-right">
            <img class="photo" src="<?php echo esc_url(dmcc_image('safety_image', 'network-680.webp')); ?>" width="680" height="451" loading="lazy" alt="Freight truck on a city highway with a glowing tracking network map">
          </div>
        </div>
      </div>
    </section>

    <!-- ================= QUALITY ================= -->
    <?php
      $pillar_icons = array(1 => 'bi-emoji-smile', 2 => 'bi-cash-coin', 3 => 'bi-lightbulb', 4 => 'bi-shield-check', 5 => 'bi-journal-check', 6 => 'bi-book', 7 => 'bi-patch-check');
    ?>
    <section class="section quality" id="quality">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-5 reveal-left">
            <h2><?php dmcc_e('quality_title'); ?></h2>
            <p class="big"><?php dmcc_e('quality_intro'); ?></p>
            <p><?php dmcc_e('quality_text'); ?></p>
          </div>
          <div class="col-lg-7">
            <div class="row g-3 pillars">
              <?php for ($i = 1; $i <= 7; $i++) :
                $col = ($i === 7) ? 'col-12' : 'col-sm-6'; ?>
                <div class="<?php echo esc_attr($col); ?>"><div class="pillar"><i class="bi <?php echo esc_attr($pillar_icons[$i]); ?>"></i> <?php dmcc_e("pillar_{$i}"); ?></div></div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= CONTACT ================= -->
    <section class="section" id="contact">
      <div class="container">
        <h2 class="reveal-up"><?php dmcc_e('contact_title'); ?></h2>
        <p class="big reveal-up"><?php dmcc_e('contact_intro'); ?></p>

        <div class="row g-3 my-3 people">
          <?php for ($i = 1; $i <= 3; $i++) :
            $person_name  = dmcc_field("person_{$i}_name");
            $person_email = dmcc_field("person_{$i}_email"); ?>
            <div class="col-md-4">
              <div class="person">
                <div class="avatar"><?php echo esc_html(dmcc_initials($person_name)); ?></div>
                <h3><?php echo esc_html($person_name); ?></h3>
                <a href="mailto:<?php echo esc_attr(antispambot($person_email)); ?>"><?php echo esc_html($person_email); ?></a>
              </div>
            </div>
          <?php endfor; ?>
        </div>

        <div class="row g-4 g-lg-5 mt-2">
          <!-- Quote form -->
          <div class="col-lg-7">
            <form class="quote-form" id="quoteForm">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="name">Your name</label>
                  <input class="form-control" id="name" type="text" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="phone">Phone number</label>
                  <input class="form-control" id="phone" type="tel" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="email">Email</label>
                  <input class="form-control" id="email" type="email" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="vehicle">Vehicle needed</label>
                  <select class="form-select" id="vehicle" required>
                    <option value="">Choose a vehicle</option>
                    <option>Tata Ace</option>
                    <option>Pickup</option>
                    <option>407</option>
                    <option>14 ft truck</option>
                    <option>17 ft truck</option>
                    <option>20 ft truck</option>
                    <option>24 ft container</option>
                    <option>32 ft container</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label" for="route">Pickup and drop cities</label>
                  <input class="form-control" id="route" type="text" placeholder="Example: Delhi to Bengaluru" required>
                </div>
                <div class="col-12">
                  <label class="form-label" for="message">Cargo details</label>
                  <textarea class="form-control" id="message" rows="4" placeholder="Type of goods, weight, pickup date"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-blue" type="submit"><?php dmcc_e('form_button_text'); ?></button>
                </div>
              </div>
            </form>
          </div>

          <!-- Office addresses -->
          <div class="col-lg-5">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
              <div class="office">
                <h3><?php dmcc_e("address_{$i}_title"); ?></h3>
                <p><?php dmcc_e("address_{$i}_text"); ?></p>
              </div>
            <?php endfor; ?>
            <div class="office">
              <h3><?php dmcc_e('call_title'); ?></h3>
              <p>
                <?php for ($i = 1; $i <= 3; $i++) :
                  $phone = dmcc_field("phone_{$i}"); ?>
                  <a href="<?php echo esc_url(dmcc_tel($phone)); ?>"><?php echo esc_html($phone); ?></a> &nbsp;
                <?php endfor; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
