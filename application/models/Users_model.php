<?php
class Users_model extends CI_Model {
  public function register($formData) {
    // $valid = FALSE;
    // $message = "";
    // $error = "";

    $this->db->insert('users', $formData);

    // if (!$this->db->_error_message()) {
    //   $valid = TRUE;
    //   $message = "Signup Success";
    // } else {
    //   $error = $this->db->_error_message();
    // }

    // $data["valid"] = $valid;
    // $data["message"] = $message;
    // $data["error"] = $error;

    // return $data;
  }

  public function login($email, $password) {
    $valid = FALSE;
    $message = "";
    $error = "Invalid username or password";

    $where_array =  array(
      'email' => $email,
      'password' => $password,
    );

    $this->db->from('users');
    $this->db->where($where_array);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $valid = TRUE;
      $error = "";
    }

    $data["valid"] = $valid;
    $data["message"] = $message;
    $data["error"] = $error;
    $data["query"] = $query;

    return $data;
  }
}
