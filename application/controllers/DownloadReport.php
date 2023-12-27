<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadReport extends CI_Controller {
	 
	public function index()
		{

			$i = 1;
			$str = null;
			$get_info = $this->db->get("tb_download_report");
			foreach($get_info->result_array() as $value)
				{
					if($value['status']==0)
						{
							$st=anchor("DownloadReport/Deactive/".md5($value['id']),"Active",array('onclick'=>"return confirm('Do you want De-Active this record ??')"));
						}
					if($value['status']==1)
						{
							
							$st=anchor("DownloadReport/Active/".md5($value['id']),"De-Active",array('onclick'=>"return confirm('Do you want Active this record ??')"));
						}
					
					$str .= '<tr>
							<td>'.$i.'</td>
							<td>'.$value['mobile'].'</td>
							<td>'.$value['pdf'].'</td>
							<td>'.$value['package'].'</td>
							<td>'.$st.'</td>
							<td>'.anchor("DownloadReport/Edit/".md5($value['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want Edit this record ??')") ).'
							| '.anchor("DownloadReport/Delete/".md5($value['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')")).'
							| '.anchor("DownloadReport/View/".md5($value['id']),"<i class='fa fa-eye' aria-hidden='true'></i>", "target='_blank'",array('onclick'=>"return confirm('Do you want View this record ??')")).'
							</td>
							
					</tr>';
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('download_report/list',$data);
			$this->load->view('site/footer');
		}
	
	public function View()
		{
			$id= $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id)); 
			$dd = $this->db->get("tb_download_report");
			$data['pdf']=$dd->row()->pdf;
			redirect ('./pdf/'.$dd->row()->pdf); 
			$this->load->view('site/header');
			$this->load->view('download_report/view_report',$data);
			$this->load->view('site/footer');
			
		}
	public function Deactive()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$update['status']="1";
		$this->db->update("tb_download_report", $update);
		redirect('DownloadReport/');
	}public function Active()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$update['status']="0";
		$this->db->update("tb_download_report", $update);
		redirect('DownloadReport/');
	}
	
	
	
	public function Add()
		{
			$this->form_validation->set_rules('mobile','mobile','required');
			$this->form_validation->set_rules('package','package','required');
			
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('download_report/add');
					$this->load->view('site/footer');
				}
			else
				{
					
					$config['upload_path'] = '.assets/img/pdf/';
					$config['allowed_types'] = 'png|jpg|jpeg|pdf';
					$config['max_size'] = '*';
						$this->upload->initialize($config);
						$this->upload->do_upload('pdf');  
					   
					$insert['mobile'] = $this->input->post('mobile');
					$insert['package'] = $this->input->post('package');
					$insert['pdf'] = str_replace(' ', '_', $_FILES['pdf']['name']);
					$this->db->insert('tb_download_report', $insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
					redirect('DownloadReport/');
				}
		}
		

		
		
	public function Edit()
		{
			
			$this->form_validation->set_rules('mobile','mobile','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_download_report');
					$edit['id'] = $dd->row()->id;
					$edit['mobile']=$dd->row()->mobile;
					$edit['pdf'] = $dd->row()->pdf;
					$edit['package'] = $dd->row()->package;
					$this->load->view('site/header');
					$this->load->view('download_report/edit',$edit);
					$this->load->view('site/footer');
				}
				else
					{
						 
						if (!empty($_FILES['pdf']['name']))
							{
									$config['upload_path'] = './prescriptionpdf/';
									$config['allowed_types'] = 'png|jpg|jpeg|pdf';
									$config['max_size'] = '*';
								   
								$this->upload->initialize($config);
								$this->upload->do_upload('pdf') ;
								$update['pdf']= str_replace(' ', '_',$_FILES['pdf']['name']);  
							}  
						$id = $this->input->post('id');
						$update['mobile'] = $this->input->post('mobile');
						$update['package'] = $this->input->post('package');
						$this->db->where(array("md5(id)"=>$id));
						$this->db->update("tb_download_report", $update);
						 
						 
						$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
						redirect('DownloadReport/');
					}
		}
	
	public function Delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$dd = $this->db->delete('tb_download_report');
		$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
		redirect('DownloadReport');
	}
	
}
