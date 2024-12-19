 <?php  
class movieindustry_model extends CI_Model
{
    public function getdata()
    {
        return $this->db->get('movieindustry')->result();
    }

    public function status($id)
    {
        $this->db->where('industry_id',$id);
        $data=$this->db->get('movieindustry')->row();
       
        if($data->industry_status=="blocked")
        {
            $up=array(
                "industry_status"=>"unblocked"
            );
        }
        else
        {
            $up=array(
                "industry_status"=>"blocked"
            );
        }

        $this->db->where('industry_id',$id);
        $this->db->update('movieindustry',$up);
    }

    public function insert()
    {
        $name=$this->input->post('name');

        $ins=array(
            "industry_name"=>$name
        );
        $this->db->insert('movieindustry',$ins);
     }

     public function delete($id)
     {
        $this->db->where('industry_id',$id);
        $this->db->delete('movieindustry');

     }
     public function edit($id)
     {
         $this->db->where('industry_id',$id);
         return $this->db->get('movieindustry')->row();
     }
     public function update($id)
    {
        $name=$this->input->post('name');

        $up=array(
            "industry_name"=>$name
        );
        $this->db->where('industry_id',$id);
        $this->db->update('movieindustry',$up);
     }
}
?>