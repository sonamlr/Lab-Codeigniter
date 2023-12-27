<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_data = $this->db->get('tb_contact');
			foreach($get_data->result_array() as $val)
				{
					$str.="<tr>
						<td>".$i."</td>
						<td>".$val['mobile']."</td>
						<td>".$val['email']."</td>
						<td>".$val['address']."</td>
						<td>".$val['facebook_link']."</td>
						<td>".$val['instagram_link']."</td>
						<td>".$val['twitter_link']."</td>
						<td>".$val['linkedin_link']."</td>
						<td>".$val['youtube_link']."</td>
						<td>".anchor("Contact/Edit/".md5($val['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."</td>
					</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('contact/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
		{
			$this->form_validation->set_rules('mobile','mobile','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('address','address','required');
			$this->form_validation->set_rules('facebook_link','facebook link','required');
			$this->form_validation->set_rules('instagram_link','instagram link','required');
			$this->form_validation->set_rules('twitter_link','twitter link','required');
			$this->form_validation->set_rules('linkedin_link','linkedin link','required');
			$this->form_validation->set_rules('youtube_link','youtube link','required');
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('contact/add');
					$this->load->view('site/footer');
					
				}
			else
				{
					$mobile = $this->input->post('mobile');
					$insert['mobile'] = $mobile;
					$email = $this->input->post('email');
					$insert['email'] = $email;
					$address = $this->input->post('address');
					$insert['address'] = $address;
					$facebook_link = $this->input->post('facebook_link');
					$insert['facebook_link'] = $facebook_link;
					$instagram_link = $this->input->post('instagram_link');
					$insert['instagram_link'] = $instagram_link;
					$twitter_link = $this->input->post('twitter_link');
					$insert['twitter_link'] = $twitter_link;
					$linkedin_link = $this->input->post('linkedin_link');
					$insert['linkedin_link'] = $linkedin_link;
					$youtube_link = $this->input->post('youtube_link');
					$insert['youtube_link'] = $youtube_link;
					$this->db->insert('tb_contact',$insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
					redirect('Contact');
				}
		}
	public function Edit()
		{
			$this->form_validation->set_rules('mobile','mobile','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('address','address','required');
			$this->form_validation->set_rules('facebook_link','facebook link','required');
			$this->form_validation->set_rules('instagram_link','instagram link','required');
			$this->form_validation->set_rules('twitter_link','twitter link','required');
			$this->form_validation->set_rules('linkedin_link','linkedin link','required');
			$this->form_validation->set_rules('youtube_link','youtube link','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_contact');
					$edit['id']  = $dd->row()->id;
					$edit['mobile'] = $dd->row()->mobile;
					$edit['email'] = $dd->row()->email;
					$edit['address'] = $dd->row()->address;
					$edit['facebook_link'] = $dd->row()->facebook_link;
					$edit['instagram_link'] = $dd->row()->instagram_link;
					$edit['twitter_link'] = $dd->row()->twitter_link;
					$edit['linkedin_link'] = $dd->row()->linkedin_link;
					$edit['youtube_link'] = $dd->row()->youtube_link;
					$this->load->view('site/header');
					$this->load->view('contact/edit',$edit);
					$this->load->view('site/footer');
				}
			else
				{
					$id = $this->input->post('id');
					$mobile = $this->input->post('mobile');
					$update['mobile'] = $mobile;
					$email = $this->input->post('email');
					$update['email'] = $email;
					$address = $this->input->post('address');
					$update['address'] = $address;
					$facebook_link = $this->input->post('facebook_link');
					$update['facebook_link'] = $facebook_link;
					$twitter_link = $this->input->post('twitter_link');
					$update['twitter_link'] = $twitter_link;
					$linkedin_link = $this->input->post('linkedin_link');
					$update['linkedin_link'] = $linkedin_link;
					$instagram_link = $this->input->post('instagram_link');
					$update['instagram_link'] = $instagram_link;
					$youtube_link = $this->input->post('youtube_link');
					$update['youtube_link'] = $youtube_link;
					$this->db->where(array("md5(id)"=>$id));
					$this->db->update("tb_contact",$update);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
					redirect('Contact/');
				}
		}

				
				
		
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_contact');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
			redirect('Contact');
		}
	
}
