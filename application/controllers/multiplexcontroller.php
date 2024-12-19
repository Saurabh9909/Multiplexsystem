<?php
 class multiplexcontroller extends CI_Controller
 {
	 public function __construct()
	 {
		parent ::__construct();
		$this->load->model('multiplexmodel'); 
	 }
 	public function showmultiplex($id,$movieid)
 	{
			$file['multiplex']=$this->multiplexmodel->getmultiplex($id);
			$file['movie']=$this->multiplexmodel->getmovie($movieid);
			
			$this->db->where('movie_id',$id);
			$query['movie']=$this->db->get('movie')->row();
			$file['movie']=$this->session->set_userdata('movie_name',$query->movie_name);
			$file['movie']=$this->session->set_userdata('movie_id',$query->movie_id);
			$this->session->set_userdata('screen',$query->screen);
			$this->load->view('template/header');
			$this->load->view('seatplan/moviecheckout',$file);
			$this->load->view('template/footer');
 	}
	public function showseats($movieid,$multiplexid)
	{
			$ocseat="";
			$selecteddate=$this->session->userdata('selecteddate');
			$selectedtime=$this->session->userdata('selectedtime'); 
			$selectedmovie=$this->session->userdata('selectedmovie'); 
		
			$this->db->where('movie_id',$movieid);
			$this->db->where('multiplex_id',$multiplexid);
			$this->db->where('movieticket_date',$selecteddate);
			$this->db->where('movieticket_time',$selectedtime);
			$movieticket=$this->db->get('movieticketplan')->result();
			
			foreach($movieticket as $movieticketrow)
			{
					$this->db->where('movieticket_id',$movieticketrow->movieticket_id);
					$this->db->where('movie_id',$movieticketrow->movie_id);
					$seat=$this->db->get('movieseatplan')->row();
					$ocseat.=$seat->seat_name.",";
					
					echo "<br>";
			}
					$file['occupiedseat']=$ocseat;
					$this->session->set_userdata('occupiedseat',$ocseat);	

			$this->load->view('template/header');
			$this->load->view('seatplan/seatplan',$file);
			$this->load->view('template/footer');
 			
 	}
	
	public function getmultiplexdata($movie,$multiplex,$date,$time)
	{
		$this->multiplexmodel->getmultiplexdata($movie,$multiplex,$date,$time);
	}	

 	public function addbookticket($seat,$price)
 	{
 		$this->multiplexmodel->addbookticket($seat,$price);
 	}
	 public function cancelticket()
 	{
 		$this->multiplexmodel->cancelticket();
 	}
	public function moviecheckout($id)
	{
			$this->session->set_userdata('movie_id',$id);
			$file['city']=$this->db->get('city')->result();
			$this->load->model('movie_model');
            $file['movie']=$this->movie_model->movie_details($id);
            $file['sports']=$this->db->get('sports')->result();
            $file['event']=$this->db->get('event')->result();
            $file['multiplex']=$this->db->get('multiplex')->result();
            $file['eventcategory']=$this->db->get('eventcategory')->result();
            $file['movieindustry']=$this->db->get('movieindustry')->result();
            $file['moviecategory']=$this->db->get('moviecategory')->result();
            
			$this->load->view('template/header');
			$this->load->view('seatplan/moviecheckout',$file);
			$this->load->view('template/footer');	
	}
	public function bookingsummary($seat , $price , $ticketno)
	{
		$file['seat'] = $seat;
		$file['price'] = $price;
		$file['ticketno'] = $ticketno;
		$this->load->view('template/header');
		$file['invoice']=$this->multiplexmodel->viewinvoice();
		$this->load->view('seatplan/bookingsummary',$file);
		$this->load->view('template/footer');	
	}
	public function addbooking($seat ,$price)
	{
		$ticketno = $this->input->post('tktnum');
		$this->multiplexmodel->addbooking($seat ,$price);
		redirect('multiplexcontroller/bookingsummary/'.$seat.'/'.$price.'/'.$ticketno);
	}
	public function printticket()
	{
		$this->load->view('template/header');
		$file['invoice']=$this->multiplexmodel->viewinvoice();
		$this->load->view('seatplan/printticketpage',$file);
		$this->load->view('template/footer');
	}
	public function displayfood($ticketno)
	{
		$file['food']=$this->multiplexmodel->getfood($ticketno);
		
		$file['ticketno'] = $ticketno;
		
		$this->load->view('template/header');
		$this->load->view('food&beverages/fb_detail',$file);
		$this->load->view('template/footer');
	}
	public function chkticket($tno)
	{
		
	//	echo $tno;
		$this->db->where('ticketbooking_number',$tno);
		$result=$this->db->get('movieticketbooking')->result();
		echo count($result);
		if( count($result) > 0)
		{
		$this->db->where('ticketbooking_number',$tno);
		$ticketrow=$this->db->get('movieticketbooking')->row();
		$this->session->set_userdata('ticketno',$ticketrow->ticketbooking_number);
		}
	}

	public function addtocart($foodid,$qty)
	{
		$this->db->where('foodbeverage_id',$foodid);
		$fb=$this->db->get('foodbeveragebooking')->row();
		
		$this->db->where('foodbeverage_id',$foodid);
		$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));		
		$checkfood=$this->db->get('fbaddtocart')->result();
		
		if(count($checkfood)>0)
		{
			$update=array
					(
						"foodbeverage_id"=>$foodid,
						"ticketbooking_number"=>$this->session->userdata('ticketno'),
						"quantity"=>$qty,
						"totalamount"=>$fb->foodbeverage_price*$qty
					);	
			$this->db->where('foodbeverage_id',$foodid);
			$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));		
			$this->db->update('fbaddtocart',$update);
			
		}
		else
		{
			$add=array
					(
						"foodbeverage_id"=>$foodid,
						"ticketbooking_number"=>$this->session->userdata('ticketno'),
						"quantity"=>$qty,
						"totalamount"=>$fb->foodbeverage_price*$qty
					);	
			$this->db->insert('fbaddtocart',$add);
		}

		

		$this->db->from('fbaddtocart');
		$this->db->join('foodbeveragebooking','foodbeveragebooking.foodbeverage_id=fbaddtocart.foodbeverage_id');
		$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));
		$addtocart=$this->db->get()->result();		
		$total=0;

		foreach($addtocart as $row)
		{
										
	?>
    	<li>
                        <span class="info"><span><?php echo $row->foodbeverage_name ?></span>
                        <span><?php echo $row->quantity ?></span>
                        <span>&#8377; <?php echo $row->totalamount ?></span></span>
       </li>
    <?php
			$total=$total+$row->totalamount;
		}
		echo "~";
		echo "&#8377; ".$total;	 
	}
	
	public function checkoutfood()
	{
		
		$this->session->userdata('userid');
		if($this->session->userdata('userid')=="")
		{
			echo "0";
		}
		else
		{
			//$bookno." ".$this->session->userdata('userid');
			$this->db->where('ticketbooking_number',$this->session->userdata('ticketno'));
			$data=$this->db->get('fbaddtocart')->result();
			foreach($data as $row)
			{
				$ins=array
						(		
							"foodbeverage_id"=>$row->foodbeverage_id,
							"user_id"=>$this->session->userdata('userid'),
							"atc_id"=>$row->atc_id,	
							"ticketbooking_number"=>$this->session->userdata('ticketno')
						);
				$this->db->insert('fbbookingchkout',$ins);
			}
		}
	}
	
	public function deleteatc($atcid)
	{
		$this->multiplexmodel->deleteatc($atcid);
		redirect('multiplexcontroller/displayfood');	
	}
	public function foodchkout()
	{
		$this->load->view('template/header');
		$file['boughtfood']=$this->multiplexmodel->boughtfood();
		$file['invoice']=$this->multiplexmodel->viewinvoice();
		$this->load->view('food/printfood',$file);
		$this->load->view('template/footer');
	}
 }

?>