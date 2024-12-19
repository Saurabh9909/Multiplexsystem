<?php  
    class emplmodel  extends CI_Model
    {
        public function insertempl()
        {
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $pwd=$this->input->post("pwd");

            $ins=array
            (
                "empl_name"=>$name,
                "empl_email"=>$email,
                "empl_pwd"=>$pwd
            );
            $this->db->insert('empl',$ins);
            echo "1 row inserted..";
        }

        public function datadisplay()
        {
            return $this->db->get('empl')->result();
        }

        public function delempl($id)
        {
            $this->db->where('empl_id',$id);
            $this->db->delete('empl');
            echo "1 Row Deleted...";
        }
        public function edit($id)
        {
            $this->db->where('empl_id',$id);
            return $this->db->get('empl')->row();
        }

        public function update()
        {
            $id=$this->input->post("id");
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $pwd=$this->input->post("pwd");

            $update=array
            (
                "empl_name"=>$name,
                "empl_email"=>$email,
                "empl_pwd"=>$pwd
            );
            $this->db->where('empl_id',$id);
            $this->db->update('empl',$update);
        }

        public function selectrecord()
        {
            $this->db->get('empl')->result();
        }

        public function searchrecord()
        {
            $search=$this->input->post('search');
            $this->db->where('empl_id',$search);
            return $this->db->get('empl')->result();
        }

        public function empllogin()
        {
            $email=$this->input->post('txtemail');
            $pwd=$this->input->post('txtpwd');

            $this->db->where('empl_email',$email);
            $this->db->where('empl_pwd',$pwd);
            $db=$this->db->get('empl')->result();   
            
            return count($db);
        }
    }
?>