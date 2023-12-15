<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Tbilisi');

class Patients extends CI_Controller {
   
   
	function  __construct() 
	{
	      parent::__construct();
	  	
    	$this->load->model("patients_model");
    	$this->load->library("pagination");
    	$this->load->helper('form');
        $this->load->helper('url');
          $this->load->helper('url_helper');
        $this->load->helper('security');
        
        if($this->session->has_userdata('lan')) 
       
        	$idiom = $this->session->lan;        
        
         else 
           {
			$idiom = 'ge';
			$this->session->set_userdata('lan', $idiom);
		    }		
		$this->lang->load('main', $idiom);
	}

    public function index()
	{
	    if ($this->input->server('REQUEST_METHOD') == 'POST')
	         { 
	             if($this->input->post('pass') == "oo")
	             {
	                 $this->session->set_userdata('user', 'lana');
	                 $this->session->set_userdata('year', '2023');
	                 redirect(base_url("patients/index"));
	             }
	             if($this->input->post('pass') == "user")
	             {
	                 $this->session->set_userdata('user', 'user');
	                 $this->session->set_userdata('year', '2023');
	                 redirect(base_url("patients/index"));
	             }
	             
	            
	             
	         }
	    if(($this->session->has_userdata('user') )) 
	    {
	        if($this->session->userdata('user') == 'lana')
	        redirect(base_url("patients/list"));
	       
	    }
	        if($this->session->userdata('user') == 'user')
	        redirect(base_url("patients/category_list/fsiqomaturi"));
	         

	 $this->load->view('patients/index');
	    

	}
	public function year($year)
	{
	     
	  $this->session->set_userdata('year', $year);
	  redirect(base_url("patients/index"));
	}


	public function list()
    {
        if($this->session->userdata('user') != 'lana') redirect(base_url("patients/category_list/fsiqosomaturi"));
         $array = [];
		$config["per_page"] = 20;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['patients'] = array();
	    $data['patients'] = $this->patients_model->get_patients($config["per_page"], $page);
	    $data['count_patients'] = count($this->patients_model->get_patients_length());
	    
	    $config = array();
        $config["base_url"] = base_url() . "patients/list";
        $config["total_rows"] = $data['count_patients'];
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        //$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 5;
        
        //$config['use_page_numbers'] = TRUE;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        //$config['first_url'] = base_url() . 'patients/list/0'; 
        $config['prev_link'] = '<img src="'.base_url('assets/images/icons/left-1.png').'" alt="">';
        $config['next_link'] = '<img src="'.base_url('assets/images/icons/right-1.png').'" alt="">';
        $config['num_tag_open'] = '<li class="paginate_button page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item next " >';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="paginate_button page-item previous disabled" >';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
        
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/list', $data);
		$this->load->view('layouts/Afooter');
	}
	public function patients_details($code)
	{if($this->session->userdata('user') != 'lana') redirect(base_url("patients/forma_list"));
	    
		$data['patients_details'] = $this->patients_model->get_patients_details($code);
		$data['code'] = $code;
	
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/patients_details',$data);
		$this->load->view('layouts/Afooter');
	}
	

