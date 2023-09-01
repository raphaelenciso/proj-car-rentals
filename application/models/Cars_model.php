<?php

class Cars_model extends CI_Model {
  public function search_cars() {
    $this->db->select("cars.id, cars.model, cars.year, cars.price, cars.transmission, cars.fuel, cars.machine, cars.seats, cars.body, brands.brand");
    $this->db->from("cars");
    $this->db->join("brands", "cars.brand_id = brands.id", "inner");
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $data['cars'] = $query->result();
      return $data;
    } else {
      $data['cars'] = array();
      return $data;
    }
  }

  function search_car($id) {
    $this->db->select("cars.id, cars.model, cars.year, cars.price, cars.transmission, cars.fuel, cars.machine, cars.seats, cars.body, brands.brand");
    $this->db->from("cars");
    $this->db->join("brands", "cars.brand_id = brands.id", "inner");
    $this->db->where("cars.id = $id");
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $data["car"] = $query->row();
      return $data;
    } else {
      $data["car"] = array();
      return $data;
    }
  }
}
