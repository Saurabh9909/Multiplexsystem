<?php  
class moviereview_model extends CI_Model
{
    public function getdata()
    {
       $this->db->from('moviereview');
       $this->db->join('user','user.user_id=moviereview.user_id');
       $this->db->join('movie','movie.movie_id=moviereview.movie_id');
        return $this->db->get()->result();

    }

    public function insert()
    {
        $user=$this->input->post('user');
        $movie=$this->input->post('movie');
        $detail=$this->input->post('detail');

        $ins=array(

            "user_id"=>$user,
            "movie_id"=>$movie,
            "review_detail"=>$detail
        );
        $this->db->insert('moviereview',$ins);
    }
    public function delete($id)
    {
        $this->db->where('review_id',$id);
        $this->db->delete('moviereview');
    }    
}
?>