	public function patients_search()
	{
	    $data['patients_search'] = array();
	    $data['patients_all'] = array();
	    if($this->session->userdata('user') != 'lana') redirect(base_url("patients/forma_list"));
	    $config["per_page"] = 10;
        $arrayy = [];
        $raod = 0;
        $link = "";
        $mas = [];
       if($this->uri->segment(3))
        { 
            $i=4;
       
         while($this->uri->segment($i) != "")
        {
            
            $mas[$this->uri->segment($i-1)] = $this->uri->segment($i);
            $raod = $raod +2;
            $link =$link."/".$this->uri->segment($i-1)."/".$this->uri->segment($i);
            $i = $i +2;
        }
        }
        	    
        else
        {
        if(($this->input->post('fullname') != "")) 
	    {
	        $arrayy['fullname'] = $this->input->post('fullname');
	        $raod = $raod+2;
	        $link =$link."/fullname/".$this->input->post('fullname');

	    }
        if(($this->input->post('year') != "year")) 
	    {
	        $arrayy['year'] = $this->input->post('year');
	        $raod = $raod+2;
	        $link =$link."/year/".$this->input->post('year');

	    }
	    if(	$this->input->post('personal_no') != "") 
	    {	        
	        $arrayy['personal_no'] = $this->input->post('personal_no');
            $raod = $raod+2;
            $link =$link."/personal_no/".$this->input->post('personal_no');
	    }
	    if(($this->input->post('fullname') == "") &	($this->input->post('year') == "year") & (	$this->input->post('personal_no') == "") ) 
	    {
	        redirect('patients/list');
	    }
        }
        $page = ($this->uri->segment(3+$raod)) ? $this->uri->segment(3+$raod) : 0;
        if(count($arrayy) != "0"){
        $data['patients_search'] = $this->patients_model->get_patients_search($arrayy, $config["per_page"], $page);
        }
	    if(count($mas) != "0")
	    {
	    $data['patients_search'] = $this->patients_model->get_patients_search($mas, $config["per_page"], $page);
	    }
	    
        
       
		$data['patients_all'] = $this->patients_model->get_patients_all();
		$config = array();
        $config["base_url"] = base_url() . "patients/patients_search".$link;
        $config["total_rows"] = count($data['patients_search']);
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<img src="'.base_url('assets/images/icons/left-1.png').'" alt="">';
        $config['next_link'] = '<img src="'.base_url('assets/images/icons/right-1.png').'" alt="">';
        $config['num_tag_open'] = '<li class="paginate_button page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item next " >';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="paginate_button page-item previous disabled" >';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        $data['count'] = count($data['patients_search']);
        $data["linkss"] = $this->pagination->create_links();
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/patients_search', $data);
		$this->load->view('layouts/Afooter');
	}
	public function patients_create()
	{if($this->session->userdata('user') != 'lana') redirect(base_url("patients/forma_list"));
	    $code = $this->input->post('code');
		$data['code'] = $code;
		
	 if  ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			
		$this->db->set($postData);
	
     	$this->db->set('code', $code);
		$this->db->set('date', $date);
	    $this->db->set('year', date('Y'));
		$this->db->insert('patients');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');
	    redirect(base_url("patients/patients_edit/".$code)); 
		}
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/patients_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function patients_edit($code)
	{
		$data['patients_edit'] = array();
		$data['patients_edit'] = $this->patients_model->patients_edit($code);
		
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/patients_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	
	public function patients_update($code)
	{if($this->session->userdata('user') != 'lana') redirect(base_url("patients/forma_list"));
		$data['patients_update'] = array();
		$data['patients_update'] = $this->patients_model->patients_update( $code, $this->input->post());
				redirect(base_url("patients/patients_edit/".$code));

	}
	public function patients_delete($code)
	{if($this->session->userdata('user') != 'lana') redirect(base_url("patients/forma_list"));

		$del = $this->patients_model->patients_delete($code);
		redirect(base_url("patients/list"));
	}
	
	public function forma()
    {
        $this->load->view('layouts/Pheader');
		$this->load->view('patients/forma');
	}
	public function forma_list()
    {
        if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
         $array = [];
		$config["per_page"] = 20;
		$data['count_forma'] = 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['forma'] = array();
	    $data['forma'] = $this->patients_model->get_forma($config["per_page"], $page);
	    $data['count_forma'] = count($this->patients_model->get_forma_length());
	    
	    $config = array();
        $config["base_url"] = base_url() . "patients/forma_list";
        $config["total_rows"] = $data['count_forma'];
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        //$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 5;
        
        //$config['use_page_numbers'] = TRUE;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        //$config['first_url'] = base_url() . 'patients/list/0'; 
        $config['prev_link'] = '<img src="'.base_url('assets/images/icons/left-1.png').'" alt="">';
        $config['next_link'] = '<img src="'.base_url('assets/images/icons/right-1.png').'" alt="">';
        $config['num_tag_open'] = '<li class="paginate_button page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item next " >';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="paginate_button page-item previous disabled" >';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
        
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/forma_list', $data);
		$this->load->view('layouts/Afooter');
	}
	public function forma_details($code)
	{if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
	    
		$data['forma_details'] = $this->patients_model->get_forma_details($code);
		$data['code'] = $code;
	
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/forma_details',$data);
		$this->load->view('layouts/Afooter');
	}

	public function forma_search()
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
	    $config["per_page"] = 10;
        $arrayy = [];
        $raod = 0;
        $link = "";
        $mas = [];
       if($this->uri->segment(3))
        { 
            $i=4;
       
         while($this->uri->segment($i) != "")
        {
            
            $mas[$this->uri->segment($i-1)] = $this->uri->segment($i);
            $raod = $raod +2;
            $link =$link."/".$this->uri->segment($i-1)."/".$this->uri->segment($i);
            $i = $i +2;
        }
        }
        	    
        else
        {
       
	    if(	$this->input->post('code') != "") 
	    {	        
	        $arrayy['code'] = $this->input->post('code');
            $raod = $raod+2;
            $link =$link."/code/".$this->input->post('code');
	    }
	    if(	$this->input->post('code') == "")  
	    {
	        redirect('patients/forma_list');
	    }
        }
        $page = ($this->uri->segment(3+$raod)) ? $this->uri->segment(3+$raod) : 0;
        if(count($arrayy) != "0"){
        $data['forma_search'] = $this->patients_model->get_forma_search($arrayy, $config["per_page"], $page);
        }
	    if(count($mas) != "0")
	    {
	    $data['forma_search'] = $this->patients_model->get_forma_search($mas, $config["per_page"], $page);
	    }
	    
        
       
		$data['forma_all'] = $this->patients_model->get_forma_all();
		$config = array();
        $config["base_url"] = base_url() . "patients/forma_search/".$link;
        $config["total_rows"] = count($data['forma_search']);
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<img src="'.base_url('assets/images/icons/left-1.png').'" alt="">';
        $config['next_link'] = '<img src="'.base_url('assets/images/icons/right-1.png').'" alt="">';
        $config['num_tag_open'] = '<li class="paginate_button page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item next " >';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="paginate_button page-item previous disabled" >';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        $data['count'] = count($data['forma_search']);
        $data["linkss"] = $this->pagination->create_links();
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/forma_search', $data);
		$this->load->view('layouts/Afooter');
	}
	public function forma_create()
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
	    $code = $this->input->post('code');
		$data['code'] = $code;
		
