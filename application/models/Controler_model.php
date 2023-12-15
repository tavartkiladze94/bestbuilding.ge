<?php 
class Controller_model extends CI_Model {

        function validate_login($postData){
                $this->db->select('*');
                $this->db->where('email', $postData['email']);
                $this->db->where('password', $postData['password']);
                // $this->db->where('status', 1);
                $this->db->from('users');
                $query=$this->db->get();
                if ($query->num_rows() == 0)
                    return false;
                else
                    return $query->result();
        }
        
        function check($email){
                $this->db->select('*');
                $this->db->where('email', $email);
                // $this->db->where('status', 1);
                $this->db->from('users');
                $query=$this->db->get();
                if ($query->num_rows() == 0)
                    return false;
                else
                    return $query->result();
        }
        public function validation_set($email, $str)
        {
           
         $this->validation_code     = $str;
         $this->db->where('email', $email);
         $this->db->update('users', $this);

               
        }
        public function validation($str)
        {
                $this->validation    = 1;
                $this->db->where('validation_code', $str);
                $this->db->update('users', $this);
        }
        public function update_password($pass){
           
               // $this->password= $pass;
              
                $id = $this->session->userdata('id');

         $this->db->where('id', $id);
         $this->db->update('users', $pass);

               
        }
        public function get_about_text()
        {
               $query = $this->db->get_where('best_about', array('code' => 'about'));
                return $query->row_array();
                
        }
        public function about_update($text)
        {
    
                $this->db->update('best_about', $text);
        }
       
        public function update_profile_photo($photo)
        {
             $id = $this->session->userdata('id');
             $this->db->where('id', $id);
             $this->db->update('users', $photo);   
        }
        public function insert_object_photo($data,$code)
        {
            $date = date('Y-m-d H:i');
            $this->db->set($data);
            $this->db->set('registrator', $this->session->userdata('id'));
            $this->db->set('date', $date);
            $this->db->set('code', $code);
            $this->db->insert('best_projects_images');
        }
      
