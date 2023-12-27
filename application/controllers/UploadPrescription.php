<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadPrescription extends CI_Controller {

	public function index()
		{
			$i = 1;
			$str = null;
			$get_info = $this->db->get('tb_upload_Prescription');
			foreach($get_info->result_array() as $v)
				{
					$str.='<tr>
						<td>'.$i.'</td>
						<td>'.$v['name'].'</td>
						<td>'.$v['city'].'</td>
						<td>'.$v['email'].'</td>
						<td>'.$v['mobile_no'].'</td>
						<td><img src="'.base_url();.'assets/img/pdf/'.$v['image'].'", style="width:100px; height:80px;"></td>
						<td>'.anchor("UploadPrescription/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Delete this record ??')")).'
						| '. anchor("UploadPrescription/View/".md5($v['id']),"<i class='fa fa-eye eye' aria-hidden='true'></i>").'
						</td>
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('upload/list',$data);
			$this->load->view('site/footer');		
		}
	public function View()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$t = $this->db->get("tb_upload_Prescription");
			$data['id'] = $t->row()->id;
			$data['image'] = $t->row()->image;
			$this->load->view('site/header');
			$this->load->view('upload/prescription_view',$data);
			$this->load->view('site/footer');
		}
	


	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$this->db->delete('tb_upload');
		redirect('UploadPrescription/');
	}
}
