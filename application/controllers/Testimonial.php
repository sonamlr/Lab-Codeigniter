<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_info = $this->db->get('tb_testimonial');
			foreach($get_info->result_array() as $v)
				{
					$str.="<tr>
						<td>".$i."</td>
						<td><img src='".base_url().'testimonial/'.$v['image']."'' style='width:100px'></td>
						<td>".$v['name']."</td>
						<td>".$v['description']."</td>
						<td>".$v['date_time']."</td>
						<td>".anchor("Testimonial/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."
						| ".anchor("Testimonial/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')"))."</td>
					</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('testimonial/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('date_time','date time','required');
			if (empty($_FILES['image']['name']))
				{
					$this->form_validation->set_rules('image','image','required');
				}
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('testimonial/add');
					$this->load->view('site/footer');
				}
			else
				{
					$config['upload_path'] =  './assets/img/testimonial';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size'] = '*';
					$config['max_width'] = '*';
					$config['max_height'] = '*';
					$this->upload->initialize($config);
					 $this->upload->do_upload('image');
					$insert['image'] = $_FILES['image']['name'];
					$name = $this->input->post('name');
					$description = $this->input->post('description');
					$date_time = $this->input->post('date_time');
					$insert['name'] = $name;
					$insert['description'] = $description;
					$insert['date_time'] = $date_time;
					$this->db->insert('tb_testimonial',$insert);
					redirect('Testimonial');
				} 
		}
	public function Edit()
		{
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('date_time','date time','required');
			
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_testimonial');
					$edit['id'] = $dd->row()->id;
					$edit['image'] = $dd->row()->image;
					$edit['name'] = $dd->row()->name;
					$edit['description'] = $dd->row()->description;
					$edit['date_time'] = $dd->row()->date_time;
					$this->load->view('site/header');
					$this->load->view('testimonial/edit',$edit);
					$this->load->view('site/footer');
					
				}
			else
				{
					if (!empty($_FILES['image']['name']))
							{
								$config['upload_path'] = './assets/img/testimonial';
								$config['allowed_types'] = 'gif|jpg|png|jpeg';
								$config['max_size'] = '*';
								$config['max_width'] = '*';
								$config['max_height'] = '*';
								$this->upload->initialize($config);
								$this->upload->do_upload('image');
								$update['image']=$_FILES['image']['name'];
							}
					$id = $this->input->post('id');
					$name = $this->input->post('name');
					$description = $this->input->post('description');
					$date_time = $this->input->post('date_time');
					$update['name'] = $name;
					$update['description'] = $description;
					$update['date_time'] = $date_time;
					$this->db->where(array("id"=>$id));
					$this->db->update('tb_testimonial',$update);
					redirect('Testimonial');
				}
		}
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_testimonial');
			redirect('Testimonial');
			
		}
}
