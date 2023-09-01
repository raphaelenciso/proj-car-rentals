<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url() . 'assets/css/hamburger.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/universal.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/navbar.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/booking.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/modal.css' ?>" />

  <script src="<?= base_url() . 'assets/js/navbar.js' ?>" defer></script>
  <script src="<?= base_url() . 'assets/js/modal.js' ?>" defer></script>

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/ce64f64b31.js" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body>
  <?php $this->load->view("components/navbar"); ?>

  <!-- START HEADER  -->
  <section class="booking-header">
    <div class="container">
      <div class="wrapper">
        <h1>Reservation Request Form</h1>
        <p>Fill out the necessary details to process your reservation</p>
      </div>
    </div>
  </section>
  <!-- END HEADER  -->

  <!-- START BOOKING FORM  -->
  <section class="booking">
    <div class="container">
      <?php echo form_open('bookings/add_reservation', array("class" => "wrapper")); ?>
      <?php echo form_hidden("car-id", $car->id) ?>
      <div class="details">
        <h1 class="title">Car Details</h1>
        <div class="car-details">
          <?php foreach ($car as $key => $carDetails) {
            if ($key != 'id') { ?>
              <div class="car-detail">
                <h3><?= strtoupper($key) ?></h3>
                <p><?= $carDetails ?></p>
              </div>
          <?php }
          } ?>

        </div>
      </div>
      <hr />
      <div class="details">
        <h1 class="title">Booking Details</h1>
        <div class="car-details">

          <div class="car-detail">
            <label>START DATE TIME</label>
            <input type="datetime-local" name="start-date" id="" required />
          </div>
          <div class="car-detail">
            <label>END DATE TIME</label>
            <input type="datetime-local" name="end-date" id="" required />
          </div>
          <div class="car-detail">
            <label>DELIVERY LOCATION</label>
            <input type="text" name="del-loc" id="" required />
          </div>
        </div>
        <div class="terms">
          <input type="checkbox" name="" id="" required />
          <p>
            By clicking the submit button below,I hereby agree to and accept
            the following terms and conditions.
          </p>
        </div>
        <button type="submit">RESERVE NOW</button>
      </div>
      <?php echo form_close(); ?>

    </div>
  </section>
  <!-- END BOOKING FORM  -->

  <div id="myModal" class="modal">
    <div class="modal-content" id="modal-content">
      <i class="fa-regular fa-circle-check" style="color: #ffa800"></i>
      <h2>RESERVATION SENT</h2>
      <p>
        Your car rental reservation has been successfully submitted. A
        confirmation email will be sent to you shortly with further details
      </p>
      <button id="closeModalBtn">Close</button>
    </div>
  </div>
</body>

</html>