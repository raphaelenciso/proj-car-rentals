<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url() . 'assets/css/universal.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/navbar.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/login.css' ?>" />

  <title>Car Rental - Signup</title>
</head>

<body>
  <?php $this->load->view("components/navbar"); ?>

  <div class="login">
    <div class="container">
      <!-- left image -->
      <div class="left" id="test"></div>

      <!-- right signup -->
      <div class="right">
        <h1>Signup</h1>
        <p>Just some details to get you in.!</p>


        <?= form_open('users/signup'); ?>

        <input type="text" name="fullName" placeholder="Full Name" value="<?= set_value('fullName'); ?>" />

        <input type="email" name="email" placeholder="Email Address" value="<?= set_value("email"); ?>" />

        <input type="tel" name="phone" placeholder="Phone Number" value="<?= set_value("phone"); ?>" />

        <input type="password" name="password" placeholder="Password" value="<?= set_value("password"); ?>" />

        <input type="password" name="cPassword" placeholder="Confirm Password" value="<?= set_value("cPassword"); ?>" />

        <button type="submit">Signup</button>

        <div class="error-messages">
          <?= validation_errors(); ?>
        </div>

        <?= form_close(); ?>

        <div class="separator">Or</div>

        <div class="icons">
          <a href="">
            <img src="<?= base_url() . 'assets/icons/google_icon.svg' ?>" alt="google_icon" />
          </a>
          <a href="">
            <img src="<?= base_url() . 'assets/icons/fb_icon.svg' ?>" alt="fb_icon" />
          </a>
          <a href="">
            <img src="<?= base_url() . 'assets/icons/github_icon.svg' ?>" alt="github_icon" />
          </a>
        </div>

        <p class="signup-link">
          Already Registered ? <a href="<?= base_url() . "login" ?>">Login</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>