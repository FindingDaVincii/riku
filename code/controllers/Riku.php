<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Riku extends CI_Controller {

  public function index(){

    $data = [];

    $this->load->model('news/latest');

    $data['news'] = $this->latest->get_news();

    $this->load->view('riku',$data);
  }

}
