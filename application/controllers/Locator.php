<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locator extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_info = $this->db->get('tb_lab_locator');
			foreach($get_info->result_array() as $v)
				{
					if($v['status']==0)
						{
							$st = anchor("Locator/Deactive/".md5($v['id']),"Active",array('onclick'=>"return confirm('Do you want active this record ??')"));
						}
					if($v['status']==1)
						{
							$st = anchor("Locator/Active/".md5($v['id']),"De-Active",array('onclick'=>"return confirm('Do you want de-active this record ??')"));
						}
					$str.="<tr>
						<td>".$i."</td>
						<td>".$v['lab_name']."</td>
						<td>".$v['address']."</td>
						<td>".$v['city']."</td>
						<td>".$v['state']."</td>
						<td>".$v['mobile_number']."</td>
						<td>".$v['timing']."</td>
						<td>".$v['map_url']."</td>
						<td>".$v['website_url']."</td>
						<td>".$st."</td>
						<td>".anchor("Locator/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."</td>
					</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('lab_locator/list',$data);
			$this->load->view('site/header');
		}
	public function Deactive()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "1";
			$this->db->update('tb_lab_locator',$update);
			redirect('Locator');
		}
	public function Active()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "0";
			$this->db->update('tb_lab_locator',$update);
			redirect('Locator');
		}
	public function Add()
	{
		$this->form_validation->set_rules('lab_name','lab name','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('city','city','required');
		$this->form_validation->set_rules('state','state','required');
		$this->form_validation->set_rules('mobile_number','mobile number','required');
		$this->form_validation->set_rules('timing','timing','required');
		$this->form_validation->set_rules('map_url','map url','required');
		$this->form_validation->set_rules('website_url','website url','required');
		if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('lab_locator/add');
					$this->load->view('site/header');
					
				}
		else
			{
				$lab_name = $this->input->post('lab_name');
				$address = $this->input->post('address');
				$city = $this->input->post('city');
				$state = $this->input->post('state');
				$mobile_number = $this->input->post('mobile_number');
				$timing = $this->input->post('timing');
				$map_url = $this->input->post('map_url');
				$website_url = $this->input->post('website_url');
				$insert['lab_name'] = $lab_name;
				$insert['address'] = $address;
				$insert['city'] = $city;
				$insert['state'] = $state;
				$insert['mobile_number'] = $mobile_number;
				$insert['timing'] = $timing;
				$insert['map_url'] = $map_url;
				$insert['website_url'] = $website_url;
				$this->db->insert('tb_lab_locator',$insert);
				$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
				redirect('Locator');
			}
	}
	
	public function Edit()
		{
			$this->form_validation->set_rules('lab_name','lab name','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('city','city','required');
		$this->form_validation->set_rules('state','state','required');
		$this->form_validation->set_rules('mobile_number','mobile number','required');
		$this->form_validation->set_rules('timing','timing','required');
		$this->form_validation->set_rules('map_url','map url','required');
		$this->form_validation->set_rules('website_url','website url','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_lab_locator');
					$edit['id'] = $dd->row()->id;
					$edit['lab_name'] = $dd->row()->lab_name;
					$edit['address'] = $dd->row()->address;
					$edit['city'] = $dd->row()->city;
					$edit['state'] = $dd->row()->state;
					$edit['mobile_number'] = $dd->row()->mobile_number;
					$edit['timing'] = $dd->row()->timing;
					$edit['map_url'] = $dd->row()->map_url;
					$edit['website_url'] = $dd->row()->website_url;
					$this->load->view('site/header');
					$this->load->view('lab_locator/edit',$edit);
					$this->load->view('site/header');
				}
			else
				{
					$id = $this->input->post('id');
					$lab_name = $this->input->post('lab_name');
					$address = $this->input->post('address');
					$city = $this->input->post('city');
					$state = $this->input->post('state');
					$mobile_number = $this->input->post('mobile_number');
					$timing = $this->input->post('timing');
					$map_url = $this->input->post('map_url');
					$website_url = $this->input->post('website_url');
					$update['lab_name'] = $lab_name;
					$update['address'] = $address;
					$update['city'] = $city;
					$update['state'] = $state;
					$update['mobile_number'] = $mobile_number;
					$update['timing'] = $timing;
					$update['map_url'] = $map_url;
					$update['website_url'] = $website_url;
					$this->db->where(array("md5(id)"=>$id));
					$this->db->update('tb_lab_locator',$update);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
					redirect('Locator');
				}
		}
		
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_lab_locator');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
			redirect('Locator');
		}
		

}
