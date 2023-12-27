<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_info = $this->db->get('tb_package_booking');
			foreach($get_info->result_array() as $v)
				{
					if($v['status']==0)
						{
							$st = "New";
						}
					if($v['status']==1)
						{
							$st = "Processing";
							$class="style='color:yellow'";
						}
					if($v['status']==2)
						{
							$st = "Success";
							$class="style='color:green'";
						}
					if($v['status']==3)
						{
							$st = "Cancel";
							$class="style='color:red'";
						}  
					$this->db->where(array("id"=>$v['package_id']));
					$test =  $this->db->get('tb_test');
					$this->db->where(array("id"=>$v['most_prescribed_tests']));
					$testpack =  $this->db->get('tb_test_orgon');  
					$str.='<tr $class>
						<td>'.$i.'</td>
						<td>'.$v['name'].'</td>
						<td>'.$v['gender'].'</td>
						<td>'.$v['mobile_no'].'</td>
						<td>'.$v['address'].'</td>
						<td>'.$test->row()->name.'</td>
						<td>'.$testpack->row()->test_name.'</td>
						<td><i class="fa fa-inr" aria-hidden="true"></i> '.number_format($v['price'],2).'/- </td>
						<td>'.$st.'</td>
						<td>'.anchor("Booking/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Edit this record ??')")).'
							| '.anchor("Booking/View/".md5($v['id']),"<i class='fa fa-eye eye' aria-hidden='true'></i>").' 
							| '.anchor("Booking/Process/".md5($v['id']),'<i class="fa fa-line-chart" aria-hidden="true"></i>','title="Process"').' 
							| '.anchor("Booking/Success/".md5($v['id']),'<i class="fa fa-check" aria-hidden="true"></i>','title="Success"').' 
							| '.anchor("Booking/Cancel/".md5($v['id']),'<i class="fa fa-ban" aria-hidden="true"></i>','title="Success"').'</td>
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('booking/list',$data);
			$this->load->view('site/footer');		
		}
	public function View()
	{
		$dt = null;
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$dt = $this->db->get("tb_package_booking");
		$this->db->where(array("id"=>$dt->row()->package_id));
		$test = $this->db->get('tb_test');
		$data['name'] = $dt->row()->name;
		$data['gender'] = $dt->row()->gender;
		$data['mobile_no'] = $dt->row()->mobile_no;
		$data['address'] = $dt->row()->address;
		$data['package_name'] = $test->row()->name;
		
		$data['price'] = $dt->row()->price;
		$this->load->view('site/header');
		$this->load->view('booking/data_view',$data);
		$this->load->view('site/footer');
	}
	public function Process()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "1";
			$this->db->update('tb_package_booking',$update);
			redirect('Booking');
		}
	public function Cancel()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "3";
			$this->db->update('tb_package_booking',$update);
			redirect('Booking');
		}
	public function Success()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "2";
			$this->db->update('tb_package_booking',$update);
			redirect('Booking');
		}
		
		
		
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_package_booking');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
			redirect('Booking');
		}
}
