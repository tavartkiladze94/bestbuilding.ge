<?php 
class Main_model extends CI_Model {
        public function get_page_view_count($page)
        {
            $this->db->select('view');
            $this->db->where('page', $page);
            $query = $this->db->get('pages');
            return $query->result();
            

        }
        public function update_page_view($arr)
        {   
            $this->view  = $arr["view"];
            $this->db->where('page', $arr["page"]);
            $this->db->update('pages', $this);
            
        }
        public function update_page_history_view($arr)
        {
            $date = date('Y-m-d H:i');
            $this->db->set($arr);
           $this->db->set('date', $date);
            $this->db->insert('pages_history');
        }

     
         public function get_about_text()
        {
               $query = $this->db->get_where('best_about', array('code' => 'about'));
                return $query->row_array();
                
        }
        public function get_main_materials()
        {
            
            $this->db->limit(4);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('building_materials');
            
            return $query->result_array();
        }
       public function get_main_news()
        {
            
            $this->db->limit(2);
            $this->db->order_by("id", "desc");
            $query = $this->db->get('best_news');
            
            return $query->result_array();
        }
        public function get_best_projects()
        {
                $this->db->order_by("id", "asc");
                $query = $this->db->get('best_projects');
                return $query->result_array();
           
        }
        public function get_building_materials()
        {
            $this->db->order_by("id", "desc");
            $query = $this->db->get('building_materials');
           
            return $query->result_array();
        }
        public function get_material_details($category)
        {
           if ($category != FALSE)
            {
                $this->db->where('category', $category);
                $query = $this->db->get('building_materials');
                return $query->row_array();
            }

        }
        public function get_material_images($category)
        {
            $query = $this->db->get_where('building_materials_images', array('category' => $category));
            
           
            return $query->result_array();
        }
        public function get_best_project($code)
        {
           if ($code != FALSE)
            {
                $this->db->where('code', $code);
                $query = $this->db->get('best_projects');
                return $query->row_array();
            }

        }
        public function get_best_current_work($code)
        {
           if ($code != FALSE)
            {
                $this->db->where('code', $code);
                $query = $this->db->get('best_current_work');
                return $query->result_array();
            }

        }
        public function get_object_images($code)
        {
            $query = $this->db->get_where('best_projects_images', array('code' => $code));
            
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        
        public function get_best_news()
        {
           
                $this->db->order_by("id", "desc");
                $query = $this->db->get('best_news');
                
                return $query->result_array();
           

        }
        public function get_best_news_details($code)
        {
           if ($code != FALSE)
            {
                $this->db->where('code', $code);
                $query = $this->db->get('best_news');
                return $query->row_array();
            }

        }
        
        public function get_news_images($code)
        {
            $query = $this->db->get_where('best_news_images', array('code' => $code));
            
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_current_work_images($code)
        {
            $query = $this->db->get_where('best_current_work_images', array('code' => $code));
             $this->db->order_by("id", "desc");
            if ($query->num_rows() == 0)
                    return false;
            else
            return $query->result_array();
        }
        public function get_current_works($code)
        {
            $this->db->order_by("id", "desc");
            $query = $this->db->get_where('best_current_work', array('object_code' => $code));
            
            return $query->result_array();
        }


}