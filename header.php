<?php
$img = get_template_directory_uri() . '/images/';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO: title, description and social tags -->
  <title>DMCC Logistic Pvt. Ltd. | Safe, Reliable Transport Solutions in India</title>
  <meta name="description" content="DMCC Logistic Private Limited provides safe, reliable and cost-effective transport solutions across India. Offices in Delhi, Bengaluru and Chennai.">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#10489F">
  <meta property="og:type" content="website">
  <meta property="og:title" content="DMCC Logistic | Your Cargo, Our Commitment">
  <meta property="og:description" content="Safe, reliable and cost-effective transport solutions across India.">
  <meta property="og:image" content="<?php echo esc_url($img . 'hero-1920.webp'); ?>">
  <link rel="icon" type="image/png" href="<?php echo esc_url($img . 'favicon.png'); ?>">

  <!-- SEO: schema markup -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "DMCC Logistic Private Limited",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "logo": "<?php echo esc_url($img . 'logo.webp'); ?>",
    "slogan": "Your cargo, our commitment.",
    "foundingDate": "2022",
    "email": "basant.tomar@dmcclogistic.com",
    "telephone": "+91-9910073670",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "2nd Floor, Shop No. 208-209, Plot No. 6, Sec-6, LSC-3, Aggarwal Dwarka Plaza",
      "addressLocality": "South West Delhi",
      "addressRegion": "Delhi",
      "postalCode": "110075",
      "addressCountry": "IN"
    }
  }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ================= NAVBAR ================= -->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#home">
        <img src="<?php echo esc_url($img . 'logo.webp'); ?>" width="600" height="477" alt="DMCC Logistic Private Limited logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-label="Open menu">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#fleet">Fleet</a></li>
          <li class="nav-item"><a class="nav-link" href="#industries">Industries</a></li>
          <li class="nav-item"><a class="nav-link" href="#safety">Safety</a></li>
          <li class="nav-item"><a class="nav-link" href="#quality">Quality</a></li>
          <li class="nav-item ms-lg-3"><a class="btn btn-blue" href="#contact"><?php dmcc_e('nav_cta_text'); ?></a></li>
        </ul>
      </div>
    </div>
  </nav>
