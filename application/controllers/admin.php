<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
        
    
	public function index()
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            //$data['name'] = $this->session->flashdata('item');
            //$this->session->unset_userdata('item');
            $data['main_content']='admin/members_area_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
            
	}
        
        public function admin_personal_info()
        {
            $logged = $this->session->userdata('is_logged_in');
            $this->load->library('table_library');
            
            if($logged){
                $USERNAME= $this->session->userdata('username');
                $this->load->model('membership_model');
                $result = $this->membership_model->member_info($USERNAME);
                if(!$result) redirect ('login');
                else
                {
                    $data['MEMBERS'] = $result;
                    $data['main_content']='admin/admin_personal_info_view';
                    $this->load->view('includes/template',$data);
                }
            }
            else redirect ('login');
            
        }
        
        public function applicant_list($sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 10;
            $this->load->library('table_library');
            
            $APPLICANT_TITLE = array();
            $APPLICANT_TITLE['APPLICANT_SERIAL'] = 'Applicant\'s Serial No';
            $APPLICANT_TITLE['APPLICANT_NAME' ] = 'Applicant\'s Name';
            $APPLICANT_TITLE['PROGRAM' ] = 'Program';
            $APPLICANT_TITLE['DEPT_INST' ] = 'Department/Institute';
            $APPLICANT_TITLE['DESIRED_STATUS' ] = 'Desire Status';
            
            $data['APPLICANT_TITLE'] = $APPLICANT_TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->applicant_list($this->table_library->STUDENT_PERSONAL_INFO,$this->table_library->CURRENT_ADMISSION_INFO, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_APPLICANT'] = $results['TOTAL_APPLICANT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("admin/applicant_list/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_APPLICANT']+1;
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
            
            $data['main_content']='admin/applicant_list_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
        }
        public function category_list()
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
        
            $this->load->library('table_library');
            
            $data['TABLE_TITLE'] = $this->table_library->TABLES_TITLE;
            $data['main_content']='admin/category_list_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function category_individual($TABLE_NAME = NULL, $sort_by = 'APPLICANT_SERIAL', $sort_order = 'ASC', $offset = 0)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($TABLE_NAME == NULL) redirect ('admin/category_list');
            
            $limit = 7;
            $this->load->library('table_library');
            
            $bool=0;
            foreach ($this->table_library->TABLES as $key => $value) 
            {
                if($key==$TABLE_NAME)
                {
                    $bool = 1;
                    break;
                }
            }
            
            if($bool==0) redirect ('admin/category_list');
            
            $TITLE = $TABLE_NAME . "_TITLE";
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['APPLICANT_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->table_info($TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['APPLICANTS'] = $results['APPLICANTS'];
            $data['TOTAL_APPLICANT'] = $results['TOTAL_APPLICANT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("admin/category_individual/$TABLE_NAME/$sort_by/$sort_order");
            $config['total_rows'] = $results['TOTAL_APPLICANT']+1;
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
            
            $data['main_content']='admin/table_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
}