	 if  ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			
		$this->db->set($postData);
	
     	$this->db->set('code', $code);
		$this->db->set('date', $date);
		$this->db->set('year', date('Y'));
	
		$this->db->insert('forma100');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');
	    redirect(base_url("patients/forma_edit/".$code)); 
		}
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/forma_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function forma_edit($code)
	{if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		
		
		$data['forma_edit'] = array();
		$data['forma_edit'] = $this->patients_model->forma_edit($code);
		
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/forma_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function forma_show($code)
	{
	    $data['forma_show'] = array();
		$data['forma_show'] = $this->patients_model->forma_edit($code);
		$this->load->view('patients/forma_show', $data);
	}
	
	public function forma_update($code)
	{if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		$data['forma_update'] = array();
		$data['forma_update'] = $this->patients_model->forma_update( $code, $this->input->post());
				redirect(base_url("patients/forma_edit/".$this->input->post('code')));

	}
	public function forma_delete($code)
	{if(!$this->session->userdata('user')) redirect(base_url("patients/index"));

		$del = $this->patients_model->forma_delete($code);
		redirect(base_url("patients/forma_list"));
	}
/////////////////////////////////////////////////////////////////////// Fsiqomaturi
    public function category_list($cat)
    {
        if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
       
         $array = [];
        $data['cat'] = $cat;
		$config["per_page"] = 2000;
		$data['count_category'] = 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['category'] = array();
	    $data['category'] = $this->patients_model->get_category($cat,$config["per_page"], $page);
	    $data['count_category'] = count($this->patients_model->get_category_length($cat));
	    
	    $config = array();
        $config["base_url"] = base_url() . "patients/category_list/".$cat;
        $config["total_rows"] = $data['count_category'];
        $config["per_page"] = 2000;
        $config["uri_segment"] = 3;
        //$choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 5;
        
        //$config['use_page_numbers'] = TRUE;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        //$config['first_url'] = base_url() . 'patients/list/0'; 
        $config['prev_link'] = '<img src="'.base_url('assets/images/icons/left-1.png').'" alt="">';
        $config['next_link'] = '<img src="'.base_url('assets/images/icons/right-1.png').'" alt="">';
        $config['num_tag_open'] = '<li class="paginate_button page-item ">';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="paginate_button page-item next " >';
        $config['next_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="paginate_button page-item previous disabled" >';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
        
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/category_list', $data);
		$this->load->view('layouts/Afooter');
	}
	
	public function category_create($cat)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
	    $data['code'] = "";
	    $data['code'] = $this->generateRandomString();
	    $data['patients_code'] = $this->generateRandomString();
	    $data['cat'] = $cat;
	   // $code = $this->input->post('code');
	//	$data['code'] = $code;
		
	 if  ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			
		$this->db->set($postData);
	
     	$this->db->set('code', $data['code']);
     	$this->db->set('reg_name', $this->session->userdata('user'));
     	$this->db->set('patients_code', $data['patients_code']);
		$this->db->set('date', $date);
	    $this->db->set('category', $cat);
	    $this->db->set('year', date('Y'));
		$this->db->insert('patients_category');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');
	    if($cat == "fsiqomaturi")
	    {
	    for($i=0;$i<11; $i++)
	    {
	       $data['code'] = "";
	       $data['code'] = $this->generateRandomString();
	       $this->db->set('v_1', $this->input->post('v_1'));
	       $this->db->set('v_3', $this->input->post('v_3'));
	       $this->db->set('v_4', $this->input->post('v_4'));
	       $this->db->set('code', $data['code']);
	       $this->db->set('reg_name', $this->session->userdata('user'));
     	   $this->db->set('patients_code', $data['patients_code']);
		   $this->db->set('date', $date);
	       $this->db->set('category', $cat);
	       $this->db->set('year', date('Y'));
		   $this->db->insert('patients_category');
	    }
	    }
	    redirect(base_url("patients/category_edit/".$data['code'])); 
		}
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/category_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function category_patients_create($cat,$patients_code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
	    $data['code'] = $this->generateRandomString();
	    $data['patients_code'] = $patients_code;
	    $data['cat'] = $cat;
	   // $code = $this->input->post('code');
	//	$data['code'] = $code;
		
	 if  ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			
		$this->db->set($postData);
	
     	$this->db->set('code', $data['code']);
     	$this->db->set('reg_name', $this->session->userdata('user'));
     	$this->db->set('patients_code', $data['patients_code']);
		$this->db->set('date', $date);
	    $this->db->set('category', $cat);
	    $this->db->set('year', date('Y'));
		$this->db->insert('patients_category');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');
	    
	    redirect(base_url("patients/category_edit/".$data['code'])); 
		}
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/category_patients_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function category_patients($cat,$patients_code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		$data['category_patients'] = array();
		$data['count_patients'] = 0;
		$data['category_patients'] = $this->patients_model->category_patients($cat,$patients_code);
		$data['n'] = "";
		foreach ($data['category_patients'] as $category_item)
		{
		    if($category_item['n']!= '')
		    $data['n'] = $category_item['n'];
		}
		$data['count_patients'] = count($data['category_patients']);
		$data["cat"] =  $cat;
		$data["patients_code"] =  $patients_code;
		$data['images'] = array();
		$data['imagess'] = array();
		$data['images'] = $this->patients_model->get_talon_images($patients_code);
		$data['imagess'] = $this->patients_model->get_talon_images($patients_code);
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/category_patients', $data);
		$this->load->view('layouts/Afooter');
	}
	public function talon_update($cat,$patients_code)
	{
		if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		
		redirect(base_url("patients/category_patients/".$cat."/".$patients_code));

	}
	public function delete_talon_image($file_name, $code, $cat,$patients_code)
	{
		if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		$delete = $this->patients_model->talon_image_delete($file_name);
        redirect(base_url("patients/category_patients/".$cat.'/'.$patients_code));
	}
	public function category_edit($code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		
		
		$data['category_edit'] = array();
		$data['category_edit'] = $this->patients_model->category_edit($code);
		
		$this->load->view('layouts/Pheader');
		$this->load->view('patients/category_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function category_update( $code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		$data['category_update'] = array();
		$data['category_update'] = $this->patients_model->category_update( $code, $this->input->post());
				redirect(base_url("patients/category_edit/".$code));

	}
	public function category_patients_n_update($cat, $patients_code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		$data['category_n_update'] = array();
		$data['category_n_update'] = $this->patients_model->category_n_update($patients_code, $this->input->post());
		redirect(base_url("patients/category_patients/".$cat."/".$patients_code));

	}
	public function category_show($code)
	{
	    $data['category_show'] = array();
		$data['category_show'] = $this->patients_model->category_edit($code);
		$this->load->view('patients/category_show', $data);
	}
	public function category_delete($code,$cat,$patients_code)
	{
	    if(!$this->session->userdata('user')) redirect(base_url("patients/index"));

		$del = $this->patients_model->category_delete($code);
		redirect(base_url("patients/category_patients/".$cat."/".$patients_code));
	}
	public function category_shevseba($cat, $patients_code)
	{
		if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		
		$this->patients_model->category_shevseba($patients_code);
			redirect(base_url("patients/category_list/".$cat));
	}
	public function category_dacarieleba($cat, $patients_code)
	{
		if(!$this->session->userdata('user')) redirect(base_url("patients/index"));
		
		$this->patients_model->category_dacarieleba($patients_code);
			redirect(base_url("patients/category_list/".$cat));
	}
	public function update_mobile($patients_code)
	{	
            $data['mobile_update'] = $this->patients_model->update_category_mobile($patients_code,$this->input->post('mobile'));
	    
		$chat_count = "yees";
        echo json_encode($chat_count);
	
	    
	}
	
	 public function update_talon_gallery($codee)
    {
        
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
            
               $data = array();
                $config['upload_path']          = './assets/images/talons/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 30000;
                $config['max_width']            = 8096;
                $config['max_height']           = 4048;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                        $save  =$this->patients_model->update_talon_gallery($data, $codee);
                         

                       
                }
    }
    
    
	public function getLangId()
	{
		$lang = 'ge';
		if ($this->session->has_userdata('lan')) {
        	$lang = $this->session->lan;        
        }else {
			$lang = 'ge';
			$this->session->set_userdata('lan', $lang);
		}
		switch ($lang) {
			case 'en':
				return 1;
				break;
			case 'ge':
				return 2;
				break;
			case 'ru':
				return 3;
				break;
		
		
		}
	} 
	public function generateRandomString($length = 20) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}


	public function setLanguage($lang)
	{
		$this->session->set_userdata('lan', $lang);	
	
			redirect('patients/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'/'.$this->uri->segment(6));
		
	    
	}
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('patients/index'));
    }
   

}