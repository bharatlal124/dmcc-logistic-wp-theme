<?php
$img = get_template_directory_uri() . '/images/';
?>

  <!-- ================= FOOTER ================= -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- Left: hexagon logo + tagline -->
        <div class="col-lg-5 d-flex align-items-center gap-4">
          <div class="hex-badge">
            <div class="hex-inner">
              <img src="<?php echo esc_url($img . 'logo.webp'); ?>" width="600" height="477" loading="lazy" alt="DMCC Logistic logo">
            </div>
          </div>
          <p class="footer-tag">Your cargo, our commitment.</p>
        </div>

        <!-- Right: menu links -->
        <div class="col-lg-7">
          <ul class="footer-links">
            <li><a href="#about">About</a></li>
            <li><a href="#fleet">Fleet</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="#safety">Safety</a></li>
            <li><a href="#quality">Quality</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>

      <p class="footer-copy">&copy; <span id="year"><?php echo esc_html(date('Y')); ?></span> DMCC Logistic Private Limited. All rights reserved.</p>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
