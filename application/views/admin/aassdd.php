public function get_brigadiri_users_all_select()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('brigadiri', '1');
            $query = $this->db->get('users');
            $query->num_rows() ;
            return $query->result_array();
        }
        public function get_brigadiri_sms_migebuli($limit, $start)
        {
            
            $this->db->limit($limit, $start);
            $this->db->order_by("id", "desc");
            $this->db->where('mimgebi', $this->session->userdata('name').' '.$this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows() ;
            return $query->result_array();
        }
        public function get_brigadiri_sms_migebuli_all()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('mimgebi', $this->session->userdata('name').' '.$this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function get_brigadiri_all_search($array, $limit, $start)
        {
            
            $this->db->limit($limit, $start);
            if(count($array) != "0")
            {
             $this->db->where($array);
            }
            $this->db->order_by("id", "desc");
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function get_brigadiri_all_search_count($array)
        {
            
            if(count($array) != "0")
            {
             $this->db->where($array);
            }
            $this->db->order_by("id", "desc");
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function get_brigadiri_sms_gagzavnili($limit, $start)
        {
            
            $this->db->limit($limit, $start);
            $this->db->order_by("id", "desc");
            $this->db->where('reg_name', $this->session->userdata('name'));
            $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows();
                    
            return $query->result_array();
        } 
        public function get_brigadiri_sms_gagzavnili_all()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('reg_name', $this->session->userdata('name'));
            $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function get_brigadiri_files()
        {
            $this->db->order_by("id", "desc");
           // $this->db->where('reg_name', $this->session->userdata('name'));
           // $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_files');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function brigadiri_gagzavnili_files($code)
        {
            $this->db->order_by("id", "desc");
            $this->db->where("code", $code);
            $this->db->where("sms_status", '1');
           // $this->db->where('reg_name', $this->session->userdata('name'));
           // $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_files');
            $query->num_rows();
                    
            return $query->result_array();
        }
        public function brigadiri_migebuli_files($code)
        {
            $this->db->order_by("id", "desc");
            $this->db->where("sms_status", '1');
            $this->db->where("code", $code);
           // $this->db->where('reg_name', $this->session->userdata('name'));
           // $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_files');
            $query->num_rows();
                    
            return $query->result_array();
        }
        
        public function get_brigadiri_sms_details($code)
        {
            $query = $this->db->get_where('brigadiris_sms', array('code' => $code));
            $this->db->order_by("id", "desc");
            $query->num_rows();
                    
            return $query->row_array();
        }
        public function brigadiri_status_update($code)
        {
            $this->status =1;
            $this->db->where('code', $code);
            $this->db->update('brigadiris_sms', $this);
        }
        public function update_brigadiri_files_status($code)
        {
            $this->sms_status =1;
            $this->db->where('code', $code);
            $this->db->update('brigadiris_files', $this);
        }
        
        public function update_brigadiri_gallery($data, $codee)
        {
            $date = date('Y-m-d H:i');
               $this->db->set($data);
               $this->db->set('reg_id', $this->session->userdata('id'));
               $this->db->set('reg_name', $this->session->userdata('name'));
               $this->db->set('reg_surname', $this->session->userdata('surname'));
                $this->db->set('code', $codee);
                $this->db->set('date', $date);

                $this->db->insert('brigadiris_files');
        }