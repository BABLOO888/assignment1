<?php  
class formModel extends CI_Model
{
	public function checkuser($name, $mobile, $email, $pass)
	{
		//echo $name, $mobile, $email, $pass;
		$q = $this->db->query("select mobile from student where mobile='$mobile'");
		$total = $q->num_rows();
		if($total==1)
		{
			$this->session->set_flashdata('msg','<font color ="red">User already exists</font>');
			return redirect('formController/index');
		}
		else
		{
			$this->db->query("INSERT INTO `student` (`name`, `mobile`, `email`, `pswd`) VALUES('$name', '$mobile', '$email', '$pass')");
			$this->session->set_flashdata('msg','<font color ="#8BECBC">Data has been inserted successfully</font>');
			    return redirect('formController/dashboard');
		
			
		}
	}
}
?>