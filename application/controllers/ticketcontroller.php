<?php 
    class ticketcontroller extends CI_Controller
    {
        public function  __construct()
        {
            parent ::__construct();
            // $this->load->model('ticket_model');
            $this->load->model('movie_model');
        }
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('ticket/ticketplan');
            $this->load->view('template/footer');
        }
        public function movie_details($id)
        {
            $file['data']=$this->movie_model->movie_details($id);
            $this->load->view('template/header');
            $this->load->view('ticket/ticket',$file);
            $this->load->view('template/footer');
        }
        public function event_details($id)
        {
            $this->db->where('event_id',$id);
            $file['event']=$this->db->get('event')->row();
            $this->load->view('template/header');
            $this->load->view('event/event_book',$file);
            $this->load->view('template/footer');
        }
        public function event_chkout($id)
        {
            // $this->db->where('user_id', $this->session->userdata('user_id'));
            // $file['cart']=$this->db->get('fbaddtocart')->result();
            $this->db->where('event_id',$id);
            $file['event']=$this->db->get('event')->row();
            $this->load->view('template/header');
            $this->load->view('ticket/event_ticketchkout',$file);
            $this->load->view('template/footer');
        }
        public function event_ticket($eid)
        {
            
            $this->db->where('event_id',$eid);
            $event=$this->db->get('eventticket')->row();
            $file['event']=$this->db->get('event')->row();
            $this->load->view('template/header');
            $this->load->view('ticket/event_ticketchkout',$file);
            $this->load->view('template/footer');
            $qty=$this->input->post('qtybutton');
            // echo $evt->event_price;
            // echo $qty;
            $ins=array
            (
                'eventspeaker_id'=>$event->eventspeaker_id,
                'eventcategory_id'=>$event->eventcategory_id,
                'user_id'=>$event->user_id,
                'event_id'=>$event->event_id,
                'eventticket_type'=>$event->eventticket_type,    
                'totalamount'=>$qty*$event->event_price,
                'cuntomer_name'=>$event->cuntomer_name,
                'customer_email'=>$event->customer_email,
                'customer_mob'=>$event->customer_mob
            );
            $this->db->where('event_id',$eid);
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $this->db->update('eventticket',$ins);
            redirect('homecontroller');

        }
    }
?>