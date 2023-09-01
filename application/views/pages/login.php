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
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/login.css' ?> " />

  <title>Car Rental - Login</title>
</head>

<body>
  <?php $this->load->view("components/navbar"); ?>

  <div class="login">
    <div class="container">
      <!-- left image -->
      <div class="left">
      </div>

      <!-- right login -->
      <div class="right">
        <h1>Login</h1>
        <p>Glad you're back.!</p>

        <?= form_open('users/login'); ?>

        <input type="text" placeholder="Email Address" name="email" value="<?= set_value('email') ?>" />
        <input type="password" placeholder="Password" name="password" value="<?= set_value('password') ?>" />

        <div class="error-messages">
          <?= validation_errors(); ?>
          <?php if (isset($error)) {
            echo "<p> " . $error . "</p>";
          } ?>
        </div>

        <div class=" remember-box">
          <input type="checkbox" name="" id="" />
          <p>Remember me</p>
        </div>

        <button type="submit">Login</button>
        <a href="#">Forgot password ?</a>



        <?= form_close(); ?>

        <div class="separator">Or</div>

        <div class="icons">
          <a href="">
            <img src="<?php echo base_url() . 'assets/icons/google_icon.svg' ?>" alt="google_icon" />
          </a>
          <a href="">
            <img src="<?php echo base_url() . 'assets/icons/fb_icon.svg" alt="fb_icon' ?>" />
          </a>
          <a href="">
            <img src="<?php echo base_url() . 'assets/icons/github_icon.svg' ?>" alt="github_icon" />
          </a>
        </div>

        <p class="signup-link">
          Don't you have an account ? <a href="<?php echo base_url() . "signup" ?>">Sign up</a>
        </p>
      </div>
    </div>
  </div>
</body>

</html>