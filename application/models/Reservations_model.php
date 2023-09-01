<?php
class Reservations_model extends CI_Model {
  function add_reservation($formData) {
    $query = $this->db->insert("reservations", $formData);

    if ($query) {
      return true;
    } else {
      return false;
    }
  }
}
