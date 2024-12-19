<?php  

    class signin_controller extends CI_Controller
    {
        public function index()
        {
            $file['err']="";
            $this->load->view('sign-in',$file);
        }
        public function chklogin()
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');

            $this->db->where('useremail',$email);
            $this->db->where('userpassword',$password);
            $data=$this->db->get('user')->result();
            
            $this->db->where('useremail',$email);
            $this->db->where('userpassword',$password);
            $data2=$this->db->get('user')->row();
          
            if(count($data)>0)
            {
                $this->session->set_userdata('user_id',$data2->user_id);
                $this->session->set_userdata('username',$data2->username);
                $this->session->set_userdata('useremail',$data2->useremail);
                redirect('homecontroller');
            }
            else
            {
                $file['err']="Invalid Email Or Password";
                $this->load->view("sign-in",$file);
            }
        }
        public function logout()
        {
            $this->session->unset_userdata('username');
            redirect('signin_controller');      
        }
    } 
?>