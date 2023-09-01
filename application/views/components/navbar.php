    <!-- START NAVBAR  -->
    <nav class="navbar">
      <div class="container">
        <a href="<?php echo base_url() ?>" class="logo">Car Rental</a>
        <ul id="navItems">
          <li>
            <a href="<?php echo base_url() . 'car-collection' ?>">Car Collection</a>
          </li>
          <li>
            <a href="<?php echo base_url() . '#contact-us' ?>">Contact Us</a>
          </li>

          <?php if ($this->session->has_userdata('email')) { ?>
            <li><a href="<?php echo base_url() . 'users/logout' ?>">LOGOUT</a></li>
          <?php  } else { ?>
            <li><a href="<?php echo base_url() . 'login' ?>">LOGIN</a></li>
          <?php  } ?>

        </ul>
        <button class="hamburger hamburger--spin-r" type="button" id="hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </nav>
    <!-- END OF NAVBAR  -->