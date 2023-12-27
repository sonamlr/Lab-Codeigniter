<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
			$i = 1;
			$str = null;	
			$get_info = $this->db->get('tb_doctor');
			foreach($get_info->result_array() as $val)
				{
					
					$str.='<tr>
						<td>'.$i.'</td>
						<!--<td><img src="http://adminpathology.13solution.in/doctorimg/'.$val['image'].'"></td>-->
						<td>'.$val['description'].'</td>
						<td>'.anchor("Doctor/Edit/".$val['id'],"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Edit this record ??')") ).'
						</td>
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('doctor_view/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
	{
		$this->form_validation->set_rules('description','description','required');
		//if (empty($_FILES['image']['name']))
				//{
				//	$this->form_validation->set_rules('image','image','required');
				//}
		if($this->form_validation->run()==False)
			{
				$this->load->view('site/header');
				$this->load->view('doctor_view/add');
				$this->load->view('site/footer');
				
			}
		else
			{
				//$config['upload_path'] = './assets/img/doctor';
									//$config['allowed_types'] = 'gif|jpg|png';
									//$config['max_size'] = '*';
									//$config['max_width'] = '*';
									//$config['max_height'] = '*';
					//$this->upload->initialize($config);
				 //$this->upload->do_upload('image'); 
				//$insert['image'] = $_FILES['image']['name'];
				$description = $this->input->post('description');
				$insert['description'] = $description;
				$this->db->insert('tb_doctor',$insert);
				$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
				redirect('Doctor');
			}
	}
	public function Edit()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run()==False)
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("id"=>$id));
			$dd = $this->db->get('tb_doctor');
			$edit['id'] = $dd->row()->id;
			//$edit['image']=$dd->row()->image;
			$edit['description'] = $dd->row()->description; 
			$this->load->view('site/header');
			$this->load->view('doctor_view/edit',$edit);
			$this->load->view('site/footer');
		}
		else
		{
			//if (!empty($_FILES['image']['name']))
				//{
					//$config['upload_path'] = './assets/img/doctor';
						//$config['allowed_types'] = 'gif|jpg|png';
						//$config['max_size'] = '*';
						//$config['max_width'] = '*';
						//$config['max_height'] = '*';
					//$this->upload->initialize($config);
					//$this->upload->do_upload('image');
					//$update['image']=$_FILES['image']['name'];
				//}
			$id = $this->input->post('id');
			$description = $this->input->post('description');
			$update['description'] = $description;
			$this->db->where(array("md5(id)"=>md5($id)));
			$this->db->update("tb_doctor",$update);
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
			redirect('Doctor/');
		}
	}
	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("id"=>$id));
		$this->db->delete('tb_doctor');
		$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
		redirect('Doctor/');
		
	}

}
