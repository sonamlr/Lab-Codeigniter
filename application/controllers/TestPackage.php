<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestPackage extends CI_Controller {

	
	public function index()
		{
			$i = 1;
			$str = null;
			$get =  $this->db->get('tb_test_orgon');
			foreach($get->result_array() as $v)
				{
					if($v['status']==0)
						{
							$st = anchor("TestPackage/Deactive/".md5($v['id']),"Active",array('onclick'=>"return confirm('Do you want Active this record ??')"));
						}
					if($v['status']==1)
						{
							$st = anchor("TestPackage/Active/".md5($v['id']),"De-Active",array('onclick'=>"return confirm('Do you want De-Active this record ??')"));
						}
					
					
					$str.='<tr>
						<td>'.$i.'</td>
						<td>'.$v['test_name'].'</td>
						<td>'.$v['no_of_parameter'].'</td>
						<td><i class="fa fa-inr" aria-hidden="true"></i> '.number_format($v['price']).'/-</td>
						<td>'.$st.'</td>	
						<td>'.anchor("TestPackage/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')")).'
						| '.anchor("TestPackage/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')")).'	</td>
						
					</tr>';
					$i++;
				}
				$data['list'] = $str;
				$this->load->view('site/header');
				$this->load->view('testpackage/list',$data);
				$this->load->view('site/footer');
 		}
	
	public function Deactive()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "1";
			$this->db->update('tb_test_orgon',$update);
			redirect('TestPackage');
		}
	public function Active()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "0";
			$this->db->update('tb_test_orgon',$update);
			redirect('TestPackage');
		}
	
	
	public function Add()
		{
			$this->form_validation->set_rules('test_name','test name','required');
			$this->form_validation->set_rules('no_of_parameter','No of Parameter','required');
			$this->form_validation->set_rules('price','price','required');
		
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('testpackage/add');
					$this->load->view('site/footer');
					
				}
			else
				{
					$insert['test_name']= $this->input->post('test_name');
					$insert['no_of_parameter']= $this->input->post('no_of_parameter');
					$insert['price'] = $this->input->post('price');
					$this->db->insert('tb_test_orgon',$insert);
					redirect('TestPackage');
					
					
				}
		}
	public function Edit()
		{
			
			$this->form_validation->set_rules('test_name','test name','required');
			$this->form_validation->set_rules('no_of_parameter','No of Parameter','required');
			$this->form_validation->set_rules('price','price','required');
			if($this->form_validation->run()==False)
				{
						$id = $this->uri->segment(3);
						$this->db->where(array("md5(id)"=>$id));
						$dd = $this->db->get('tb_test_orgon');
						$edit['id'] = $dd->row()->id;
						$edit['test_name'] = $dd->row()->test_name;
						$edit['no_of_parameter']=$dd->row()->no_of_parameter;
						$edit['price'] = $dd->row()->price;
						$this->load->view('site/header');
						$this->load->view('testpackage/edit',$edit);
						$this->load->view('site/footer');
				}
			else
				{
						$id = $this->input->post('id');
						$update['test_name'] = $this->input->post('test_name');
						$update['no_of_parameter'] = $this->input->post('no_of_parameter');
						$update['price'] = $this->input->post('price');
						$this->db->where(array("md5(id)"=>$id));
						$this->db->update("tb_test_orgon", $update);
						redirect('TestPackage');
				}
		}

			
		
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_test_orgon');
			redirect('TestPackage');
			
		}
}
