<?php 
    class signup_model extends CI_Model
    {
        public function insert_user()
        {
           $username=$this->input->post('username');
           $useremail=$this->input->post('email');
           $password=$this->input->post('password');
           $usermobile=$this->input->post('number');
           
           $insert=array
           (
                'username'=>$username,
                'useremail'=>$useremail,
                'userpassword'=>$password,
                'usermobile'=>$useremail
           );
           $this->db->insert('user',$insert);
        } 
    }
?>