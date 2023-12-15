<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtavari extends CI_Controller {

	public function __construct() {       
        parent::__construct();     
        $this->load->model("mtavari_model");
          $this->load->library('pagination');
        $this->load->helper('url'); 
         $this->load->helper('form');       
         $this->load->helper('url_helper');
        $this->load->helper('security');
        $this->load->library('session');
        $this->perPage = 4;
        if ($this->session->has_userdata('lan')) {
        	$idiom = $this->session->lan;
        		}else {
			$idiom = 'ge';
			$this->session->set_userdata('lan', $idiom);
		}		
		$this->lang->load('main', $idiom);
    }

	public function index()
	{	
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login")); 		
		//$data['content'] = 'mtavari/login';
	//	$data['mainpage'] = $this->mtavari_model->get_mainpage($this->getLangId());
        $this->load->view('layouts/Aheader');
		$this->load->view('mtavari/index');
		$this->load->view('layouts/Afooter');
	}

	public function login()
	{            
		if ($this->session->has_userdata('logged_in')) redirect(base_url("mtavari/index")); 
		
		$this->load->view('layouts/header');
		$this->load->view('mtavari/login');
		$this->load->view('layouts/footer');
		
	}
	public function loginn()
	{
		$postData = $this->input->post();
        $validate = $this->mtavari_model->validate_login($postData);
        if ($validate){
            $newdata = array(

                'name' => $validate[0]->name,
                'surname' => $validate[0]->surname,
                'email'     => $validate[0]->email,
                'password'     => $validate[0]->password,
                'id' => $validate[0]->id,
                 'photo' => $validate[0]->file_name,
                  'category' => $validate[0]->category,
                // 'role' => $validate[0]->role,
               
                'logged_in' => TRUE              
            );
            $this->session->set_userdata($newdata);
            redirect(base_url("mtavari/index")); 
        }
        else{
            $data = array('alert' => true);        	
        	//$data['content'] = 'mtavari/login';
        	
		$this->load->view('layouts/header');
		$this->load->view('mtavari/login',$data);
		$this->load->view('layouts/footer');
        }		
	}
	public function password_change()
	{
		$password = $this->input->post('old_password');
		$new_password = $this->input->post('new_password');
		$repeat_new_password = $this->input->post('repeat_new_password');
		if($password != $this->session->userdata('password'))
		{
			 $data = array('alert' => true); 
			 $this->load->view('layouts/Aheader');
		$this->load->view('mtavari/profile_password', $data);
		$this->load->view('layouts/Afooter');
			 
		}
		else
		{
			$pass = array('password' => $new_password );
        $update = $this->mtavari_model->update_password($pass);
       
           $this->session->set_userdata('password', $new_password);
         $data = array('alert' => true); 
            redirect(base_url("mtavari/profile_password")); 
        
       	
       }
	}

    public function apartment_all($id)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));

	    $data['apartment'] = $this->mtavari_model->get_apartment($id);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/apartment_all', $data);
		$this->load->view('layouts/Afooter');
	}
	public function apartment_create()
	{
		
		$data['code'] = $this->generateRandomNumber();
		
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		else if (($this->session->has_userdata('apartment_code')) && ($this->input->server('REQUEST_METHOD') == 'POST'))
		{
			
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			$registrator =$this->session->userdata('id');
			$code = $this->session->userdata('apartment_code');
		
		$this->db->set($postData);
		$this->db->set('registrator', $registrator);
		$this->db->set('code', $code);
		$this->db->set('date', $date);
		$this->db->insert('apartment');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');

	    redirect(base_url("mtavari/apartment_create")); 
		}
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/apartment_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function apartment_edit($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['apartment_edit'] = $this->mtavari_model->apartment_edit($code);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/apartment_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function apartment_update($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['apartment_update'] = $this->mtavari_model->apartment_update($this->session->userdata('id'), $code);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/apartment_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function apartment_delete($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$del = $this->mtavari_model->apartment_delete($code);
		redirect(base_url("mtavari/apartment_all"));
	}
	public function delete_apartment_image($file_name, $code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$delete = $this->mtavari_model->apartment_image_delete($file_name);
        redirect(base_url("mtavari/apartment_gallery/".$code));
	}
	public function set_as_apartment_main_image($file_name, $code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$delete = $this->mtavari_model->apartment_main_image($file_name, $code);
		redirect(base_url("mtavari/apartment_gallery/".$code));
	}

	public function booking()
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/booking');
		$this->load->view('layouts/Afooter');
	}
	public function car_all($id)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['cars'] = $this->mtavari_model->get_cars($id);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/car_all',$data);
		$this->load->view('layouts/Afooter');
	}
	
	public function car_create()
	{
		
		$data['codee'] = $this->generateRandomNumber();
		
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		else if (($this->session->has_userdata('car_code')) && ($this->input->server('REQUEST_METHOD') == 'POST'))
		{
			
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			$registrator =$this->session->userdata('id');
			$code = $this->session->userdata('car_code');
		
		$this->db->set($postData);
		$this->db->set('registrator', $registrator);
		$this->db->set('date', $date);
		$this->db->set('code', $code);
		$this->db->insert('cars');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');

	    redirect(base_url("mtavari/car_create")); 
		}
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/car_create', $data);
		$this->load->view('layouts/Afooter');
	}
	public function car_edit($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['car_edit'] = $this->mtavari_model->car_edit($code);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/car_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function car_update($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['car_update'] = $this->mtavari_model->car_update($this->session->userdata('id'), $code);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/car_edit', $data);
		$this->load->view('layouts/Afooter');
	}
	public function car_delete($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$del = $this->mtavari_model->car_delete($code);
		redirect(base_url("mtavari/car_all"));
	}
	public function delete_car_image($file_name, $code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$delete = $this->mtavari_model->car_image_delete($file_name);
		redirect(base_url("mtavari/car_gallery/".$code));
	}
	public function profile_edit($id)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
        $data['profile_edit'] = $this->mtavari_model->get_users($id);
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/profile_edit',$data);
		$this->load->view('layouts/Afooter');
	}
	public function set_as_car_main_image($file_name, $code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$delete = $this->mtavari_model->car_main_image($file_name, $code);
		redirect(base_url("mtavari/car_gallery/".$code));
	}
	public function profile_edit_save($id)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
        $data['profile_edit'] = $this->mtavari_model->update_users($id, $this->input->post());
        redirect(base_url('mtavari/profile_edit/'.$this->session->userdata('id')));
		
	}
	public function profile_password()
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/profile_password');
		$this->load->view('layouts/Afooter');
	}
	public function profile_view($id)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['profile'] = $this->mtavari_model->get_users($id);
		$data['id'] = $this->session->userdata('id');
		$this->load->view('layouts/Aheader',$data);
		$this->load->view('mtavari/profile_view',$data);
		$this->load->view('layouts/Afooter');
	}
	public function tour_all()
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/tour_all');
		$this->load->view('layouts/Afooter');
	}
	public function tour_create()
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/tour_create');
		$this->load->view('layouts/Afooter');
	}
	public function apartment_gallery($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		 $data['images'] = $this->mtavari_model->get_apartment_images($code);
		  $data['imagess'] = $this->mtavari_model->get_apartment_images($code);
		 $data['cod'] = $code;
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/apartment_gallery', $data);
		$this->load->view('layouts/Afooter');
	}
	public function car_gallery($code)
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		 $data['iimages'] = $this->mtavari_model->get_car_images($code);
		  $data['iimagess'] = $this->mtavari_model->get_car_images($code);
		 $data['cod'] = $code;
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/car_gallery', $data);
		$this->load->view('layouts/Afooter');
	}
	public function user_create()
	{
		$code = $this->generateRandomNumber();
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		else if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			
			
			$postData = $this->input->post();
			$date = date('Y-m-d H:i');
			$registrator =$this->session->userdata('name')."_".$this->session->userdata('surname');
			
		
		$this->db->set($postData);
		$this->db->set('registrator', $registrator);
		$this->db->set('date', $date);
		$this->db->insert('users');
        $this->session->set_flashdata('alert', 'ჩანაწერი წარმატებით დაემატა');
	    $this->session->set_flashdata('alertype', 'success');

	    redirect(base_url("mtavari/apartment_create")); 
		}
		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/user_create');
		$this->load->view('layouts/Afooter');
	}
	public function user_list()
	{
		if (!$this->session->has_userdata('logged_in')) redirect(base_url("mtavari/login"));
		$data['users'] = $this->mtavari_model->get_users(FALSE);

       

		$this->load->view('layouts/Aheader');
		$this->load->view('mtavari/user_list', $data);
		$this->load->view('layouts/Afooter');
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
	public function generateRandomNumber($length = 8) {
	    $characters = '0123456789';
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
		redirect('/');
		// $oops = $this->lang->line('message_key');
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
			case 'ru':
				return 2;
				break;
		    case 'ge':
				return 3;
				break;
		
		}
	} 

	public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('mtavari/login'));
    }
    public function do_upload()
        {
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
               $data = array();
      

                $config['upload_path']          = './uploads/users/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('mtavari/profile_edit', $error);
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                       
                         $save  =$this->mtavari_model->update_profile_photo($data);

                       
                }
    }
     
    public function apartment_upload($code)
        {
        	if(($this->session->has_userdata('apartment_code')))
        	{
        		$this->session->unset_userdata('apartment_code');
        		 

        	}
		  $this->session->set_userdata('apartment_code', $code);
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
               $data = array();
      

                $config['upload_path']          = './uploads/apartments/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                       //$cod =$this->session->userdata('apartment_code');
                         $save  =$this->mtavari_model->insert_apartment_photo($data, $code);

                       
                }
    }
    public function car_upload($codee)
        {
        	if(($this->session->has_userdata('car_code')))
        	{
        		$this->session->unset_userdata('car_code');
        		

        	}
        	 $this->session->set_userdata('car_code', $codee);
		  
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
               $data = array();
      

                $config['upload_path']          = './uploads/cars/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                       //$cod =$this->session->userdata('apartment_code');
                         $save  =$this->mtavari_model->insert_car_photo($data, $codee);

                       
                }
    }
     public function update_apartment_gallery($codee)
        {
        
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
               $data = array();
      

                $config['upload_path']          = './uploads/apartments/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                       //$cod =$this->session->userdata('apartment_code');
                         $save  =$this->mtavari_model->update_apartment_gallery($data, $codee);

                       
                }
    }
    public function update_car_gallery($codee)
        {
        
        	$str = $this->generateRandomString();
            $filename = $this->session->userdata('id')."_". $str;
               $data = array();
      

                $config['upload_path']          = './uploads/cars/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;
                 $config['file_name']             = $filename;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $data = array('file_name' => $this->upload->data('file_name'));
                       //$cod =$this->session->userdata('apartment_code');
                         $save  =$this->mtavari_model->update_car_gallery($data, $codee);

                       
                }
    }
}
