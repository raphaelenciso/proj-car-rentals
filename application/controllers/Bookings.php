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
      "start_date_time" => $this->input->post("start-date"),
      "end_date_time" => $this->input->post("end-date"),
      "delivery_location" => $this->input->post("del-loc")
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
