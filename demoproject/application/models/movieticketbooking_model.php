<?php

    class movieticketbooking_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from('movieticketbooking');
            $this->db->join('movie','movie.movie_id=movieticketbooking.movie_id');
            $this->db->join('multiplex','multiplex.multiplex_id=movieticketbooking.multiplex_id');
            $this->db->join('movieticketplan','movieticketplan.movieticket_id=movieticketbooking.movieticket_id');
            $this->db->join('movieseatplan','movieseatplan.seatplan_id=movieticketbooking.seatplan_id');
            return $this->db->get()->result();
        }
        public function status($id)
        {
            $this->db->where('ticketbooking_id',$id);
            $data=$this->db->get('movieticketbooking')->row();
           
            if($data->ticketbooking_status=="blocked")
            {
                $up=array(
                    "ticketbooking_status"=>"unblocked"
                );
            }
            else
            {
                $up=array(
                    "ticketbooking_status"=>"blocked"
                );
            }
    
            $this->db->where('ticketbooking_id',$id);
            $this->db->update('movieticketbooking',$up);
        }

        public function insert()
        {
            $movie=$this->input->post('movie');
            $multiplex=$this->input->post('multiplex');
            $time=$this->input->post('time');
            $seatname =$this->input->post('seatname');
            $ticketbooking=$this->input->post('ticketbooking');
            $seat =$this->input->post('seat');
            $amount=$this->input->post('amount');
            $custmomer=$this->input->post('custmomer');
            $mobile =$this->input->post('mobile');
            $payment=$this->input->post('payment');
            $email=$this->input->post('email');

            $ins=array
            (
                "movie_id"=>$movie,
                "multiplex_id"=>$multiplex,
                "movieticket_id"=>$time,
                "seatplan_id"=>$seatname,
                "ticketbooking_number"=>$ticketbooking,
                "no_of_seats"=>$seat,
                "total_amount"=>$amount,
                "customername"=>$custmomer,
                "customermobile"=>$mobile,
                "paymentgateway"=>$payment,
                "customeremail"=>$email 
                
            );
            $this->db->insert('movieticketbooking',$ins);
     
        }
        public function delete($id)
        {
            $this->db->where('ticketbooking_id',$id);
            $this->db->delete('movieticketbooking');
        }
    }
?>