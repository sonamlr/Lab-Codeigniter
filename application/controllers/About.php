<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$g_info = $this->db->get('tb_about');
			foreach($g_info->result_array() as $v)
				{
					$str.="<tr>
						<td>".$i."</td>
						<td>".$v['title']."</td>
						<td>".$v['description']."</td>
						<td>".$v['missin']."</td>
						<td>".$v['vision']."</td>
						<td>".anchor("About/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."
						</td>
					</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('about/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
		{
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('missin','missin','required');
			$this->form_validation->set_rules('vision','vision','required');
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('about/add');
					$this->load->view('site/footer');
				}
			else
				{
					$title = $this->input->post('title');
					$description = $this->input->post('description');
					$missin = $this->input->post('missin');
					$vision = $this->input->post('vision');
					$insert['title'] = $title;
					$insert['description'] = $description;
					$insert['missin'] = $missin;
					$insert['vision'] = $vision;
					$this->db->insert('tb_about',$insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
					redirect(About);
				}
		}
	public function Edit()
		{
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('missin','missin','required');
			$this->form_validation->set_rules('vision','vision','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_about');
					$edit['id'] = $dd->row()->id;
					$edit['title'] = $dd->row()->title;
					$edit['description'] = $dd->row()->description;
					$edit['missin'] = $dd->row()->missin;
					$edit['vision'] = $dd->row()->vision;
					$this->load->view('site/header');
					$this->load->view('about/edit',$edit);
					$this->load->view('site/footer');
				}
			else
				{
					$id = $this->input->post('id');
					$title = $this->input->post('title');
					$description = $this->input->post('description');
					$missin = $this->input->post('missin');
					$vision = $this->input->post('vision');
					$update['title'] = $title;
					$update['description'] = $description;
					$update['missin'] = $missin;
					$update['vision'] = $vision;
					$this->db->where(array("md5(id)"=>$id));
					$this->db->update('tb_about',$update);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
					redirect('About/');
					
				}
		}
	
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_about');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
			redirect('About/');
		}
	
}
