<?php
	class multiplexmodel extends CI_Model
	{
		public function getmultiplex($id)
		{
			$this->db->where('movie_id',$id);
			$data=$this->db->get('movie')->row();
			
			$this->db->where('multiplex_id',$data->multiplex_id);
			return $this->db->get('multiplex')->result();
		}
		public function getmovie()
		{			
					$this->db->where('movie_id',$this->uri->segment(3));
					return $this->db->get('movie')->row();
		}
		public function addbookticket($seat,$price)
		{
			
			$seatarr=explode(',',$seat);
			//print_r($seatarr);
			$this->session->set_userdata('seatnamearr',$seatarr);
			$this->session->set_userdata('seatarr',$seatarr);
			$this->session->set_userdata('addprice',$price);
			
			$cntseat=count($seatarr);
			$this->session->set_userdata('totalseat',$cntseat);
			for($i=0;$i<$cntseat;$i++)
			{
				$this->session->set_userdata('seat$cntseat[$i]',$cntseat[$i]);
				// echo $this->session->userdata('seat$cntseat[$i]');
			}	
		}
		public function cancelticket()
		{
			$this->session->unset_userdata('seatnamearr');
			$this->session->unset_userdata('seatarr');
			$this->session->unset_userdata('addprice');
			$this->session->unset_userdata('totalseat');
		}

		public function getmultiplexdata($movie,$multiplex,$date,$time)
		{
				$this->session->set_userdata('selectedmovie',$movie);
				$this->session->set_userdata('selectedmultiplex',$multiplex);
				$this->session->set_userdata('selecteddate',$date);
				$this->session->set_userdata('selectedtime',$time);
				$this->db->where('movie_id',$movie);
				$query=$this->db->get('movie')->row();
				
				$addprice=$this->session->userdata('addprice');
				
				echo $query->movie_name;
				echo $query->movie_price+$addprice;
				$this->session->set_userdata('moviename',$query->movie_name);
				$this->session->set_userdata('movieprice',$query->movie_price);
		
		}
		public function addbooking()
		{
			$cow="Cash On Window";
			$seatdt=explode(',',$this->input->post('seat_name'));

			$myString =$this->input->post('seat_name');
			$nprice=0;	
			
				if ( strstr( $myString, 'a' ) ) 
				{
					$cnt=substr_count( $myString, 'a' ); 
					$nprice=100*$cnt;
				}
			
		//	$this->session->set_userdata('newticketprice',$this->input->post('totalamt')+$nprice);			
				
				
			
			$insertplan=array(
							"movie_id "=>$this->session->userdata('movie_id'),
							"multiplex_id "=>$this->session->userdata('multiplex_id'),
							"movieticket_time"=>$this->input->post('tickettime'),
							"movieticket_date"=>$this->input->post('ticketdate')	
						);
			
			$this->db->insert('movieticketplan',$insertplan);
			
			$this->db->select_max('movieticket_id');
			$ticketplan=$this->db->get('movieticketplan')->row();
						
			$insertseatplan=array(
								"movieticket_id"=>$ticketplan->movieticket_id,
								"movie_id"=>$this->session->userdata('movie_id'),
								"seat_name"=>$this->input->post('seatname'),
								"seatplan_price"=>$this->input->post('totalprice')
								);
			
								// echo "<pre>";
								// print_r($insertseatplan);
								// die();
			$this->db->insert('movieseatplan',$insertseatplan);		
			$this->db->select_max('seatplan_id');
			$seatplan=$this->db->get('movieseatplan')->row();
				
			$insertbooking=array(			
							"movie_id"=>$this->session->userdata('movie_id'),
							"multiplex_id"=>$this->session->userdata('multiplex_id'),
							"movieticket_id"=>$ticketplan->movieticket_id,
							"seatplan_id"=>$seatplan->seatplan_id,
							"ticketbooking_number"=>$this->input->post('tktnum'),
							"no_of_seats"=> $this->session->userdata('totalseat') ,
							"totalamount"=>$this->input->post('totalprice'),
							"customername"=>$this->input->post('custname'),
							"customeremail"=>$this->input->post('custemail'),
							"customermobile"=>$this->input->post('custmob'),
							"paymentgateway"=>$cow,
							);

			$this->db->insert('movieticketbooking',$insertbooking);						
		}
		public function viewinvoice()
		{
			$this->db->order_by('ticketbooking_id','desc');
			$this->db->from('movieticketbooking');
			$this->db->join('movieseatplan','movieseatplan.seatplan_id=movieticketbooking.seatplan_id');
			$this->db->join('movieticketplan','movieticketbooking.movieticket_id=movieticketbooking.movieticket_id');
			return $this->db->get('')->row();	
		}
		public function getfood()
		{
			return $this->db->get('foodbeveragebooking')->result();	
		}
		public function deleteatc($atcid)
		{
			$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));
			$this->db->where('atc_id',$atcid);
			$this->db->delete('fbaddtocart');	
		}
		public function boughtfood()
		{
			$this->db->where('user_id',$this->session->userdata('userid'));
			$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));
			return $this->db->get('fbbookingchkout')->result();
			
		}
	}
?>