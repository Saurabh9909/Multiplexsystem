<?php 
class sportsmatch_controller  extends CI_Controller
{
    public function index()
    {
        $this->load->view('templete/header');
        $this->load->view('sports/addmatch');
        $this->load->view('templete/sidebar');
    }
    public function update($mid)
    {
        $this->db->where('match_id',$mid);
        $data=$this->db->get(' sportsmatches')->row();

        if($data->match_status=="unblocked")
        {
            $update=array
            (
                'match_status'=>"blocked"
            );
        }
        else
        {
            $update=array
            (
                'match_status'=>'unblocked'
            );
        }
        $this->db->where('match_id',$mid);
        $this->db->update(' sportsmatches',$update);
        redirect('sportsmatch_controller/showmatch');
    }
    public function showmatch()
    {
        $this->load->view('templete/header');
        $this->load->view('sports/showmatch');
        $this->load->view('templete/sidebar');
    }

    public function addmatch()
    {
        $category_id=$this->input->post('category_id');
        $subcategory_id=$this->input->post('subcategory_id');
        $team1_name=$this->input->post('team1_name');
        $team2_name=$this->input->post('team2_name');
        $match_date=$this->input->post('match_date');
        $match_title=$this->input->post('match_title');
        $stadium_id=$this->input->post('stadium_id');
        $match_details=$this->input->post('match_details');
        $match_time=$this->input->post('match_time');

        $match_img=$_FILES['match_img']['name'];
        $match_banner=$_FILES['match_banner']['name'];
        $config=array
        (
            'upload_path'=> "./images",
            'allowed_types'=>"*",
            'overwrite'=>TRUE,
            'max_size'=>"2048000",
            'max_height'=>"1000000",
            'max_width' => "1000000",
            'encryption_key' => true

        );

        $this->load->library('upload',$config);
        if($this->upload->do_upload('match_img') && $this->upload->do_upload('match_banner'))
        {
            $data=array
            (
                'upload_data'=>$this->upload->data()
            );

     
        $ins=array
        (
            'category_id'=>$category_id,
            'subcategory_id'=>$subcategory_id,
            'team1_name'=>$team1_name,
            'team2_name'=>$team2_name,
            'match_date'=>$match_date,
            'match_title'=>$match_title,
            'stadium_id'=>$stadium_id,
            'match_img'=>$match_img,
            'match_banner'=>$match_banner,
            'match_details'=>$match_details,
            'time'=>$match_time
        );
        $this->db->insert('sportsmatches',$ins);
        redirect('sportsmatch_controller');
    }
        else
        {

            $error=array('error'=>$this->upload->display_errors());
            print_r($error);
        }
    }
}
?>