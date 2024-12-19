<?php
    class movieseatplan_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from('movieseatplan');
            $this->db->join('movieticketplan','movieticketplan.movieticket_id=movieseatplan.movieticket_id');
            $this->db->join('movie','movie.movie_id=movieseatplan.movie_id');
            return $this->db->get()->result();
        }

        public function status($id)
        {
            $this->db->where('seatplan_id',$id);
            $data=$this->db->get('movieseatplan')->row();
           
            if($data->seatplan_status=="blocked")
            {
                $up=array(
                    "seatplan_status"=>"unblocked"
                );
            }
            else
            {
                $up=array(
                    "seatplan_status"=>"blocked"
                );
            }
    
            $this->db->where('seatplan_id',$id);
            $this->db->update('movieseatplan',$up);
        }

        public function insert()
        {
            $time=$this->input->post('time');
            $movie=$this->input->post('movie');
            $seat=$this->input->post('seat');
            $seatprice=$this->input->post('seatprice');

            $ins=array(

                "movieticket_id"=>$time,
                "movie_id"=> $movie,
                "seat_name"=> $seat,
                "seatplan_price"=> $seatprice
            );
            $this->db->insert('movieseatplan',$ins);
            
        }

        public function delete($id)
        {
            $this->db->where('seatplan_id',$id);
            $this->db->delete('movieseatplan');
        }
    }
?>