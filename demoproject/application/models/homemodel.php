<?php  
    class homemodel extends CI_Model
    {
        public function insertstudent()
        {
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $pwd=$this->input->post("pwd");

            $ins=array
            (
                "std_name"=>$name,
                "std_email"=>$email,
                "std_pwd"=>$pwd
            );
            $this->db->insert("student1",$ins);
            echo "1 Row inserted..";
        }

        public function  datadisplay()
        {
            return $this->db->get('student1')->result();
        }

        public function delstudent($id)
        {
            $this->db->where('std_id',$id);
            $this->db->delete('student1');
            echo "1 Row deleted....";
        }

        public function edit($id)
        {
            $this->db->where('std_id',$id);
            return $this->db->get('student1')->row();
        }

        public function update()
        {
            $id=$this->input->post("id");
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $pwd=$this->input->post("pwd");

            $update=array
            (
                "std_name"=>$name,
                "std_email"=>$email,
                "std_pwd"=>$pwd
            );
            $this->db->where('std_id',$id);
            $this->db->update("student1",$update);
        }
    }
?>