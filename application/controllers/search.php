<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
        
    
	public function index()
	{
            
            
	}
        
        public function search_results($query_id = 0, $sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
	{
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('MY_Input');
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            $this->my_input->load_query($query_id);
            $data['QUERY_ID'] = $query_id;
            $query_array = array(
                'search'=>$this->input->get('search'),
                'category'=>$this->input->get('category')
            );
            
            
            if($this->input->get('category')) $TABLE_NAME = $this->input->get('category');
            else $TABLE_NAME = 'STUDENT_PERSONAL_INFO';
            if($this->input->get('search')) $SEARCH = $this->input->get('search');
            else $SEARCH = '';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['APPLICANT_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("search/search_results/$query_id/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_RESULT']+1;
            $config['per_page'] = $limit;
            $config['uri_segment'] = 6;
            $config['num_links'] = 2;
            $config['first_link'] = 'FIRST';
            $config['first_tag_open'] = '<p class="btn">';
            $config['first_tag_close'] = '</p>';
            $config['last_link'] = 'LAST';
            $config['last_tag_open'] = '<p class="btn">';
            $config['last_tag_close'] = '</p>';
            $config['next_link'] = 'NEXT';
            $config['next_tag_open'] = '<p class="btn">';
            $config['next_tag_close'] = '</p>';
            $config['prev_link'] = 'PREVIOUS';
            $config['prev_tag_open'] = '<p class="btn">';
            $config['prev_tag_close'] = '</p>';
            $config['cur_tag_open'] = '<p class="btn"><b>';
            $config['cur_tag_close'] = '</b></p>';
            $config['num_tag_open'] = '<p class="btn">';
            $config['num_tag_close'] = '</p>';
            
            $this->pagination->initialize($config);
            $data['PAGINATION'] = $this->pagination->create_links();
            
            $data['main_content']='admin/search_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
            
	}
        
        public function search_form()
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $query_array = array(
                'search'=>$this->input->post('search'),
                'category'=>$this->input->post('category')
            );
            $this->load->library('MY_Input');
            $query = $this->my_input->save_query($query_array);
            
            $array = array();
            foreach($query as $q)
                foreach($q as $title=>$value) $array[$title] = $value; 
            
            $query_id=$array['ID'];
            redirect("search/search_results/$query_id");
            }
            else redirect ('login');
        }
        
        public function eligible_applicant($sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('MY_Input');
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            
            $TABLE_NAME = 'ELIGIBILITY';
            $SEARCH = 'yes';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['APPLICANT_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("search/eligible_applicant/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_RESULT']+1;
            $config['per_page'] = $limit;
            $config['uri_segment'] = 5;
            $config['num_links'] = 2;
            $config['first_link'] = 'FIRST';
            $config['first_tag_open'] = '<p class="btn">';
            $config['first_tag_close'] = '</p>';
            $config['last_link'] = 'LAST';
            $config['last_tag_open'] = '<p class="btn">';
            $config['last_tag_close'] = '</p>';
            $config['next_link'] = 'NEXT';
            $config['next_tag_open'] = '<p class="btn">';
            $config['next_tag_close'] = '</p>';
            $config['prev_link'] = 'PREVIOUS';
            $config['prev_tag_open'] = '<p class="btn">';
            $config['prev_tag_close'] = '</p>';
            $config['cur_tag_open'] = '<p class="btn"><b>';
            $config['cur_tag_close'] = '</b></p>';
            $config['num_tag_open'] = '<p class="btn">';
            $config['num_tag_close'] = '</p>';
            
            $this->pagination->initialize($config);
            $data['PAGINATION'] = $this->pagination->create_links();
            
            $data['main_content']='admin/eligible_student_for_admission_test_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
            
	}
        
        public function ineligible_applicant($sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('MY_Input');
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            
            $TABLE_NAME = 'ELIGIBILITY';
            $SEARCH = 'no';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['APPLICANT_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("search/eligible_applicant/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_RESULT']+1;
            $config['per_page'] = $limit;
            $config['uri_segment'] = 5;
            $config['num_links'] = 2;
            $config['first_link'] = 'FIRST';
            $config['first_tag_open'] = '<p class="btn">';
            $config['first_tag_close'] = '</p>';
            $config['last_link'] = 'LAST';
            $config['last_tag_open'] = '<p class="btn">';
            $config['last_tag_close'] = '</p>';
            $config['next_link'] = 'NEXT';
            $config['next_tag_open'] = '<p class="btn">';
            $config['next_tag_close'] = '</p>';
            $config['prev_link'] = 'PREVIOUS';
            $config['prev_tag_open'] = '<p class="btn">';
            $config['prev_tag_close'] = '</p>';
            $config['cur_tag_open'] = '<p class="btn"><b>';
            $config['cur_tag_close'] = '</b></p>';
            $config['num_tag_open'] = '<p class="btn">';
            $config['num_tag_close'] = '</p>';
            
            $this->pagination->initialize($config);
            $data['PAGINATION'] = $this->pagination->create_links();
            
            $data['main_content']='admin/ineligible_student_for_admission_test_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
            
	}
        
         public function pending_results($query_id = 0, $sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
	{
              $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('MY_Input');
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            $this->my_input->load_pending_query($query_id);
            
            $query_array = array(
                'pendingcategory'=>$this->input->get('pendingcategory')
            );
            $data['QUERY_ID'] = $query_id;
            
            if($this->input->get('pendingcategory')) $TABLE_NAME = $this->input->get('pendingcategory');
            else $TABLE_NAME = 'STUDENT_PERSONAL_INFO';
            $SEARCH = 'PENDING';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['APPLICANT_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("search/pending_results/$query_id/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_RESULT']+1;
            $config['per_page'] = $limit;
            $config['uri_segment'] = 6;
            $config['num_links'] = 2;
            $config['first_link'] = 'FIRST';
            $config['first_tag_open'] = '<p class="btn">';
            $config['first_tag_close'] = '</p>';
            $config['last_link'] = 'LAST';
            $config['last_tag_open'] = '<p class="btn">';
            $config['last_tag_close'] = '</p>';
            $config['next_link'] = 'NEXT';
            $config['next_tag_open'] = '<p class="btn">';
            $config['next_tag_close'] = '</p>';
            $config['prev_link'] = 'PREVIOUS';
            $config['prev_tag_open'] = '<p class="btn">';
            $config['prev_tag_close'] = '</p>';
            $config['cur_tag_open'] = '<p class="btn"><b>';
            $config['cur_tag_close'] = '</b></p>';
            $config['num_tag_open'] = '<p class="btn">';
            $config['num_tag_close'] = '</p>';
            
            $this->pagination->initialize($config);
            $data['PAGINATION'] = $this->pagination->create_links();
            
            $data['main_content']='admin/pending_info_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
             }
            else redirect ('login');
            
	}
        
        public function pending_form()
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $query_array = array(
                'pendingcategory'=>$this->input->post('pendingcategory')
            );
            $this->load->library('MY_Input');
            $query = $this->my_input->save_pending_query($query_array);
            
            $array = array();
            foreach($query as $q)
                foreach($q as $title=>$value) $array[$title] = $value; 
            
            $query_id=$array['ID'];
            redirect("search/pending_results/$query_id");
            //echo print_r($array);
             }
            else redirect ('login');
        }
        
        
        
        
}