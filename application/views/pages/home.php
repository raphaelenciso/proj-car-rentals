<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- CSS  -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/hamburger.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/universal.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/navbar.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/hero.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/car-brands.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/wcu.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/contact-us.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/mailing.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/footer.css' ?>" />

  <!-- JS -->
  <script src="<?php echo base_url() . 'assets/js/navbar.js' ?>" defer></script>

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/ce64f64b31.js" crossorigin="anonymous"></script>

  <title>Car Rental</title>
</head>

<body>
  <?php
  $this->load->view("components/navbar");
  $this->load->view("sections/hero");
  $this->load->view("sections/car-brands");
  $this->load->view("sections/wcu");
  $this->load->view("sections/contact-us");
  $this->load->view("sections/mailing");
  $this->load->view("sections/footer");
  ?>
</body>

</html>