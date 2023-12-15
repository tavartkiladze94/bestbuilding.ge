<?php 
class User_model extends CI_Model {

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
         public function update_password($pass){
           
               // $this->password= $pass;
              
                $id = $this->session->userdata('id');

          $this->db->where('id', $id);
         $this->db->update('users', $pass);

               
        }
        public function update_profile_photo($photo)
        {
           
               // $this->password= $pass;
              
                $id = $this->session->userdata('id');

          $this->db->where('id', $id);
         $this->db->update('users', $photo);


               
        }
    
        
        public function insert_apartment_photo($data,$code)
        {
            $date = date('Y-m-d H:i');
            $this->db->set($data);
            $this->db->set('registrator', $this->session->userdata('id'));
            $this->db->set('date', $date);
            $this->db->set('code', $code);
            $this->db->insert('apartment_images');
        }
        public function insert_car_photo($data,$code)
        {
            $date = date('Y-m-d H:i');
            $this->db->set($data);
            $this->db->set('registrator', $this->session->userdata('id'));
            $this->db->set('date', $date);
            $this->db->set('code', $code);
            $this->db->insert('car_images');
        }
     
      
        public function get_users($id)
        {
            if ($id === FALSE)
            {
                $query = $this->db->get('users');
                return $query->result_array();
            }

        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
        }
        
        public function update_users($id, $postdata)
        {
              $this->db->where('id', $id);
         $this->db->update('users', $postdata);
        }
        public function get_apartment($id)
        {
            if ($id === FALSE)
            {
                $this->db->select('title, category, telephone, city, code, date, status, file_name, price ');
                $query = $this->db->get('apartment');
                return $query->result_array();
            }

        $query = $this->db->get_where('apartment', array('registrator' => $id));
        return $query->row_array();
        }


        public function get_cars($id)
        {
            if ($id === FALSE)
            {

                $query = $this->db->get('cars');
                return $query->result_array();
            }
            $this->db->select('*');
            $this->db->where('registrator',$id);
        
            $result = $this->db->get('cars')->result_array();
            return $result;
        }


        public function deleteRow($table,$id)
        {
                $this->db->where('id', $id);
                $this->db->delete($table);
        }
        
        public function deleteRowLang($table,$id)
        {
                $this->db->where($table.'_id',$id);
                $this->db->delete($table.'_lang');
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}