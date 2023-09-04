<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url() . 'assets/css/toast.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/hamburger.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/universal.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/navbar.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/car-collection.css' ?>" />

  <script src="<?= base_url() . 'assets/js/navbar.js' ?>" defer></script>
  <script src="<?= base_url() . 'assets/js/modal.js' ?>" defer></script>

  <!-- FONT AWESOME  -->
  <script src="https://kit.fontawesome.com/ce64f64b31.js" crossorigin="anonymous"></script>


  <title>Document</title>
</head>

<body>
  <?php $this->load->view("components/navbar"); ?>

  <div class="car-collection">
    <div class="container">
      <div class="wrapper">

        <?php if (isset($message)) { ?>
          <p class="toast"> <?= $message; ?></p>
        <?php } ?>

        <div class="titles">
          <h1>Our Collection</h1>
          <p>
            Find the perfect rental car that suits your needs and preferences
          </p>
        </div>

        <!-- <form class="search-area">
          <select name="" id="">
            <option value="" disabled selected>Brand</option>
            <option value="">Option 1</option>
            <option value="">Option 1</option>
          </select>
          <select name="" id="">
            <option value="" disabled selected>Transmission</option>
            <option value="">Option 1</option>
            <option value="">Option 1</option>
          </select>
          <select name="" id="">
            <option value="" disabled selected>Type</option>
            <option value="">Option 1</option>
            <option value="">Option 1</option>
          </select>

          <button type="submit" class="btn-outline">
            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
            Search
          </button>
        </form> -->

        <div class="car-list">
          <div id="myModal" class="modal">
            <div class="modal-content" id="modal-content">
              <i class="fa-solid fa-xmark close" id="closeModalBtn"></i>
              <img src="" alt="car-img" id="car-detail-img" />
              <h1 id="car-detail-name"></h1>
              <?php foreach ($cars[0] as  $key => $carDetails) {
                if ($key != 'img') { ?>
                  <div class="car-detail">
                    <p> <?= ucfirst($key)  ?></p>
                    <p id="car-detail-<?= $key ?>"></p>
                  </div>
              <?php }
              } ?>

              <a id="booking-id" href="<?php echo base_url() . 'booking/' . "" ?>">BOOK NOW</a>
            </div>
          </div>

          <?php foreach ($cars as $car) { ?>
            <div class="car-item" id="openModalBtn" onclick='showModal(<?php echo json_encode($car) ?>)'>
              <div class="car-row car-title">
                <div class="model">
                  <h2><?= $car->brand . " " . $car->model ?></h2>
                  <p><?= $car->year ?></p>
                </div>
                <p class="price"><span>₱<?= $car->price ?></span>/Day</p>
              </div>
              <div class="car-row car-img">
                <div class="car-shadow"></div>
                <img src=<?= base_url() . 'assets/images/cars/' . strtolower($car->brand)  . '-' . strtolower($car->model) . ".png" ?> alt="car-img" />
              </div>
              <div class="car-row car-specs">
                <div class="car-spec">
                  <i class="fa-solid fa-car fa-lg"></i>
                  <p><?= $car->transmission ?></p>
                </div>
                <div class="car-spec">
                  <i class="fa-solid fa-gas-pump fa-lg"></i>
                  <p><?= $car->fuel ?></p>
                </div>
                <div class="car-spec">
                  <i class="fa-solid fa-gear fa-lg"></i>
                  <p><?= $car->machine ?></p>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</body>

</html>