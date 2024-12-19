<?php  
class paitentmodel extends CI_Model
{
    public function insert()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $hobby=implode($this->input->post('hobby[]'));
        $department=$this->input->post('department');
        $gender=$this->input->post('gender');

        $ins=array
        (
            "p_name"=>$name,
            "p_email"=>$email,
            "p_password"=>$password,
            "p_hobby"=>$hobby,
            "p_gender"=>$gender,
            "p_department"=>$department
        );

        $this->db->insert("paitent",$ins);
        echo "1 Row inserted..";
    }

    public function datadisplay()
    {
       return $this->db->get('paitent')->result();    
    }

    public function delete($id)
    {
        $this->db->where('p_id',$id);
        $this->db->delete('paitent');
        echo "deleted";
    }

    public function edit($id)
    {
        $this->db->where('p_id',$id);
        return $this->db->get('paitent')->row();
    }

    public function updatepaitent()
    {
        $id=$this->input->post('id');
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $hobby=implode($this->input->post('hobby[]'));
        $department=$this->input->post('department');
        $gender=$this->input->post('gender');

        $update=array
        (
            "p_id"=>$id,
            "p_name"=>$name,
            "p_email"=>$email,
            "p_password"=>$password,
            "p_hobby"=>$hobby,
            "p_gender"=>$gender,
            "p_department"=>$department
        );

        $this->db->where('p_id',$id);
        $this->db->update("paitent",$update);
        echo "1 Row updated..";
    }
}
?>