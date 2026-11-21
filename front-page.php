<?php
/**
 * Homepage template
 */
get_header();
$img = get_template_directory_uri() . '/images/';
?>

  <main>

    <!-- ================= HERO ================= -->
    <section class="hero" id="home">
      <img class="hero-img" src="<?php echo esc_url($img . 'hero-1920.webp'); ?>" width="1920" height="1280" alt="White container truck driving on a highway at sunset">
      <div class="hero-overlay"></div>

      <div class="container hero-content">
        <div class="row">
          <div class="col-lg-7">
            <h1 class="hero-title">Your cargo,<br>our commitment.</h1>
            <p class="hero-text">Safe, reliable and cost-effective transport solutions across India, from a Tata Ace pickup to a 32 ft container.</p>
            <div class="hero-buttons">
              <a href="#contact" class="btn btn-gold">Get a quote</a>
              <a href="#fleet" class="btn btn-outline-light">See our fleet</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="stats">
      <div class="container">
        <div class="stats-box row text-center g-0">
          <div class="col-6 col-md-3 stat"><h2>2022</h2><p>Founded</p></div>
          <div class="col-6 col-md-3 stat"><h2>3</h2><p>Offices: Delhi, Bengaluru, Chennai</p></div>
          <div class="col-6 col-md-3 stat"><h2>8</h2><p>Vehicle types</p></div>
          <div class="col-6 col-md-3 stat"><h2>8</h2><p>Industries served</p></div>
        </div>
      </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section class="section" id="about">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-6 photo-col reveal-left">
            <img class="photo" src="<?php echo esc_url($img . 'team-1440.webp'); ?>" width="1440" height="796" loading="lazy" alt="Logistics team in hard hats and safety vests at a freight yard">
          </div>
          <div class="col-lg-6 reveal-right d-flex flex-column justify-content-center">
            <h2>Moving cargo from Delhi, Bengaluru and Chennai</h2>
            <p class="big">DMCC Logistics is a pioneering force in the transport solutions landscape, founded in 2022. Based out of Delhi, we have a strong presence with offices in Chennai and Bangalore, and we are expanding.</p>
            <p>Our client base spans industrial houses, corporate sectors, IT, ITES, automotive, manufacturing, educational and healthcare sectors.</p>

            <h3 class="small-title">Offices</h3>
            <div>
              <span class="tag">Delhi (Corporate office)</span>
              <span class="tag">Bengaluru</span>
              <span class="tag">Chennai</span>
            </div>

            <h3 class="small-title">Expanding to</h3>
            <div>
              <span class="tag tag-gold">Mumbai</span>
              <span class="tag tag-gold">Hyderabad</span>
              <span class="tag tag-gold">Ahmedabad</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= MISSION & VISION ================= -->
    <section class="purpose">
      <img class="bg-img" src="<?php echo esc_url($img . 'convoy-1200.webp'); ?>" width="1200" height="686" loading="lazy" alt="">
      <div class="bg-overlay"></div>
      <div class="container purpose-content">
        <div class="cards">
          <div class="box box-blue reveal-left">
            <i class="bi bi-bullseye"></i>
            <div>
              <h2>Our mission</h2>
              <p>To provide safe, reliable and cost-effective transport solutions, exceeding our customers' expectations and building long-term relationships.</p>
            </div>
          </div>
          <div class="box box-gold reveal-right">
            <i class="bi bi-eye"></i>
            <div>
              <h2>Our vision</h2>
              <p>To be India's most trusted transport solutions provider, setting the benchmark in safety, reliability and customer delight.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= FLEET ================= -->
    <section class="section bg-grey" id="fleet">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-7 reveal-left d-flex flex-column justify-content-center">
            <h2>A vehicle for every load</h2>
            <p class="big">Pickup vans and trucks for city runs, and containers up to 32 feet for long-haul freight.</p>

            <h3 class="small-title">Pickup vans and trucks</h3>
            <div class="row g-3 vehicles">
              <div class="col-sm-4"><div class="vehicle"><i class="bi bi-truck"></i> <strong>Tata Ace</strong></div></div>
              <div class="col-sm-4"><div class="vehicle"><i class="bi bi-truck-flatbed"></i> <strong>Pickup</strong></div></div>
              <div class="col-sm-4"><div class="vehicle"><i class="bi bi-box-seam"></i> <strong>407</strong></div></div>
            </div>

            <h3 class="small-title">Trucks and containers by length</h3>
            <div class="length"><span>14 ft</span><div class="track"><div class="bar" style="width: 44%"></div></div></div>
            <div class="length"><span>17 ft</span><div class="track"><div class="bar" style="width: 53%"></div></div></div>
            <div class="length"><span>20 ft</span><div class="track"><div class="bar" style="width: 63%"></div></div></div>
            <div class="length"><span>24 ft</span><div class="track"><div class="bar" style="width: 75%"></div></div></div>
            <div class="length"><span>32 ft</span><div class="track"><div class="bar bar-gold" style="width: 100%"></div></div></div>
          </div>
          <div class="col-lg-5 photo-col reveal-right">
            <img class="photo" src="<?php echo esc_url($img . 'fleet-truck.webp'); ?>" width="1100" height="829" loading="lazy" alt="White truck carrying a freight container at sunset">
          </div>
        </div>
      </div>
    </section>

    <!-- ================= INDUSTRIES ================= -->
    <section class="section" id="industries">
      <div class="container">
        <h2 class="reveal-up">Trusted by teams across eight sectors</h2>
        <p class="big reveal-up">From factory floors to hospital supply lines, we move what your business depends on.</p>

        <div class="row g-3 mt-3 industry-row">
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-buildings"></i><h3>Industrial houses</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-briefcase"></i><h3>Corporate sector</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-cpu"></i><h3>IT</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-headset"></i><h3>ITES</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-car-front"></i><h3>Automotive</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-gear-wide-connected"></i><h3>Manufacturing</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-mortarboard"></i><h3>Education</h3></div></div>
          <div class="col-6 col-lg-3"><div class="industry"><i class="bi bi-heart-pulse"></i><h3>Healthcare</h3></div></div>
        </div>
      </div>
    </section>

    <!-- ================= SAFETY ================= -->
    <section class="section bg-grey" id="safety">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-6 reveal-left d-flex flex-column justify-content-center">
            <h2>Safety built into every trip</h2>

            <h3 class="small-title">On every vehicle</h3>
            <ul class="feature-list">
              <li><i class="bi bi-geo-alt"></i> GPS tracker for real-time monitoring</li>
              <li><i class="bi bi-camera-video"></i> Camera for added security</li>
              <li><i class="bi bi-fire"></i> Fire extinguisher for fire safety</li>
              <li><i class="bi bi-wrench-adjustable"></i> Well-maintained vehicles in excellent condition</li>
            </ul>

            <h3 class="small-title">Behind the wheel</h3>
            <ul class="feature-list">
              <li><i class="bi bi-person-vcard"></i> Experienced drivers with valid licences</li>
              <li><i class="bi bi-person-check"></i> Properly trained drivers for safe driving practices</li>
            </ul>
          </div>
          <div class="col-lg-6 photo-col reveal-right">
            <img class="photo" src="<?php echo esc_url($img . 'network-680.webp'); ?>" width="680" height="451" loading="lazy" alt="Freight truck on a city highway with a glowing tracking network map">
          </div>
        </div>
      </div>
    </section>

    <!-- ================= QUALITY ================= -->
    <section class="section quality" id="quality">
      <div class="container">
        <div class="row g-4 g-lg-5">
          <div class="col-lg-5 reveal-left">
            <h2>Quality management system</h2>
            <p class="big">Our QMS ensures high-quality services, meeting customer expectations.</p>
            <p>Embracing QMS, we drive excellence, customer satisfaction and continuous improvement.</p>
          </div>
          <div class="col-lg-7">
            <div class="row g-3 pillars">
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-emoji-smile"></i> Customer satisfaction</div></div>
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-cash-coin"></i> Cost efficiency</div></div>
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-lightbulb"></i> Innovative services</div></div>
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-shield-check"></i> Zero complaints</div></div>
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-journal-check"></i> Regular training</div></div>
              <div class="col-sm-6"><div class="pillar"><i class="bi bi-book"></i> Employee education</div></div>
              <div class="col-12"><div class="pillar"><i class="bi bi-patch-check"></i> Compliance with national and corporate standards</div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= CONTACT ================= -->
    <section class="section" id="contact">
      <div class="container">
        <h2 class="reveal-up">Talk to our team</h2>
        <p class="big reveal-up">Tell us what you are moving and where. We will reply with a quote and the right vehicle.</p>

        <div class="row g-3 my-3 people">
          <div class="col-md-4">
            <div class="person">
              <div class="avatar">BT</div>
              <h3>Basant Tomar</h3>
              <a href="mailto:basant.tomar@dmcclogistic.com">basant.tomar@dmcclogistic.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="person">
              <div class="avatar">AS</div>
              <h3>Arul S</h3>
              <a href="mailto:arul.s@dmcclogistic.com">arul.s@dmcclogistic.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="person">
              <div class="avatar">RG</div>
              <h3>Ravi Gowda</h3>
              <a href="mailto:ravi.gowda@dmcclogistic.com">ravi.gowda@dmcclogistic.com</a>
            </div>
          </div>
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
                  <button class="btn btn-blue" type="submit">Send request</button>
                </div>
              </div>
            </form>
          </div>

          <!-- Office addresses -->
          <div class="col-lg-5">
            <div class="office">
              <h3>Corporate office, Delhi</h3>
              <p>2nd Floor, Shop No. 208-209, Plot No. 6, Sec-6, LSC-3, Aggarwal Dwarka Plaza, South West Delhi, Delhi 110075</p>
            </div>
            <div class="office">
              <h3>Bengaluru office</h3>
              <p>#A-23, 1st Cross, Prakruthi Nagar, Kogilu, Bengaluru 560064</p>
            </div>
            <div class="office">
              <h3>Chennai office</h3>
              <p>143, Dr M.G.R Road, 2nd Floor, East Wing, RMZ Millenia Business Park, Perungudi, Sholinganallur, Chennai 600096</p>
            </div>
            <div class="office">
              <h3>Call us</h3>
              <p>
                <a href="tel:+919910073670">99100 73670</a> &nbsp;
                <a href="tel:+917353535353">73535 35353</a> &nbsp;
                <a href="tel:+919566738884">95667 38884</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