        public function get_users($id)
        {
            $query = $this->db->get_where('users', array('id' => $id));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
        public function user_view($id, $name, $surname)
        {
            $query = $this->db->get_where('users', array('id' => $id, 'name' => $name, 'surname' => $surname));
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
        public function get_user_list($limit, $start)
        {
            
            $this->db->limit($limit, $start);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('users');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_users_list_search($arrayy, $limit, $start)
        {
             $this->db->select('*');
             $this->db->where($arrayy);

             $this->db->from('users');
             $this->db->limit($limit, $start);
             $this->db->order_by("id", "desc");
             $query=$this->db->get();
             return $query->result_array();
        }
         public function get_users_length($array)
        {
            $this->db->select('*');
            if(count($array) != "0")
            {
             $this->db->where($array);
            }
            $query = $this->db->get('users');
            $this->db->order_by("id", "desc");
            return $query->result_array();
        }
         public function user_delete($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('users');
        }
        
        public function update_users($id, $postdata)
        {
            $this->db->where('id', $id);
            $this->db->update('users', $postdata);
        }
       
        public function get_user_view_object( $arrayy, $limit, $start)
        {
             $this->db->select('*');
             $this->db->where($arrayy);
             $this->db->from('best_projects');
             $this->db->limit($limit, $start);
             $this->db->order_by("id", "desc");
             $query=$this->db->get();
            return $query->result_array();
        }
        public function get_user_object( $arrayy, $limit, $start)
        {
             $this->db->select('*');
             $this->db->where($arrayy);
             $this->db->from('best_projects');
             $this->db->limit($limit, $start);
             $this->db->order_by("id", "desc");
             $query=$this->db->get();
            return $query->result_array();
        }
        
        public function get_object_list_edit($code)
        {
        
            $query = $this->db->get_where('best_projects', array('code' => $code));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        
        public function get_object_list($limit, $start)
        {
            
            $this->db->select('*');
             $this->db->order_by("id", "desc");
             $this->db->from('best_projects');
             $this->db->limit($limit, $start);
             $query=$this->db->get();
             return $query->result_array();
        }
        public function get_object_list_type($limit, $start, $type)
        {
            
            $this->db->select('*');
             $this->db->where('type', $type);
             $this->db->order_by("id", "desc");
             $this->db->from('best_projects');
             $this->db->limit($limit, $start);
             $query=$this->db->get();
             return $query->result_array();
        }
        public function get_object_list_search($arrayy, $limit, $start)
        {
             $this->db->select('*');
             $this->db->where($arrayy);

             $this->db->from('best_projects');
             $this->db->limit($limit, $start);
             $query=$this->db->get();
             return $query->result_array();
        }
        public function object_edit($code)
        {
            $query = $this->db->get_where('best_projects', array('code' => $code));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
        public function object_view($code)
        {
            $query = $this->db->get_where('best_projects', array('code' => $code));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
        public function get_object_length($array)
        {
            $this->db->select('*');
            if(count($array) != "0")
            {
             $this->db->where($array);
            }
            $query = $this->db->get('best_projects');
            $this->db->order_by("id", "desc");
            return $query->result_array();
        }
        public function get_object_length_type($array,$type)
        {
            $this->db->select('*');
            if(count($array) != "0")
            {
             $this->db->where($array);
            }
            $this->db->where('type', $type);
            $query = $this->db->get('best_projects');
            $this->db->order_by("id", "desc");
            return $query->result_array();
        }
        public function get_object_images($code)
        {
            $query = $this->db->get_where('best_projects_images', array('code' => $code));
            
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
         public function object_update($code, $postdata)
        {
            $this->db->where('code', $code);
            //$this->db->where('reg_id', $this->session->userdata('id'));
            //$this->db->where('reg_name', $this->session->userdata('name'));
            //$this->db->where('reg_surname', $this->session->userdata('surname'));
            $this->db->update('best_projects', $postdata);
        }
        public function object_view_update($code, $postdata)
        {
            $this->db->where('code', $code);
            $this->db->update('best_projects', $postdata);
        }

         public function object_delete($code)
        {
                $this->db->where('code', $code);
                $this->db->where('reg_id', $this->session->userdata('id'));
                $this->db->where('reg_name', $this->session->userdata('name'));
                $this->db->where('reg_surname', $this->session->userdata('surname'));
                $this->db->delete('best_projects');
        }
         public function object_booking_delete($book_code)
        {
                $this->db->where('book_code', $book_code);
                $this->db->delete('booking_object');
        }
         public function update_object_gallery($data, $code)
        {
            $date = date('Y-m-d H:i');
               $this->db->set($data);
               $this->db->set('registrator', $this->session->userdata('id'));
                $this->db->set('code', $code);
                $this->db->set('date', $date);

                $this->db->insert('best_projects_images');
        }
         public function object_image_delete($file_name)
        {
                $this->db->where('file_name', $file_name);
                $this->db->delete('best_projects_images');
        }
         public function object_main_image($file_name, $code)
        {
                $this->db->where('code', $code);
                $this->db->where('reg_id', $this->session->userdata('id'));
                $this->db->where('reg_name', $this->session->userdata('name'));
                $this->db->where('reg_surname', $this->session->userdata('surname'));
                $this->file_name     = $file_name;
                $this->db->update('best_projects', $this);
        }
        
        public function get_object_booking($id)
        {
            $query = $this->db->get_where('booking_object', array('registrator' => $id));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_object_booking_all()
        {
            $query = $this->db->get('booking_object');
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }

        public function update_coords($coords)
        {
                $this->db->update('best_projects', $coords);
        }
        public function object_activate($id)
        {
                $this->db->where('id', $id);
                  $this->status     = "Active";
                $this->db->update('best_projects', $this);
        }
        public function object_expired($id)
        {
                $this->db->where('id', $id);
                  $this->status     = "Expired";
                $this->db->update('best_projects', $this);
        }
        public function object_canceled($id)
        {
                $this->db->where('id', $id);
                $this->status     = "Canceled";
                $this->db->update('best_projects', $this);
        }
    
        public function user_activate($id, $name, $surname)
        {
                $this->db->where('id', $id);
                $this->db->where('name', $name);
                $this->db->where('surname', $surname);
                  $this->status     = "Active";
                $this->db->update('users', $this);
        }
        public function user_expired($id, $name, $surname)
        {
                $this->db->where('id', $id);
                $this->db->where('name', $name);
                $this->db->where('surname', $surname);
                  $this->status     = "Expired";
                $this->db->update('users', $this);
        }
         
        public function update_object_coords($code, $lat,$lng)
        {
                $this->lat  = $lat;
                $this->lng  = $lng;
                $this->db->where('code', $code);
                $this->db->where('reg_id', $this->session->userdata('id'));
                $this->db->where('reg_name', $this->session->userdata('name'));
                $this->db->where('reg_surname', $this->session->userdata('surname'));
                $this->db->update('best_projects', $this);
        }
        public function chat_insertt($obj)
        { 
           $this->db->set($obj);
           //$this->db->set('status', 'unread');
		   $this->db->insert('support_chat');
        }
        public function chat_update($user)
        {
                $this->db->where('user', $user);
                  $this->status     = "read";
                $this->db->update('support_chat', $this);
        }
        public function get_chat_count()
        {
             $this->db->select('user');
             $this->db->where('status', 'unread');
             $this->db->order_by("id", "desc");
             $this->db->from('support_chat');
             $query=$this->db->get();
                return $query->result_array(); 
        }
        public function get_chat_users()
        {
             $this->db->select('user');
             //$this->db->where('status', 'unread');
              $this->db->order_by("id", "desc");
             $this->db->from('support_chat');
             $this->db->distinct();
             $query=$this->db->get();
             return $query->result_array(); 
        }
        public function get_chat_full($user)
        {
             $this->db->select('*');
             //$this->db->where('status', 'unread');
             $this->db->where('user', $user);
             $this->db->from('support_chat');
             $query=$this->db->get();
             return $query->result_array(); 
        }
        

}