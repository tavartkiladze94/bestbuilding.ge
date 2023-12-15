<?php 
class Patients_model extends CI_Model {
       
        
        public function get_patients_all()
        {
            
            $this->db->select('*');
             $this->db->order_by("id", "desc");
             $this->db->from('patients');
             $query=$this->db->get();
             return $query->result_array();
        }
        public function get_patients($limit, $start)
        {
            
            $this->db->select('*');
             $this->db->from('patients');
             $this->db->order_by("code", "asc");
             $this->db->limit($limit, $start);
             $query=$this->db->get();
             return $query->result_array();
        }
        public function patients_edit($code)
        {
            $query = $this->db->get_where('patients', array('code' => $code));
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
         public function get_patients_details($code)
        {
         $query = $this->db->get_where('patients', array('code' => $code));
        return $query->row_array();
        }
        public function get_patients_length()
        {
            $this->db->select('*');
            $query = $this->db->get('patients');
            return $query->result_array();
        }
      
        public function get_patients_key()
        {
            $this->db->select('*');  
            $this->db->where($key, $value);
            $this->db->where('status', 'Active');
            $this->db->where('file_name !=', '');
            $this->db->from('patients');
            $query=$this->db->get();
            return $query->result_arrfay(); 
        }
        
       
       
        public function get_patients_search($arrayy, $limit, $start)
        {
            $this->db->select('*');
            $this->db->where($arrayy);
            $this->db->order_by("code", "asc");
            $this->db->from('patients');
            $this->db->limit($limit, $start);
            $query=$this->db->get();
            return $query->result_array();
        }
        public function patients_update($code, $postdata)
        {
            $this->db->where('code', $code);
            $this->db->update('patients', $postdata);
        }
        public function patients_delete($code)
        {
                $this->db->where('code', $code);
                $this->db->delete('patients');
        }
         public function get_forma_all()
        {
            
            $this->db->select('*');
            $this->db->where('year', $this->session->userdata('year'));
             $this->db->order_by("id", "desc");
             $this->db->from('forma100');
             $query=$this->db->get();
             return $query->result_array();
        }
        public function get_forma($limit, $start)
        {
            
            $this->db->select('*');
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->from('forma100');
            $this->db->order_by("id", "desc");
            $this->db->limit($limit, $start);
            $query=$this->db->get();
            return $query->result_array();
        }
        public function forma_edit($code)
        {
            $query = $this->db->get_where('forma100', array('code' => $code, 'year' =>$this->session->userdata('year')));
            
            return $query->row_array();
        }
         public function get_forma_details($code)
        {
         $query = $this->db->get_where('forma100', array('code' => $code, 'year' =>$this->session->userdata('year')));
        return $query->row_array();
        }
        public function get_forma_length()
        {
            $this->db->select('*');
            $this->db->where('year', $this->session->userdata('year'));
            $query = $this->db->get('forma100');
            return $query->result_array();
        }
      
        public function get_forma_key()
        {
            $this->db->select('*');
                
            $this->db->where($key, $value);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->where('status', 'Active');
            $this->db->where('file_name !=', '');
            $this->db->from('forma100');
            $query=$this->db->get();
            return $query->result_array(); 
        }
        
       
       
        public function get_forma_search($arrayy, $limit, $start)
        {
            $this->db->select('*');
            $this->db->where($arrayy);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->order_by("code", "asc");
            $this->db->from('forma100');
            $this->db->limit($limit, $start);
            $query=$this->db->get();
            return $query->result_array();
        }
        public function forma_update($code, $postdata)
        {
            $this->db->where('code', $code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->update('forma100', $postdata);
        }
        public function forma_delete($code)
        {
                $this->db->where('code', $code);
                $this->db->where('year', $this->session->userdata('year'));
                $this->db->delete('forma100');
        }
       //////////////////////////////////////////////////////Category
       public function get_category($cat,$limit, $start)
        {
            
            $this->db->select('*');
             $this->db->from('patients_category');
             $this->db->group_by('patients_code');
             $this->db->where('category', $cat);
             $this->db->where('year', $this->session->userdata('year'));
             $this->db->order_by("n", "asc");
             $this->db->limit($limit, $start);
             $query=$this->db->get();
             return $query->result_array();
        }
        public function get_category_length($cat)
        {
            $this->db->select('*');
            $this->db->where('category', $cat);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->group_by('patients_code');
            $query = $this->db->get('patients_category');
            return $query->result_array();
        }
        public function category_patients($cat,$patients_code)
        {
            $this->db->select('*');
            $this->db->from('patients_category');
            $this->db->where('patients_code', $patients_code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->where('category', $cat);
            $this->db->order_by("id", "asc");
            $query=$this->db->get();
            return $query->result_array();
        }
        public function category_edit($code)
        {
            $query = $this->db->get_where('patients_category', array('code' => $code, 'year' =>$this->session->userdata('year')));
            
            return $query->row_array();
        }
        
        public function category_update($code, $postdata)
        {
            $this->db->where('code', $code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->update('patients_category', $postdata);
        }
        public function category_n_update($patients_code, $postdata)
        {
            $this->db->where('patients_code', $patients_code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->db->update('patients_category', $postdata);
        }
        public function category_delete($code)
        {
                $this->db->where('code', $code);
                $this->db->where('year', $this->session->userdata('year'));
                $this->db->delete('patients_category');
        }
        public function category_shevseba($patients_code)
        {
            $this->db->where('patients_code', $patients_code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->status     = 1;
            $this->db->update('patients_category', $this);
        }
        public function category_dacarieleba($patients_code)
        {
            $this->db->where('patients_code', $patients_code);
            $this->db->where('year', $this->session->userdata('year'));
            $this->status     = 0;
            $this->db->update('patients_category', $this);
        }
        public function update_category_mobile($patients_code, $mobile)
        {
           
         $this->mobile= $mobile;
         $this->db->where('patients_code', $patients_code);
         $this->db->update('patients_category', $this);
        }
        public function get_talon_images($code)
        {
            $query = $this->db->get_where('talon_images', array('code' => $code));
            
            return $query->result_array();
        }
        public function update_talon_gallery($data, $code)
        {
               $date = date('Y-m-d H:i');
               $this->db->set($data);
               $this->db->set('code', $code);
               $this->db->set('date', $date);
                $this->db->insert('talon_images');
        }
        public function talon_image_delete($file_name)
        {
                $this->db->where('file_name', $file_name);
                $this->db->delete('talon_images');
        }
        public function upd()
        {
            $this->reg_name = "lana";
            $this->db->update('patients_category', $this);
        }
}