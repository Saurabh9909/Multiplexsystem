<?php 
    class eventcontroller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('eventmodel');
        }
        public function index()
        { 
            $file['data']=$this->eventmodel->getdata();
            $this->load->view('templete/header');
            $this->load->view('templete/sidebar');
            $this->load->view('event/showevent',$file);
        }
        public function update($ecid)
        {
            $file['data']=$this->eventmodel->update_status($ecid);
            redirect('eventcontroller');  
        }
        public function add()
        {
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/addevent"); 
        }
        public function eventform()
        {
            $file['eventcat']=$this->eventmodel->get_eventcat();
            $file['eventspeaker']=$this->eventmodel->get_eventspeaker();
            $file['state']=$this->eventmodel->getstate();
            $file['city']=$this->eventmodel->getcity();
            $file['area']=$this->eventmodel->getarea();
            $this->load->view('templete/header');
            $this->load->view('templete/sidebar');
            $this->load->view('event/addevent',$file);
        }
  
        public function getcity($id)
        {
            $this->eventmodel->getcity_op($id);
        }

        public function getarea($id)
        {
            $this->eventmodel->getarea_op($id);
        }
        public function insert_event()
        {
           $data= $this->eventmodel->insert_event();
           redirect('eventcontroller');
           
        }
        public function event_form()
        {
            $file['data']=$this->eventmodel->getdata();
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/update_event",$file);    
        }
        public function edit_event($eid)
        {
            $file['eventcatagory']=$this->eventmodel->get_eventcat($eid);
            $file['eventspeaker']=$this->eventmodel->get_eventspeaker($eid);
            $file['state']=$this->eventmodel->getstate($eid);
            $file['city']=$this->eventmodel->getcity($eid);
            $file['area']=$this->eventmodel->getarea($eid);
            $file['edit']=$this->eventmodel->edit_event($eid);
            $this->load->view("templete/header");
            $this->load->view("templete/sidebar");
            $this->load->view("event/update_event",$file); 
        }
        public function update_event($eid)
        {
            $this->eventmodel->update_event($eid);
            redirect('eventcontroller');
        }
        public function delete_event($eid)
        {
            $this->eventmodel->delete_event($eid);
            redirect('logincontroller');
        } 
    }

?>