<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$d_info = $this->db->get('tb_admin');
			foreach($d_info->result_array() as $v)
				{
					$str.="<tr>
						<td>".$i."</td>
						<td>".$v['username']."</td>
						<td>".$v['password']."</td>
						<td>".anchor("Admin/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."
						| ".anchor("Admin/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')"))."</td>
					<tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('admin/list',$data);
			$this->load->view('site/footer');
		}
	public function Add()
		{
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			if($this->form_validation->run()==False)
				{	
					$this->load->view('site/header');
					$this->load->view('admin/add');
					$this->load->view('site/footer');
				}
			else
				{
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$insert['username'] = $username;
					$insert['password'] = $password;
					$this->db->insert('tb_admin',$insert);
					redirect('Admin');
				}
		}
	public function Edit()
		{
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_admin');
					$edit['id'] = $dd->row()->id;
					$edit['username'] = $dd->row()->username;
					$edit['password'] = $dd->row()->password;
					$this->load->view('site/header');
					$this->load->view('admin/edit',$edit);
					$this->load->view('site/footer');
				}
			else
				{
					$id = $this->input->post('id');
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$update['username'] = $username;
					$update['password'] = $password;
					$this->db->where(array("md5(id)"=>$id));
					$this->db->update("tb_admin",$update);
					redirect('Admin/');	
				}
		}

	
	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$this->db->delete('tb_admin');
		redirect('Admin');
	}
}
