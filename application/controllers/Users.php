<?php
class Users extends CI_Controller {
  public function __construct() {
    parent::__construct();

    // Load the database library
    $this->load->model('users_model');
  }


  public function signup() {
    $this->form_validation->set_rules('fullName', 'Full Name', 'required|is_unique[users.fullname]', array(
      'required'      => 'You have not provided %s.',
      'is_unique'     => 'This %s already exists.'
    ));
    $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.email]', array(
      'required'      => 'You have not provided %s.',
      'is_unique'     => 'This %s already exists.'
    ));
    $this->form_validation->set_rules('phone', 'Phone Number', 'required|is_unique[users.phone]', array(
      'required'      => 'You have not provided %s.',
      'is_unique'     => 'This %s already exists.'
    ));
    $this->form_validation->set_rules('password', 'Password', 'matches[cPassword]|required', array(
      'required'      => 'You have not provided %s.',
      'matches'     => 'Password does not match Confirm Password.'
    ));
    $this->form_validation->set_rules('cPassword', 'Confirm Password', 'required', array(
      'required'      => 'You have not provided %s.',
    ));


    if ($this->form_validation->run() == FALSE) {
      return $this->load->view('pages/signup');
    }

    $formData = array(
      "fullname" => $this->input->post('fullName'),
      "email" => $this->input->post('email'),
      "phone" => $this->input->post('phone'),
      "password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
    );



    $this->users_model->register($formData);

    redirect("login");
  }

  public function login() {
    $this->form_validation->set_rules('email', 'Email Address', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      return $this->load->view('pages/login');
    }

    $formData = array(
      "email" => $this->input->post('email'),
      "password" => $this->input->post('password'),
    );

    $data = $this->users_model->login($formData["email"], $formData["password"]);

    if ($data["valid"]) {
      foreach ($data["query"]->result() as $row) {
        $user_email = $row->email;
        $user_id = $row->id;
      }

      $sessiondata = array(
        "email" => $user_email,
        "id" => $user_id
      );

      $this->session->set_userdata($sessiondata);

      redirect("car-collection");
    } else {
      $this->load->view('pages/login', $data);
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect("");
  }
}
