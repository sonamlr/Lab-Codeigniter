<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index()
		{
		
			$i = 1;
			$str = null;
			$g_info = $this->db->get('tb_faq');
			foreach($g_info->result_array() as $v)
				{
					if($v['status']==0)
						{
							$st = anchor("Faq/Deactive/".md5($v['id']),"Active",array('onclick'=>"return confirm('Do you want active this record ??')"));
						}
					if($v['status']==1)
						{
							$st = anchor("Faq/Active/".md5($v['id']),"De-Active",array('onclick'=>"return confirm('Do you want de-active this record ??')"));
						}
					$str.="<tr>
						<td>".$i."</td>
						<td>".$v['question']."</td>
						<td>".$v['answer']."</td>
						<td>".$st."</td>
						<td>".anchor("Faq/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')"))."
						| ".anchor("Faq/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')"))."</td>
					</tr>";
					$i++;
				}
			$data['list'] = $str;
			$this->load->view('site/header');
			$this->load->view('faq/list',$data);
			$this->load->view('site/footer');
		}
	public function Deactive()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "1";
			$this->db->update('tb_faq',$update);
			redirect('Faq');
		}
	public function Active()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "0";
			$this->db->update('tb_faq',$update);
			redirect('Faq');
		}
		
	public function Add()
		{
			$this->form_validation->set_rules('question','question','required');
			$this->form_validation->set_rules('answer','answer','required');
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('faq/add');
					$this->load->view('site/footer');
					
				}
			else
				{
					$question = $this->input->post('question');
					$answer = $this->input->post('answer');
					$insert['question'] = $question;
					$insert['answer'] = $answer;
					$this->db->insert('tb_faq',$insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Added Successfully !!</p>
											</div>');
					redirect('Faq');
				}
		}
	public function Edit() 
		{
			$this->form_validation->set_rules('question','question','required');
			$this->form_validation->set_rules('answer','answer','required');
			if($this->form_validation->run()==False)
				{
					$id = $this->uri->segment(3);
					$this->db->where(array("md5(id)"=>$id));
					$dd = $this->db->get('tb_faq');
					$edit['id'] = $dd->row()->id;
					$edit['question'] = $dd->row()->question;
					$edit['answer'] = $dd->row()->answer;
					$this->load->view('site/header');
					$this->load->view('faq/edit',$edit);
					$this->load->view('site/footer');
				}
			else
				{
					$id = $this->input->post('id');
					$question = $this->input->post('question');
					$answer = $this->input->post('answer');
					$update['question'] = $question;
					$update['answer'] = $answer;
					$this->db->where(array("md5(id)"=>$id));
					$this->db->update("tb_faq",$update);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
					redirect('Faq');
				}
		}
	
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_faq');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
										<button data-dismiss="alert" class="close" type="button" data-original-title="">
											x
										</button>
										<p>
										Your Data Has Been Deleted Successfully !!</p>
									</div>');
			redirect('Faq/');
			
		}
}
