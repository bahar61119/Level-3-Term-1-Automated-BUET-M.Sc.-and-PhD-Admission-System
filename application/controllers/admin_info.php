<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_info extends CI_Controller {
        
    
	public function index()
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
             $data['main_content']='admin/admin_info_list_view';
             $this->load->view('includes/template',$data);
             }
            else redirect ('login');
	}
        
        public function admin_list($sort_by = 'ID', $sort_order = 'ASC', $offset = 0)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            
            $TABLE_NAME = 'MEMBERS';
            $SEARCH = '';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['MEMBER_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['MEMBERS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("admin_info/admin_list/$sort_by/$sort_order");
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
            
            $data['main_content']='admin/admin_individual_list_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
        }
        
        public function admin_pending_list($sort_by = 'ID', $sort_order = 'ASC', $offset = 0)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $limit = 7;
            $this->load->library('table_library');
            
            $TABLES_TITLE= $this->table_library->TABLES_TITLE;
            
            $data['TABLES_TITLE']=$TABLES_TITLE;
            
            
            $TABLE_NAME = 'MEMBERS';
            $SEARCH = 'PENDING';
            $TITLE = $TABLE_NAME . "_TITLE";
            
            $data['TABLE_NAME'] =$this->table_library->TABLES[$TABLE_NAME];
            $data['TABLE_TITLE'] =$this->table_library->TABLES_TITLE[$TABLE_NAME];
            $data['MEMBER_TITLE'] =$this->table_library->$TITLE;
            $data['SORT_BY'] = $sort_by;
            $data['SORT_ORDER'] = $sort_order;
            $this->load->model('applicant_model');
            $results = $this->applicant_model->search_table($SEARCH, $TABLE_NAME,$this->table_library->$TABLE_NAME, $limit, $sort_by, $sort_order, $offset);
            
            $data['MEMBERS'] = $results['APPLICANTS'];
            $data['TOTAL_RESULT'] = $results['TOTAL_RESULT'];
            
            //pagination
            $this->load->library('pagination');
            $config = array();
            $config['base_url'] = site_url("admin_info/admin_list/$sort_by/$sort_order");
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
            
            $data['main_content']='admin/admin_pending_individual_list_view';
            $this->load->view('includes/template',$data);
            
            //echo print_r($data['APPLICANTS']);
            }
            else redirect ('login');
        }
        
        
        public function admin_individual_info($MEMBER_ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            if($MEMBER_ID == NULL) redirect ('admin_info/admin_list');
            
            //MEMBERS
            $MEMBERS = $this->applicant_info_model->member_table($this->table_library->TABLES['MEMBERS'],$MEMBER_ID);
            if($MEMBERS)
            {
                $data['MEMBER_ID'] = $MEMBER_ID;
                $data[$this->table_library->TABLES['MEMBERS']] = $MEMBERS;
            }
            else  redirect ('admin_info/admin_list');
            
            $data['main_content']='admin/admin_individual_info_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
        }
}