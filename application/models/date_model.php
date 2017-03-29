
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function datethai($date){

		$mounth = array(
			"01" => "ม.ค",
			"02" =>"ก.พ",
			"03"=>"มี.ค",
			"04"=>"เม.ย",
			"05"=>"พ.ค",
			"06"=>"มิ.ย",
			"07"=>"ก.ค",
			"08"=>"ส.ค",
			"09"=>"ก.ย",
			"10"=>"ต.ค",
			"11"=>"พ.ย",
			"12"=>"ธ.ค"

			);

		$STR =$date;

	$array_fulldate = explode("-",$STR);
	$array_fulldate[2]=($array_fulldate[2]*1)+543;
	//var_dump($array_fulldate);
	$array_fulldate[1] = $mounth[$array_fulldate[1]];
		//var_dump($array_fulldate);
		return 'วันที่ '.$array_fulldate[0].' เดือน '.$array_fulldate[1].' ปี '.$array_fulldate[2];
	//echo implode("*",$array_fulldate);


	

	}

}

/* End of file date_model.php */
/* Location: ./application/models/date_model.php */