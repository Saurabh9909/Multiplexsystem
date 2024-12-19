<?php
    class movieticketplan_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from('movieticketplan');
            $this->db->join('movie','movie.movie_id=movieticketplan.movie_id');
            $this->db->join('multiplex','multiplex.multiplex_id=movieticketplan.multiplex_id');
            return $this->db->get()->result();
        }
        public function status($id)
        {
            $this->db->where('movieticket_id',$id);
            $data=$this->db->get('movieticketplan')->row();
           
            if($data->movieticket_status=="blocked")
            {
                $up=array(
                    "movieticket_status"=>"unblocked"
                );
            }
            else
            {
                $up=array(
                    "movieticket_status"=>"blocked"
                );
            }
    
            $this->db->where('movieticket_id',$id);
            $this->db->update('movieticketplan',$up);
        }

        public function insert()
        {
            $movie=$this->input->post('movie');
            $multiplex=$this->input->post('multiplex');
            $time=$this->input->post('time');
            $date=$this->input->post('date');

            $ins=array
            (
                "movie_id"=>$movie,
                "multiplex_id"=>$multiplex,
                "movieticket_time"=>$time,
                "movieticket_date"=>$date
            );
            $this->db->insert('movieticketplan',$ins);
           
        }

        public function delete($id)
        {
            $this->db->where('movieticket_id',$id);
            $this->db->delete('movieticketplan');
        }
    }
?>