<?php 
    class eventmodel extends CI_Model
    {
        public function getdata()
        {
            $this->db->from('event');
            $this->db->join('eventcategory','eventcategory.eventcategory_id=event.eventcategory_id');
            $this->db->join('eventspeaker','eventspeaker.eventspeaker_id=event.eventspeaker_id');
            $this->db->join('state','state.state_id=event.state_id');
            $this->db->join('city','city.city_id=event.city_id');
            $this->db->join('area','area.area_id=event.area_id');
            return $this->db->get()->result();
        }
        public function update_status($eccid)
        {
         $this->db->where('event_id',$eccid);  
         $data= $this->db->get('event')->row();
         if($data->event_status == "unblocked" )
         {
             $update=array
             (
                 'event_status'=>'blocked'
             );
         }
         else
         {
             $update=array
             (
                 'event_status'=> 'unblocked'
             );
         }
            $this->db->where('event_id',$eccid);
            $this->db->update('event',$update);
         
        }
        public function get_eventcat()
        {
            return $this->db->get('eventcategory')->result();
        }
        public function get_eventcat_op($id)
        {
            $this->db->where('eventcategory_id',$id);
            $data=$this->db->get('eventcategory')->result();
            foreach($data as $row)
            {
                ?>
                    <option value="<?php echo $row->eventcategory_id ?>"><?php echo $row->eventcategory_title ?></option>
                <?php
            }
        }
        public function get_eventspeaker()
        {
            $this->db->order_by('eventspeaker_name','asc');
            return $this->db->get('eventspeaker')->result();
        }
        public function get_eventspeaker_op($id)
        {
            $this->db->where('eventspeaker_id',$id);
            $data=$this->db->get('eventspeaker')->result();
            foreach($data as $row)
            {
                ?>
                    <option value="<?php echo $row->eventspeaker_id ?>"><?php echo $row->eventspeaker_name ?></option>
                <?php
            }
        }
        public function getstate()
        {
            $this->db->order_by('state_name','asc');
            return $this->db->get('state')->result();
        }
        public function getcity()
        {
            $this->db->order_by('city_name','asc');
            return $this->db->get('city')->result();
        }
        public function getcity_op($id)
        {
            $this->db->where('state_id',$id);
            $data=$this->db->get('city')->result();
            foreach($data as $row)
            {
        ?>
                <option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option> 
        <?php
            }
        }
        public function getarea()
        {
            $this->db->order_by('area_name','asc');
            return $this->db->get('area')->result();
        }
        public function getarea_op($id)
        {
            $this->db->where('city_id',$id);
            $data=$this->db->get('area')->result();
            foreach($data as $row)
            {
        ?>
                <option value="<?php echo $row->area_id ?>"><?php echo $row->area_name ?></option> 
        <?php
            }
        }
        public function insert_event()
        {
           $event_cat_id=$this->input->post('event_cat_id');
           $event_speaker_id=$this->input->post('event_speaker_id');
           $event_title=$this->input->post('event_title');
           $event_trailer=$this->input->post('event_trailer');
           $event_price=$this->input->post('event_price');
           $event_description=$this->input->post('event_description');
           $event_type=$this->input->post('event_type');
           $event_address=$this->input->post('event_address');
           $event_date=$this->input->post('event_date');
           $txtstate=$this->input->post('txtstate');
           $txtcity=$this->input->post('txtcity');
           $txtarea=$this->input->post('txtarea');

           $event_images=$_FILES['event_images']['name'];
           $event_poster=$_FILES['event_poster']['name'];

           $config = array
           (
               'upload_path' => "./images/",
               'allowed_types' => "*",
               'overwrite' => TRUE,
               'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
               'max_height' => "1000000",
               'max_width' => "1000000",
               'encryption_key' => true
           );
               $this->load->library('upload', $config);
               if($this->upload->do_upload('event_images') && $this->upload->do_upload('event_poster'))
               {
                    $data = array
                    (
                        'upload_data' => $this->upload->data()
                    );
                        $ins=array 
                        (
                            'eventcategory_id'=>$event_cat_id,
                            'eventspeaker_id'=>$event_speaker_id,
                            'event_title'=>$event_title,
                            'event_trailer'=>$event_trailer,
                            'event_price'=>$event_price,
                            'event_images'=>$event_images,
                            'event_poster'=>$event_poster,
                            'event_description'=>$event_description,
                            'event_type'=>$event_type,
                            'event_address'=>$event_address,
                            'event_date'=>$event_date,
                            'state_id'=>$txtstate,
                            'city_id'=>$txtcity,
                            'area_id'=>$txtarea
                        );
                       echo "<pre>";
                       $this->db->insert('event',$ins);
               }
               else
               {
                   $error = array('error' => $this->upload->display_errors());
                   print_r( $error);
               }
        }
        public function edit_event($eid)
        {
            $this->db->where('event_id',$eid);
            return $this->db->get('event')->row();
        }
        public function update_event($eid)
        {
            $event_cat_id=$this->input->post('event_cat_id');
            $event_speaker_id=$this->input->post('event_speaker_id');
            $event_title=$this->input->post('event_title');
            $event_trailer=$this->input->post('event_trailer');
            $event_price=$this->input->post('event_price');
            $event_description=$this->input->post('event_description');
            $event_type=$this->input->post('event_type');
            $event_address=$this->input->post('event_address');
            $event_date=$this->input->post('event_date');
            $txtstate=$this->input->post('txtstate');
            $txtcity=$this->input->post('txtcity');
            $txtarea=$this->input->post('txtarea');

            $event_images=$_FILES['event_images']['name'];
            $event_poster=$_FILES['event_poster']['name'];

            $this->db->where('event_id',$eid);
            $erow=$this->db->get('event')->row();
            
            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "*",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encryption_key' => true
            );
                $this->load->library('upload', $config);

        if($event_images=="" && $event_poster=="")
        {
        
            $update=array 
                 (
                 'eventcategory_id'=>$event_cat_id,
                 'eventspeaker_id'=>$event_speaker_id,
                 'event_title'=>$event_title,
                 'event_trailer'=>$event_trailer,
                 'event_price'=>$event_price,
                 'event_images'=>$erow->event_images,
                 'event_poster'=>$erow->event_poster,
                 'event_description'=>$event_description,
                 'event_type'=>$event_type,
                 'event_address'=>$event_address,
                 'event_date'=>$event_date,
                 'state_id'=>$txtstate,
                 'city_id'=>$txtcity,
                 'area_id'=>$txtarea
                 );
                 $this->db->where('event_id',$eid);
                 $this->db->update('event',$update);
                 $this->getdata();
             }
             else if($event_images=="")
             {
                if($this->upload->do_upload('event_poster'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $update=array 
                    (
                    'eventcategory_id'=>$event_cat_id,
                    'eventspeaker_id'=>$event_speaker_id,
                    'event_title'=>$event_title,
                    'event_trailer'=>$event_trailer,
                    'event_price'=>$event_price,
                    'event_images'=>$erow->event_images,
                    'event_poster'=>$event_poster,
                    'event_description'=>$event_description,
                    'event_type'=>$event_type,
                    'event_address'=>$event_address,
                    'event_date'=>$event_date,
                    'state_id'=>$txtstate,
                    'city_id'=>$txtcity,
                    'area_id'=>$txtarea
                    );
                    $this->db->where('event_id',$eid);
                    $this->db->update('event',$update);
                    $this->getdata();
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                    die();
                }
             }
             else if($event_poster=="")
             {
                if($this->upload->do_upload('event_images'))
                {
                    $data = array('upload_data' => $this->upload->data());
                    $update=array 
                    (
                    'eventcategory_id'=>$event_cat_id,
                    'eventspeaker_id'=>$event_speaker_id,
                    'event_title'=>$event_title,
                    'event_trailer'=>$event_trailer,
                    'event_price'=>$event_price,
                    'event_images'=>$event_images,
                    'event_poster'=>$erow->event_poster,
                    'event_description'=>$event_description,
                    'event_type'=>$event_type,
                    'event_address'=>$event_address,
                    'event_date'=>$event_date,
                    'state_id'=>$txtstate,
                    'city_id'=>$txtcity,
                    'area_id'=>$txtarea
                    );
                    $this->db->where('event_id',$eid);
                    $this->db->update('event',$update);
                    $this->getdata();
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                    die();
                }
             }
             else
             {
                if($this->upload->do_upload('event_images') && $this->upload->do_upload('event_poster'))
                {
                    $data = array('upload_data'=>$this->upload->data());

                    $update=array 
                    (
                    'eventcategory_id'=>$event_cat_id,
                    'eventspeaker_id'=>$event_speaker_id,
                    'event_title'=>$event_title,
                    'event_trailer'=>$event_trailer,
                    'event_price'=>$event_price,
                    'event_images'=>$event_images,
                    'event_poster'=>$event_poster,
                    'event_description'=>$event_description,
                    'event_type'=>$event_type,
                    'event_address'=>$event_address,
                    'event_date'=>$event_date,
                    'state_id'=>$txtstate,
                    'city_id'=>$txtcity,
                    'area_id'=>$txtarea
                    );
                    $this->db->where('event_id',$eid);
                    $this->db->update('event',$update);
                    $this->getdata();
                }
                else
                {
                    $error = array('error' =>$this->upload->display_errors());
                    print_r($error);
                    die();
                }
             }
        }

    public function delete_event($eid)
    {
        $this->db->where('event_id',$eid);
        return $this->db->delete('event');
    }

}
?>