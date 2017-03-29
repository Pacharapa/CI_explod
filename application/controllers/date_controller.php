<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->view('dateview');
		$this->load->model('date_model');
	}

	public function index(){
		
	}
	public function get_date(){
		$date=$this->input->post('date');
		$datethai=$this->date_model->datethai($date);
		echo $datethai;
		//echo  $date;
	}
}

/* End of file date_controller.php */
/* Location: ./application/controllers/date_controller.php */
?>