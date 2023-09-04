<?php
class Bookings extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model("cars_model");
    $this->load->model("reservations_model");
  }

  function index($id) {
    if ($this->session->userdata("email")) {
      $data = $this->cars_model->search_car($id);

      $this->load->view("pages/booking", $data);
    } else {
      redirect("login");
    }
  }

  function add_reservation() {
    $formData = array(
      "user_id" => $this->session->userdata("id"),
      "car_id" => $this->input->post("car-id"),
      "pickup_date_time" => $this->input->post("pickup-start-date"),
      "duration" => $this->input->post("duration"),
      "total_price" => $this->input->post("total-price")
    );

    if ($this->session->userdata("email")) {
      $isInserted = $this->reservations_model->add_reservation($formData);
      if ($isInserted) {
        $data['message'] = 'Reservation has been submitted.';
      } else {
        $data['message'] = "Something went wrong.";
      }

      redirect('car_collections/index?message=' . urlencode($data['message']));
    }
  }
}
