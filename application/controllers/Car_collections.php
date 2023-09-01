<?php

class Car_collections extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model("cars_model");
  }

  public function index() {
    $data = $this->cars_model->search_cars();

    if ($this->input->get('message') != null) {
      $message = $this->input->get('message');
      $data['message'] = urldecode($message);
    }

    // print_r($data);

    $this->load->view("pages/car-collection", $data);
  }
}
