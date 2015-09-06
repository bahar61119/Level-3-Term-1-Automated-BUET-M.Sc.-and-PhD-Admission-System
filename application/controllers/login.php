<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
        
    
	public function index()
	{
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            //$data['main_content']='members_area_view';
            $data['main_content']='login_form';
            $this->load->view('includes/template',$data);
            }
            else redirect ('admin');
	}
        function check_validate()
	{
           $this->load->model('membership_model');
           
           $this->form_validation->set_rules('username','Username','trim|required');
           $this->form_validation->set_rules('password','Password','trim|required');
           if($this->form_validation->run()==FALSE){
               $this->index();
           }
           else{
               

           $query= $this->membership_model->validate();
           
           $user_data = array();
           
           foreach($query as $q)
           {
               foreach($q as $title => $value)
               {
                   $user_data[$title]= $value;
               }
           }
           if($query){
                 $data=array(
                     'username'=>$this->input->post('username'),
                     'is_logged_in'=>true
                 );
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('is_logged_in');
                $this->session->set_userdata('username',$this->input->post('username'));
                $this->session->set_userdata('is_logged_in',true);
                $this->session->set_userdata('id',$user_data['ID']);
               
               $name = $this->input->post('username');
               $this->session->set_flashdata('logged', $data);
               $this->session->set_flashdata('item', $name);
               
               redirect('admin');
               
           
           }
           else{
                
               $this->index();
           }
        }
           
	}
        
        public function alpha_with_space_check($str)
	{
                $len = strlen($str);
                if (preg_match("/[[:space:]]/", $str) || preg_match("/[[:alpha:]]/", $str) ){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('alpha_with_space_check', 'The %s should contain only alpha and space character.');
                    return FALSE;
                }
               
	}
        
        public function signup(){
            
             $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            delete_cookie("name");
            $data['main_content']='singup_form';
            $this->load->view('includes/template',$data);
            }
            else redirect ('admin');
        }
        
        public function create_member(){
            $this->form_validation->set_rules('firstname','First Name','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[30]');
            $this->form_validation->set_rules('lastname','Last Name','trim|required|callback_alpha_with_space_check|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('designation','Designation','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[30]');
            $this->form_validation->set_rules('address','Address','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[50]');
            $this->form_validation->set_rules('phone','Phone','trim|required|numeric|min_length[6]|max_length[15]');
            $this->form_validation->set_rules('emailaddress','Email Address','trim|required|valid_email');
            $this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[30]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
            $this->form_validation->set_rules('password1','Password Confirmation','trim|required|matches[password]');
            
            if($this->form_validation->run()==FALSE){
               $this->signup();
            }
            else{
                $this->load->model('membership_model');
                $query= $this->membership_model->insert_member();
                
                if($query){
                    $data['main_content']='signup_success';
                    $this->load->view('includes/template',$data);
                }
                else{
                    $this->signup();
                }
            }
        }
        
       
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
