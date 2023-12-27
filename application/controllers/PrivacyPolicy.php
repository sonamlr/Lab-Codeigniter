<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrivacyPolicy extends CI_Controller {

	public function index()
		{
			$str = null;	
			$get_info = $this->db->get('tb_privacy');
			foreach($get_info->result_array() as $val)
				{
					$i = 0;
					$str.='<tr>
						<td>'.$val['id'].'</td>
						<td>'.$val['description'].'</td>
						<td>'.anchor("PrivacyPolicy/Edit/".md5($val['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Edit this record ??')") ).'
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('privacy_view/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run()==False)
			{
				$this->load->view('site/header');
				$this->load->view('privacy_view/add');
				$this->load->view('site/footer');
				
			}
		else
			{
				$description = $this->input->post('description');
				$insert['description'] = $description;
				$this->db->insert('tb_privacy',$insert);
				redirect('PrivacyPolicy');
			}
	}
	public function Edit()
	{
		$this->form_validation->set_rules('description','description','required');
		if($this->form_validation->run()==False)
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$dd = $this->db->get('tb_privacy');
			$edit['id'] = $dd->row()->id;
			$edit['description'] = $dd->row()->description;
			$this->load->view('site/header');
			$this->load->view('privacy_view/edit',$edit);
			$this->load->view('site/footer');
		}
		else
		{
			$id = $this->input->post('id');
			$description = $this->input->post('description');
			$update['description'] = $description;
			$this->db->where(array("md5(id)"=>$id));
			$this->db->update("tb_privacy",$update);
			redirect('PrivacyPolicy/');
		}
	}
}
