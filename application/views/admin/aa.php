 public function get_brigadiri_users_all_select()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('brigadiri', '1');
            $query = $this->db->get('users');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_brigadiri_sms_migebuli($limit, $start)
        {
            
            $this->db->limit($limit, $start);
            $this->db->order_by("id", "desc");
            $this->db->where('mimgebi', $this->session->userdata('name').' '.$this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_brigadiri_sms_migebuli_all()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('mimgebi', $this->session->userdata('name').' '.$this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_brigadiri_sms_gagzavnili($limit, $start)
        {
            
            $this->db->limit($limit, $start);
            $this->db->order_by("id", "desc");
            $this->db->where('reg_name', $this->session->userdata('name'));
            $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        } 
        public function get_brigadiri_sms_gagzavnili_all()
        {
            $this->db->order_by("id", "desc");
            $this->db->where('reg_name', $this->session->userdata('name'));
            $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_sms');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_brigadiri_files()
        {
            $this->db->order_by("id", "desc");
           // $this->db->where('reg_name', $this->session->userdata('name'));
           // $this->db->where('reg_surname', $this->session->userdata('surname'));
            $query = $this->db->get('brigadiris_files');
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_brigadiri_sms_details($code)
        {
            $query = $this->db->get_where('brigadiris_sms', array('code' => $code));
            $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->row_array();
        }
        public function brigadiri_status_update($code)
        {
            $this->status =1;
            $this->db->where('code', $code);
            $this->db->update('brigadiris_sms', $this);
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