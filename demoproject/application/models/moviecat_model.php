<?php  
class moviecat_model extends CI_Model
{
    public function getdata()
    {
        $this->db->from('moviecategory');
        $this->db->join('movieindustry','movieindustry.industry_id=moviecategory.industry_id');
        return $this->db->get()->result();

    }

    public function status($id)
    {
        $this->db->where('category_id',$id);
        $data=$this->db->get('moviecategory')->row();
       
        if($data->category_status=="blocked")
        {
            $up=array( 
                "category_status"=>"unblocked"
            );
        }
        else
        {
            $up=array(
                "category_status"=>"blocked"
            );
        }

        $this->db->where('category_id',$id);
        $this->db->update('moviecategory',$up);
    }

    public function insert()
    {
        $name=$this->input->post('industry');
        $catname=$this->input->post('catname');

        $ins=array(
            "industry_id"=>$name,
            "category_name"=>$catname

        );

        $this->db->insert('moviecategory',$ins);
       }

       public function delete($id)
       {
        $this->db->where('category_id',$id);
        $this->db->delete('moviecategory');
       }

       public function edit($id)
       {
           $this->db->where('category_id',$id);
          return $this->db->get('moviecategory')->row();
      }
       
      public function update($id)
    {
        $name=$this->input->post('industry');
        $catname=$this->input->post('catname');

        $up=array(
            "industry_id"=>$name,
            "category_name"=>$catname

        );
        $this->db->where('category_id',$id);
        $this->db->update('moviecategory',$up);
       }

}
?>