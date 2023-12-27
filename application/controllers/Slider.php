<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_info = $this->db->get('tb_slider');
			foreach($get_info->result_array() as $v)
				{
				if($v['status']==0)
					{
						$st = anchor("Slider/Deactive/".md5($v['id']),"Active");
					}
				if($v['status']==1)
					{
						$st = anchor("Slider/Active/".md5($v['id']),"De-Active");
					}
					$str.="<tr>
								<td>".$i."</td>
								<td><img src='".base_url().'assets/img/slider'.$v['image']."' style='width:100px'></td>
								<td>".$st."</td>
								<td>".anchor("Slider/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you Edit this record ??')"))."
								| ".anchor("Slider/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you delete this record ??')"))."
								| ".anchor("Slider/View/".md5($v['id']),"<i class='fa fa-eye' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you delete this record ??')"))."</td>
							</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('slider/list',$data);
			$this->load->view('site/footer');
		}
	public function View()
	{
		$id= $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id)); 
		$dd = $this->db->get("tb_slider");
		$data['image']=$dd->row()->image;
		$data['description']=$dd->row()->description;
		$this->load->view('site/header');
		$this->load->view('slider/view_slider',$data);
		$this->load->view('site/footer');
		
	}
	public function Deactive()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status']="1";
			$this->db->update("tb_slider", $update);
			redirect('Slider/');
		}
	public function Active()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status']="0";
			$this->db->update("tb_slider", $update);
			redirect('Slider/');
		}
	public function Add()
		{
			
			if(empty($_FILES['image']['name']))
				{
					$this->load->view('site/header');
					$this->load->view('slider/add');
					$this->load->view('site/footer');
				} 
			else
				{
					$config['upload_path']   ='./assets/img/slider';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['max_size'] = '*';
					$config['max_width'] = '*';
					$config['max_height'] = '*';   
						$this->upload->initialize($config);
						 $this->upload->do_upload('image');     
					
					$insert['image'] = str_replace(' ', '_', $_FILES['image']['name']);
					$this->db->insert('tb_slider',$insert);
					
					
					
					
					redirect('Slider');
					
				}
		}
	public function Edit()
		{
			if(!isset($_FILES['image']['name']))
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_slider');
					$edit['id'] = $dd->row()->id;
					$edit['image'] = $dd->row()->image;
					$this->load->view('site/header');
					$this->load->view('slider/edit',$edit);
					$this->load->view('site/footer');
				}
			else
				{
					$config['upload_path']   ='./assets/img/slider';
					$config['allowed_types'] = 'gif|jpg|jpeg|png';
					$config['max_size'] = '*';
					$config['max_width'] = '*';
					$config['max_height'] = '*';   
					$this->upload->initialize($config);
					$this->upload->do_upload('image');  
					$update['image'] = str_replace(' ', '_', $_FILES['image']['name']);
					$id = $this->input->post('id'); 
					$this->db->where(array("id"=>$id));
					$this->db->update('tb_slider',$update);
					redirect('Slider');	
				}
			 
			
		}
	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$this->db->delete('tb_slider');
		redirect('Slider');
	}
}
