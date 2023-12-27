<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Package extends CI_Controller {

	
	public function index()
		{
			$i = 1;
			$str = null;
			$get =  $this->db->get('tb_test');
			foreach($get->result_array() as $v)
				{
					if($v['status']==0)
						{
							$st = anchor("Package/Deactive/".md5($v['id']),"Active",array('onclick'=>"return confirm('Do you want Active this record ??')"));
						}
					if($v['status']==1)
						{
							$st = anchor("Package/Active/".md5($v['id']),"De-Active",array('onclick'=>"return confirm('Do you want De-Active this record ??')"));
						}
				
					$str.='<tr>
						<td>'.$i.'</td>
						<td><img src="'.base_url().'assets/img/package/'.$v['image'].'"  style="width:100px;"></td>
						<td>'.$v['name'].'</td>
						<td><i class="fa fa-inr" aria-hidden="true"></i> '.number_format($v['price']).'/-</td>
						<td><i class="fa fa-inr" aria-hidden="true"></i> '.number_format($v['offer_price']).'/-</td>
						<td>'.$v['description'].'</td>
						<td>'.$v['specimen'].'</td>
						<td>'.$v['report_time'].'</td>	
						<td>'.$st.'</td>	
						<td>'.anchor("Package/Edit/".md5($v['id']),"<i class='fa fa-pencil-square-o edit' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want edit this record ??')")).'
						| '.anchor("Package/Delete/".md5($v['id']),"<i class='fa fa-trash-o delete' aria-hidden='true'></i>",array('onclick'=>"return confirm('Do you want delete this record ??')")).'
						| '. anchor("Package/View/".md5($v['id']),"<i class='fa fa-eye eye' aria-hidden='true'></i>").'</td>
						
					</tr>';
					$i++;
				}
				$data['list'] = $str;
				$this->load->view('site/header');
				$this->load->view('package/list',$data);
 		}
	
	public function Deactive()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "1";
			$this->db->update('tb_test',$update);
			redirect('Package');
		}
	public function Active()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$update['status'] = "0";
			$this->db->update('tb_test',$update);
			redirect('Package');
		}
	public function View()
	{
		$data['cat1_name'] = null;
		$data['description_1'] = null; 
		$data['cat2_name'] = null;
		$data['description_2'] = null; 
		$data['cat3_name'] =null;
		$data['description_3'] = null; 
		$data['cat4_name'] = null;
		$data['description_4'] = null; 
		$data['cat5_name'] = null;
		$data['description_5'] = null; 
		$data['cat6_name'] = null;
		$data['description_6'] = null; 
		$data['cat7_name'] = null;
		$data['description_7'] = null; 
		$data['cat8_name'] = null;
		$data['description_8'] = null; 
		$data['cat9_name'] = null;
		$data['description_9'] = null; 
		$data['cat10_name'] = null;
		$data['description_10'] = null;

		$id = $this->uri->segment(3);
		$this->db->where(array("md5(id)"=>$id));
		$t = $this->db->get("tb_test");
		$data['id'] = $t->row()->id;
		$data['name'] = $t->row()->name;
		$data['price'] = $t->row()->price;
		$data['offer_price'] = $t->row()->offer_price;
		$data['description'] = $t->row()->description;
		
		 if(!empty($t->row()->category_id))
			{
				$this->db->where(array("id"=>$t->row()->category_id));
				
				$cat1 = $this->db->get("tb_category");
				$data['cat1_name'] = $cat1->row()->name;
				$data['description_1'] = $t->row()->description_1;
			}
		 if(!empty($t->row()->category_id_2))
			{
				$this->db->where(array("id"=>$t->row()->category_id_2));
				$cat2 = $this->db->get("tb_category");
				$data['cat2_name'] = $cat2->row()->name;
				$data['description_2'] = $t->row()->description_2;
			}
		 if(!empty($t->row()->category_id_3))
			{
				$this->db->where(array("id"=>$t->row()->category_id_3));
				$cat3 = $this->db->get("tb_category");
				$data['cat3_name'] = $cat3->row()->name;
				$data['description_3'] = $t->row()->description_3;
			} 
		 if(!empty($t->row()->category_id_4))
			{
				$this->db->where(array("id"=>$t->row()->category_id_4));
				$cat4 = $this->db->get("tb_category");
				$data['cat4_name'] = $cat4->row()->name;
				$data['description_4'] = $t->row()->description_4;
			} 
		if(!empty($t->row()->category_id_5))
			{
				$this->db->where(array("id"=>$t->row()->category_id_5));
				$cat5 = $this->db->get("tb_category");
				$data['cat5_name'] = $cat5->row()->name;
				$data['description_5'] = $t->row()->description_5;
			}
		if(!empty($t->row()->category_id_6))
			{
				$this->db->where(array("id"=>$t->row()->category_id_6));
				$cat6 = $this->db->get("tb_category");
				$data['cat6_name'] = $cat6->row()->name;
				$data['description_6'] = $t->row()->description_6;
			}
		if(!empty($t->row()->category_id_7))
			{
				$this->db->where(array("id"=>$t->row()->category_id_7));
				$cat7 = $this->db->get("tb_category");
				$data['cat7_name'] = $cat7->row()->name;
				$data['description_7'] = $t->row()->description_7;
			}
		if(!empty($t->row()->category_id_8))
			{
				$this->db->where(array("id"=>$t->row()->category_id_8));
				$cat8 = $this->db->get("tb_category");
				$data['cat8_name'] = $cat8->row()->name;
				$data['description_8'] = $t->row()->description_8;
			}
		if(!empty($t->row()->category_id_9))
			{
				$this->db->where(array("id"=>$t->row()->category_id_9));
				$cat9 = $this->db->get("tb_category");
				$data['cat9_name'] = $cat9->row()->name;
				$data['description_9'] = $t->row()->description_9;
			}
		if(!empty($t->row()->category_id_10))
			{
				$this->db->where(array("id"=>$t->row()->category_id_10));
				$cat10 = $this->db->get("tb_category");
				$data['cat10_name'] = $cat10->row()->name;
				$data['description_10'] = $t->row()->description_10;
			}
		  
		$data['specimen'] 		= $t->row()->specimen;
		$data['report_time'] 	= $t->row()->report_time;
		$data['status'] 		= $t->row()->status;  
		$this->load->view('site/header');
		$this->load->view('package/package_view',$data);
		$this->load->view('site/footer');
	}
	
	public function Add()
		{
			$cat=null;
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('price','price','required');
			$this->form_validation->set_rules('offer_price','offer price','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('specimen','specimen','required');
			$this->form_validation->set_rules('report_time','report time','required');
			$get =  $this->db->get('tb_category');
			foreach($get->result_array() as $v)
				{
					$cat.='<option value='.$v['id'].'>'.$v['name'].'</option>';
				}
				$data['catlist']=$cat;
			if (empty($_FILES['image']['name']))
				{
					$this->form_validation->set_rules('image','image','required');
				}
			if($this->form_validation->run()==False)
				{
					$this->load->view('site/header');
					$this->load->view('package/add',$data);
					$this->load->view('site/footer');
					
				}
			else
				{
					$config['upload_path']   ='./assets/img/package';
					$config['allowed_types'] ='png|jpg|jpeg|gif';   
					$config['max_size'] = '*';
									$config['max_width'] = '*';
									$config['max_height'] = '*';
					$this->upload->initialize($config); 
					$this->upload->do_upload('image') ;
					$insert['image'] = str_replace(' ', '_', $_FILES['image']['name']);
					$name = $this->input->post('name');
					$insert['name'] = $name;
					
					
					$category_id_1 = $this->input->post('category_id_1');
					if(!empty($category_id_1))
						{
							$insert['category_id'] = $category_id_1;
							$insert['description_1'] = $this->input->post('description_1'); 
						} 
						
					$category_id_2 = $this->input->post('category_id_2');	
					if(!empty($category_id_2))
						{
							$insert['category_id_2'] = $category_id_2;
							$insert['description_2']  = $this->input->post('description_2'); 
						} 
						 
					$category_id_3 = $this->input->post('category_id_3');	
					if(!empty($category_id_3))
						{
							$insert['category_id_3'] = $category_id_3;
							$insert['description_3'] = $this->input->post('description_3'); 
						} 
					
					$category_id_4 = $this->input->post('category_id_4');	
					if(!empty($category_id_4))
						{
							$insert['category_id_4'] = $category_id_4;
							$insert['description_4']= $this->input->post('description_4'); 
						} 
						 
					$category_id_5 = $this->input->post('category_id_5');	
					if(!empty($category_id_5))
						{
							$insert['category_id_5'] = $category_id_5;
							$insert['description_5'] = $this->input->post('description_5'); 
						} 
						 
					$category_id_6 = $this->input->post('category_id_6');	
					if(!empty($category_id_6))
						{
							$insert['category_id_6'] = $category_id_6;
							$insert['description_6'] = $this->input->post('description_6'); 
						} 
						 
					$category_id_7 = $this->input->post('category_id_7');	
					if(!empty($category_id_7))
						{
							$insert['category_id_7'] = $category_id_7;
							$insert['description_7'] = $this->input->post('description_7'); 
						} 
						 
					$category_id_8 = $this->input->post('category_id_8');	
					if(!empty($category_id_8))
						{
							$insert['category_id_8'] = $category_id_8;
							$insert['description_8'] = $this->input->post('description_8'); 
						} 
						 
					$category_id_9 = $this->input->post('category_id_9');	
					if(!empty($category_id_9))
						{
							$insert['category_id_9'] = $category_id_9;
							$insert['description_9'] = $this->input->post('description_9'); 
						} 
						 
					$category_id_10 = $this->input->post('category_id_10');	
					if(!empty($category_id_10))
						{
							$insert['category_id_10'] = $category_id_10;
							$insert['description_10'] = $this->input->post('description_10'); 
						}  
						
					$price = $this->input->post('price');
					$insert['price'] = $price;
					
					$offer_price = $this->input->post('offer_price');
					$insert['offer_price'] = $offer_price;
					
					$description = $this->input->post('description');
					$insert['description'] = $description;
					
					$specimen = $this->input->post('specimen');
					$insert['specimen'] = $specimen;
					
					$report_time = $this->input->post('report_time');
					$insert['report_time'] = $report_time;
					$this->db->insert('tb_test',$insert);
					$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
										<button data-dismiss="alert" class="close" type="button" data-original-title="">
											x
										</button>
										<p>
										Your Data Has Been Added Successfully !!</p>
										</div>');
					redirect('Package/');
				}
		}
	public function Edit()
		{
			
			$catlist=null;
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('price','price','required');
			$this->form_validation->set_rules('offer_price','offer price','required');
			$this->form_validation->set_rules('description','description','required');
			$this->form_validation->set_rules('specimen','specimen','required');
			$this->form_validation->set_rules('report_time','report time','required');
			if($this->form_validation->run()==False)
				{
						$id = $this->uri->segment(3);
						$this->db->where(array("md5(id)"=>$id));
						$dd = $this->db->get('tb_test');
						$edit['id'] = $dd->row()->id;
						$edit['name'] = $dd->row()->name;
						$edit['image']=$dd->row()->image;
						$edit['price'] = $dd->row()->price;
						$edit['offer_price'] = $dd->row()->offer_price;
						$edit['description'] = $dd->row()->description;
						$edit['specimen'] = $dd->row()->specimen;
						$edit['report_time'] = $dd->row()->report_time;
						$cat =  $this->db->get('tb_category');
						foreach($cat->result_array() as $v)
							{
								if(md5($v['id'])==$dd->row()->category_id)
									{
										$sel='selected';
									}
								else
									{
										$sel='';
									} 
								$catlist.='<option value='.md5($v['id']).' '.$sel.'>'.$v['name'].'</option>';
							}
						$edit['catlist'] = $catlist;
						
						$edit['category_id'] 	= $dd->row()->category_id;
						 
						$edit['description_1'] 	= $dd->row()->description_1;
						$edit['category_id_2'] 	= $dd->row()->category_id_2;
						$edit['description_2'] 	= $dd->row()->description_2;
						$edit['category_id_3'] 	= $dd->row()->category_id_3;
						$edit['description_3'] 	= $dd->row()->description_3;
						$edit['category_id_4'] 	= $dd->row()->category_id_4;
						$edit['description_4'] 	= $dd->row()->description_4;
						$edit['category_id_5'] 	= $dd->row()->category_id_5;
						$edit['description_5'] 	= $dd->row()->description_5;
						$edit['category_id_6'] 	= $dd->row()->category_id_6;
						$edit['description_6'] 	= $dd->row()->description_6;
						$edit['category_id_7'] 	= $dd->row()->category_id_7;
						$edit['description_7'] 	= $dd->row()->description_7;
						$edit['category_id_8'] 	= $dd->row()->category_id_8;
						$edit['description_8'] 	= $dd->row()->description_8;
						$edit['category_id_9'] 	= $dd->row()->category_id_9;
						$edit['description_9'] 	= $dd->row()->description_9;
						$edit['category_id_10'] = $dd->row()->category_id_10;
						$edit['description_10'] = $dd->row()->description_10;
						
						$this->load->view('site/header');
						$this->load->view('package/edit',$edit);
						$this->load->view('site/footer');
				}
			else
				{
						if (!empty($_FILES['image']['name']))
							{
								$config['upload_path']   ='./assets/img/package';
								$config['allowed_types'] ='png|jpg|jpeg|gif';   
								$this->upload->initialize($config); 
								$update['image']= str_replace(' ', '_', $_FILES['image']['name']);
							}
						$id = $this->input->post('id');
						$update['name'] = $this->input->post('name');
						$update['price'] = $this->input->post('price');
						$update['offer_price'] = $this->input->post('offer_price');
						$update['description'] = $this->input->post('description');
						$update['specimen'] = $this->input->post('specimen');
						$update['report_time'] = $this->input->post('report_time');
						
						$update['category_id'] 		= 	$this->input->post('category_id_1');
						$update['description_1'] 	= 	$this->input->post('description_1');
						$update['category_id_2'] 	= 	$this->input->post('category_id_2');
						$update['description_2'] 	= 	$this->input->post('description_2');
						$update['category_id_3'] 	= 	$this->input->post('category_id_3');
						$update['description_3'] 	= 	$this->input->post('description_3');
						$update['category_id_4'] 	= 	$this->input->post('category_id_4');
						$update['description_4'] 	= 	$this->input->post('description_4');
						$update['category_id_5'] 	=	$this->input->post('category_id_5');
						$update['description_5'] 	= 	$this->input->post('description_5');
						$update['category_id_6'] 	= 	$this->input->post('category_id_6');
						$update['description_6'] 	= 	$this->input->post('description_6');
						$update['category_id_7'] 	= 	$this->input->post('category_id_7');
						$update['description_7'] 	= 	$this->input->post('description_7');
						$update['category_id_8'] 	= 	$this->input->post('category_id_8');
						$update['description_8'] 	= 	$this->input->post('description_8');
						$update['category_id_9'] 	= 	$this->input->post('category_id_9');
						$update['description_9'] 	= 	$this->input->post('description_9');
						$update['category_id_10'] 	= 	$this->input->post('category_id_10');
						$update['description_10'] 	= 	$this->input->post('description_10');
						
						$this->db->where(array("id"=>$id));
						$this->db->update("tb_test", $update);
						$this->session->set_flashdata('success', '<div class="alert alert-block alert-success fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Edit Successfully !!</p>
										</div>');
						redirect('Package/');
				}
		}

			
		
	public function Delete()
		{
			$id = $this->uri->segment(3);
			$this->db->where(array("md5(id)"=>$id));
			$this->db->delete('tb_test');
			$this->session->set_flashdata('success', '<div class="alert alert-block alert-danger  fade in">
											<button data-dismiss="alert" class="close" type="button" data-original-title="">
												x
											</button>
											<p>
											Your Data Has Been Deleted Successfully !!</p>
										</div>');
			redirect('Package');
			
		}
}
