<?php  
class sports_model extends CI_Model
    {
        public function getdata()
        {
            $this->db->from("sports");
            $this->db->join("state","state.state_id=sports.state_id");
            $this->db->join("city","city.city_id=sports.city_id");
            $this->db->join("area","area.area_id=sports.area_id");
            return $this->db->get()->result();
        }
        public function update_status($eccid)
        {   
            $this->db->where('sports_id',$eccid);  
            $data= $this->db->get('sports')->row();
            if($data->sports_status == "unblocked" )
            {
                $update=array
                (
                    'sports_status'=>'blocked'
                );
                    
                
            }
            else
            {
                $update=array
                (
                    'sports_status'=> 'unblocked'
                );
            }
            $this->db->where('sports_id',$eccid);
            $this->db->update('sports',$update);
        
        }
        public function getstate()
        {
            return $this->db->get('state')->result();
        } 
        public function getarea()
        {
            return $this->db->get('area')->result();
        } 
        public function getcity()
        {
            return $this->db->get('city')->result();
        } 
        public function addsports()
        {                                
            $state_id= $this->input->post('state_id');
            $city_id= $this->input->post('city_id');
            $area_id= $this->input->post('area_id');
            $sports_title= $this->input->post('sports_title');
            $sports_category= $this->input->post('sports_category');
            $sports_details= $this->input->post('sports_details');
            $sportsticket_price= $this->input->post('sportsticket_price');
            $sports_images= $_FILES['sports_images']['name'];
            $sports_date= $this->input->post('sports_date');

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

                $this->load->library('upload',$config);
                if($this->upload->do_upload('sports_images'))
                {
                    $data=array
                    (
                        'upload_data'=>$this->upload->data()
                    );

                    $ins=array
                    (							
                        'state_id'=>$state_id,	
                        'city_id'=>	$city_id,
                        'area_id'=>$area_id,
                        'sports_title'=>$sports_title,
                        'sports_category'=>$sports_category,
                        'sports_details'=>$sports_details,
                        'sportsticket_price'=>$sportsticket_price,
                        'sports_images'=>$sports_images,
                        'sports_date'=>$sports_date
                    );
                    echo "<pre>";
                    $this->db->insert('sports',$ins);
                    }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                }
        }

        public function edit_sports($sid)
        {
            $this->db->where('sports_id',$sid);
            return $this->db->get('sports')->row(); 
        }
        public function update_sports($sid)
        {
            $state_id= $this->input->post('state_id');
            $city_id= $this->input->post('city_id');
            $area_id= $this->input->post('area_id');
            $sports_title= $this->input->post('sports_title');
            $sports_category= $this->input->post('sports_category');
            $sports_details= $this->input->post('sports_details');
            $sportsticket_price= $this->input->post('sportsticket_price');
            $sports_images= $_FILES['sports_images']['name'];
            $sports_date= $this->input->post('sports_date');

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

            $this->load->library('upload',$config);
            if($this->upload->do_upload('sports_images'))
            {
                $data=array
                (
                    'upload_data'=>$this->upload->data()
                );

                $update=array
                (
                    'state_id'=>$state_id,	
                    'city_id'=>	$city_id,
                    'area_id'=>$area_id,
                    'sports_title'=>$sports_title,
                    'sports_category'=>$sports_category,
                    'sports_details'=>$sports_details,
                    'sportsticket_price'=>$sportsticket_price,
                    'sports_images'=>$sports_images,
                    'sports_date'=>$sports_date
                );
                echo "<pre>";
                $this->db->where('sports_id',$sid);
                $this->db->update('sports',$update);
            }
            else
            {
                $error=array('error'=> $this->upload->display_error());
                print_r($error);
            }
        }
        public function delete_sports($sid)
        {
            $this->db->where('sports_id',$sid);
            return $this->db->delete('sports');
        }

        public function insert_stadium()
        {
            $stadium_name= $this->input->post('stadium_name');
            $city_id= $this->input->post('city_id');
            $area_id= $this->input->post('area_id');
            $state_id= $this->input->post('state_id');
        

            $insert=array
            (
                'stadium_name'=>$stadium_name,	
                'area_id'=>$area_id,
                'city_id'=>	$city_id,
                'state_id'=>$state_id
            );
            echo "<pre>";
            $this->db->insert('sportsstadium',$insert);
        }
        public function stadium_data()
        {
            $this->db->from('sportsstadium');
            $this->db->join('area','area.area_id=sportsstadium.area_id');
            $this->db->join('city','city.city_id=sportsstadium.city_id');
            $this->db->join('state','state.state_id=sportsstadium.state_id');
            return $this->db->get('')->result();
        }
        public function update_stadium_status($sid)
        {
            $this->db->where('stadium_id',$sid);
            $data=$this->db->get('sportsstadium')->row();

            if($data->stadium_status == "unblocked")
            {
                $update=array
                (
                    'stadium_status'=>"blocked"
                );
            }
            else
            {
                $update=array
                (
                    'stadium_status'=>"unblocked"
                );
            }
            $this->db->where('stadium_id',$sid);
            $this->db->update('sportsstadium',$update);
        }

        public function edit_stadium($sid)
        {
            $this->db->where('stadium_id',$sid);
            return $this->db->get('sportsstadium')->row();
        }
        public function update_stadium($sid)
        {
            $stadium_name= $this->input->post('stadium_name');
            $city_id= $this->input->post('city_id');
            $area_id= $this->input->post('area_id');
            $state_id= $this->input->post('state_id');
        

            $update=array
            (
                'stadium_name'=>$stadium_name,	
                'area_id'=>$area_id,
                'city_id'=>	$city_id,
                'state_id'=>$state_id
            );
            echo "<pre>";
            $this->db->where('stadium_id',$sid);
            $this->db->update('sportsstadium',$update);
        }
    }
?>