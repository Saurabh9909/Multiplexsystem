<?php 
    class matchticketbookmodel extends CI_Model
    {
        public function getstadium()
        {
            $this->db->from('sportsstadium');
            $this->db->join('area','area.area_id=sportsstadium.area_id');
            $this->db->join('state','state.state_id=sportsstadium.state_id');
            $this->db->join('city','city.city_id=sportsstadium.city_id');
            return $this->db->get()->result();
        }
        public function  showmatch($id)
        {
            $this->db->from('sportsmatches');
            $this->db->join('sportssubcategory','sportssubcategory.subcategory_id =sportsmatches.subcategory_id ');
            $this->db->join('sportsstadium','sportsstadium.stadium_id =sportsmatches.stadium_id ');
            $this->db->join('sportscategory','sportscategory.category_id =sportsmatches.category_id ');

            $this->db->where('match_id',$id);
            return $this->db->get()->row();
        }
        public function book($ticketno)
        {
            $book = array
            (
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "number" => $this->input->post('number'),
                "ticketqty" => $this->input->post('tctqty'),
                "ticketprice" => $this->input->post('ticketprice'),
                "total" => $this->input->post('total'),
                "ticketno" => $ticketno
            );
            return $book;
        }
    }
?>