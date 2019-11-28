<?php  
 /**
  * 
  */
 class FormController extends CI_Controller
 {
 	
 	public function index()
 	{
 		$this->load->view("form");
 	}
 	public function formdata()
 	{
 		//echo $email = $_POST['email'];
 		//echo $password = $_POST['pswd'];
 		$name = $this->input->post('name');
 		$mobile = $this->input->post('mobile');
 		$email = $this->input->post('email');
 		$pswd = $this->input->post('pswd');
        $this->load->model('formModel');
        $res= $this->formModel->checkuser($name, $mobile, $email, $pswd);
 	}
 	public function dashboard()
 	{
 			$this->load->view("dashboard");
 		
 	}
 }
?>