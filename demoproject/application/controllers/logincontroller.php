<?php  
    class logincontroller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function index()
        {
            if($this->session->userdata('adminname')=="")
            {
            $file['err']="";
            $this->load->view("login1",$file);
            }
            else
            {
                redirect('logincontroller/dashboard');
            }
        }
        public function dashboard()
        {
            if($this->session->userdata('adminname')=="")
            {
                redirect('logincontroller');
            }
            else
            {
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("templete/content");
            }    
        }

        public function chklogin()
        {
            $email=$this->input->post('txtemail');
            $password=$this->input->post('txtpassword');

            $this->db->where('admin_email',$email);
            $this->db->where('admin_password',$password);
            $data=$this->db->get('admin')->result();
            
            $this->db->where('admin_email',$email);
            $this->db->where('admin_password',$password);
            $data2=$this->db->get('admin')->row();
          
            if(count($data)>0)
            {
                $this->session->set_userdata('adminname',$data2->admin_name);
                $this->session->set_userdata('adminemail',$data);
                redirect('logincontroller/dashboard');
            }
            else
            {
                $file['err']="Invalid Email Or Password";
                $this->load->view("login1",$file);
            }
        }
        public function logout()
        {
            $this->session->unset_userdata('adminname');
            redirect('logincontroller');      
        }

        
        public function forgot_pass()
        {
            $email=$this->input->post('txtemail');
            $this->db->where('admin_email',$email);
            $data=$this->db->get('admin')->result();
            if(count($data) > 0)
            {
                $this->session->set_userdata('sessname',$email);
                $file['err']="";
                $this->load->view("forgotpassword",$file); 

            }
            else
            {
                $file['err']="Invalid EMail";
                $this->load->view("checkfield",$file);
            }
            
         }
        public function showemailchk()
        {
            $file['err']="";
            $this->load->view("checkfield",$file);
        } 
        public function change_pass()
        {    
            $password=$this->input->post('txtpassword');
            $up=array
            (
                'admin_password'=>$password
            );
            $this->db->where('admin_email',$this->session->userdata('sessname'));
            $this->db->update('admin',$up);
            redirect('logincontroller');   
        }
        }   
?>