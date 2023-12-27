<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	 
	public function index()
		{

			$i = 1;
			$str = null;
			$get_info = $this->db->get("tb_category");
			foreach($get_info->result_array() as $value)
				{
					if($value['status']==0)
						{
							$st=anchor("Category/Deactive/".md5($value['id']),"Active",array('onclick'=>"return confirm('Do you want De-Active this record ??')"));
						}
					if($value['status']==1)
						{
							
							$st=anchor("Category/Active/".md5($value['id']),"De-Active",array('onclick'=>"return confirm('Do you want Active this record ??')"));
						}
					
					$str .= '<tr>
							<td>'.$i.'</td>
							<td><img src="'.base_url().'categoryimg/'.$value['image'].'"></td>
							<td>'.$value['name'].'</td>
							<td>'.$value['description'].'</td>
							<td>'.$st.'</td>
							<td>'.anchor("Category/Edit/".md5($value['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Edit this record ??')") ).'
							| '.anchor("Category/Delete/".md5($value['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')")).'</td>
							
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('category/list',$data);
			$this->load->view('site/footer');
		}

	public function Deactive()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$update['status']="1";
		$this->db->update("tb_category", $update);
		redirect('Category/');
	}public function Active()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$update['status']="0";
		$this->db->update("tb_category", $update);
		redirect('Category/');
	}
	
	
	
	public function Add()
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('description','description','required');
			if (empty($_FILES['image']['name']))
				{
					$this->form_validation->set_rules('image','image','required');
				}
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('category/add');
					$this->load->view('site/footer');
				}
			else
				{
					
					$config['upload_path'] => './assets/img/category';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '*';
					$config['max_width'] = '*';
					$config['max_height'] = '*';
									   $this->upload->initialize($config);
									   $this->upload->do_upload('image');  
					   
					$name=$this->input->post('name');
					$description=$this->input->post('description');
					$insert['name'] = $name;
					$insert['description'] = $description;
					$insert['image'] = str_replace(' ', '_', $_FILES['image']['name']);
					$this->db->insert('tb_category', $insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
					redirect('Category/');
				}
		}
		

		
		
	public function Edit()
		{
			
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('description','description','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_category');
					$edit['id'] = $dd->row()->id;
					$edit['image']=$dd->row()->image;
					$edit['name'] = $dd->row()->name;
					$edit['description'] = $dd->row()->description;
					$this->load->view('site/header');
					$this->load->view('category/edit',$edit);
					$this->load->view('site/footer');
				}
				else
					{
						 
						if (!empty($_FILES['image']['name']))
							{
									$config['upload_path'] = './assets/img/category';
									$config['allowed_types'] = 'gif|jpg|png';
									$config['max_size'] = '*';
									$config['max_width'] = '*';
									$config['max_height'] = '*';
								   
								$this->upload->initialize($config);
								$this->upload->do_upload('image') ;
								$update['image']= str_replace(' ', '_', $_FILES['image']['name']);
								 $this->upload->do_upload('image')  ;  
							}  
						$id = $this->input->post('id');
						$name = $this->input->post('name');
						$description = $this->input->post('description');
						$update['name'] = $name;
						$update['description'] = $description;
						$this->db->where(array("md5(id)"=>md5($id)));
						$this->db->update("tb_category", $update);
						 
						 
						$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
						redirect('Category/');
					}
		}
	
	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$dd = $this->db->delete('tb_category');
		$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
		redirect('Category');
	}
	
}
