<?php 
class fbbooking_model extends CI_Model
{
    public function getdata()
    {
        return $this->db->get('foodbeveragebooking')->result();
    }
    public function update_status($eccid)
    {
        $this->db->where('foodbeverage_id',$eccid);  
        $data= $this->db->get('foodbeveragebooking')->row();
        if($data->foodbeverage_status == "unblocked" )
    {
        $update=array
        (
            'foodbeverage_status'=>'blocked'
        );
    }
    else
    {
        $update=array
        (
            'foodbeverage_status'=> 'unblocked'
        );
    }
        $this->db->where('foodbeverage_id',$eccid);
        $this->db->update('foodbeveragebooking',$update);
    }
    public function insert_fb()
    {
        $foodbeverage_name=$this->input->post('foodbeverage_name');
        $foodbeverage_price=$this->input->post('foodbeverage_price');
        $foodbeverage_image=$_FILES['foodbeverage_image']['name'];

        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );
            $this->load->library('upload', $config);
            if($this->upload->do_upload('foodbeverage_image'))
            {
                    $data = array('upload_data' => $this->upload->data());
                    $ins=array
                    (
                        'foodbeverage_name'=>$foodbeverage_name,
                        'foodbeverage_price'=>$foodbeverage_price,
                        'foodbeverage_image'=>$foodbeverage_image
                    );
                    echo "<pre>";
                    $this->db->insert('foodbeveragebooking',$ins);
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                print_r( $error);
            }

    }

    public function edit_fb($fbid)
    {
        $this->db->where('foodbeverage_id',$fbid);
        return $this->db->get('foodbeveragebooking')->row();
    }
    public function update_fb($fbid)
    {
        $foodbeverage_name=$this->input->post('foodbeverage_name');
        $foodbeverage_price=$this->input->post('foodbeverage_price');
        $foodbeverage_image=$_FILES['foodbeverage_image']['name'];
       
        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encryption_key' => true
        );

        $this->load->library('upload',$config);
        if($this->upload->do_upload('foodbeverage_image'))
        {
            $data = array('upload_data' => $this->upload->data());
            $update=array
            (
                'foodbeverage_name' =>$foodbeverage_name,
                'foodbeverage_price'=>$foodbeverage_price,
                'foodbeverage_image'=>$foodbeverage_image
            );
            $this->db->where('foodbeverage_id',$fbid);
            $this->db->update('foodbeveragebooking',$update);
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            print_r( $error);
        }
       
    }
    public function delete_fb($fbid)
    {
        $this->db->where('foodbeverage_id',$fbid);
        return $this->db->delete('foodbeveragebooking');
    }

}
?>