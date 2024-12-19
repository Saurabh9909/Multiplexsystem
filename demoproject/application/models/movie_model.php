<?php  
class movie_model extends CI_Model
{
    public function getdata()
    {

        $this->db->from('movie'); 
        $this->db->join('movieindustry','movieindustry.industry_id=movie.industry_id');
        // $this->db->join('moviecategory','moviecategory.category_id=movie.category_id');
        // $this->db->join('multiplex','multiplex.multiplex_id=movie.multiplex_id');
        return $this->db->get()->result();
    }

    public function status($id)
    {
        $this->db->where('movie_id',$id);
        $data=$this->db->get('movie')->row();
       
        if($data->movie_status=="blocked")
        {
            $up=array(
                "movie_status"=>"unblocked"
            );
        }
        else
        {
                 $up=array(
                "movie_status"=>"blocked"
            );
        }

        $this->db->where('movie_id',$id);
        $this->db->update('movie',$up);
    }

    public function insert()
    {
        $industry=$this->input->post('industry');
        $category=$this->input->post('category');
        $ncat=implode($category,',');
      
        $multiplex=$this->input->post('multiplex');
        $multi=implode($multiplex,',');

        $name=$this->input->post('name');
        $cast=$this->input->post('cast');
        $ncast=implode($cast,',');
        //  print_r($cast);
        //  die(); 
        $price=$this->input->post('price');
        $rating=$this->input->post('rating');
        $experience=$this->input->post('experience');
        $status=$this->input->post('status');
        $description=$this->input->post('description');
        $poster=$this->input->post('poster');
        $review=$this->input->post('review');
        $trailer=$this->input->post('trailer');
        $langauge=$this->input->post('langauge');
        $screen=$this->input->post('screen');
        $duration=$this->input->post('duration');
        
        $image=$_FILES['image']['name'];
        $poster=$_FILES['poster']['name'];
       
        $position=$this->input->post('position');

            $config = array
            (
                'upload_path' => "./images/",
                'allowed_types' => "jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1000000",
                'max_width' => "1000000",
                'encrypt_name' => true
            );
                $this->load->library('upload', $config);
        $data1="";
        $data2="";
        if($this->upload->do_upload('image'))
        {
            $data1 = array('upload_data' => $this->upload->data());
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            print_r( $error);
            die();
        }          
        if($this->upload->do_upload('poster'))
        {
            $data2 = array('upload_data' => $this->upload->data());
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            print_r( $error);
            die();
        }          
        $ins=array
        ( 

            "industry_id"=>$industry,
            "category_id"=>$ncat,
            "multiplex_id"=>$multi,
            "movie_name"=>$name,
            "movie_cast"=>$ncast,
            "movie_price"=>$price,
            "movie_rating"=>$rating,
            "movie_experience"=>$experience,
            "status"=>$status,
            "movie_description"=>$description,
            "movie_poster"=>$data1['upload_data']['file_name'],
            "movie_images"=>$data2['upload_data']['file_name'],
            "movie_review"=>$review,
            "movie_trailer"=>$trailer,
            "movie_langauge"=>$langauge,
            "moviedate"=>$screen,
            "movie_duration"=>$duration
        );
        // echo "<pre>";
        // print_r($ins);
        // die();
         $this->db->insert('movie',$ins);
         $this->getdata();
}

    public function delete($mid)
    {
        $this->db->where('movie_id',$mid);
        $this->db->delete('movie');
    }

    public function edit($id)
         {
             $this->db->where('movie_id',$id);
            return $this->db->get('movie')->row(); 
        }

    public function update($id)
    {
        $industry=$this->input->post('industry');
        $category=$this->input->post('category');
        $ncat=implode(',',$category);
        $multiplex=$this->input->post('multiplex');
        $multi=implode(',',$multiplex);
        $name=$this->input->post('name');
        $cast=$this->input->post('cast');
        $ncast=implode($cast,',');
        
        $price=$this->input->post('price');
        $rating=$this->input->post('rating');
        $experience=$this->input->post('experience');
        $status=$this->input->post('status');
        $description=$this->input->post('description');
        $poster=$this->input->post('poster');
        $review=$this->input->post('review');
        $trailer=$this->input->post('trailer');
        $langauge=$this->input->post('langauge');
        $screen=$this->input->post('screen');
        $duration=$this->input->post('duration');
      
        $image=$_FILES['image']['name'];
        $poster=$_FILES['poster']['name'];
       
     
        $this->db->where('movie_id',$id);
        $mrow=$this->db->get('movie')->row();

        $config = array
        (
            'upload_path' => "./images/",
            'allowed_types' => "jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1000000",
            'max_width' => "1000000",
            'encrypt_name' => true
        );


        $data1="";
        $data2="";
      



        $this->load->library('upload', $config);
          
        if($image=="" && $poster=="")
        {
            $up=array
            ( 

                "industry_id"=>$industry,
                "category_id"=>$ncat,
                "multiplex_id"=>$multi,
                "movie_name"=>$name,
                "movie_cast"=>$ncast,
                "movie_price"=>$price,
                "movie_rating"=>$rating,
                "movie_experience"=>$experience,
                "status"=>$status,
                "movie_description"=>$description,
                "movie_poster"=>$mrow->movie_poster,
                "movie_images"=>$mrow->movie_images,
                "movie_review"=>$review,
                "movie_trailer"=>$trailer,
                "movie_langauge"=>$langauge,
                "moviedate"=>$screen,
                "movie_duration"=>$duration
            );

            $this->db->where('movie_id',$id);
            $this->db->update('movie',$up);
            $this->getdata();
        }
        else if($image=="")
        {
           
            if($this->upload->do_upload('poster'))
            {
                    $data = array('upload_data' => $this->upload->data());
            $up=array
            ( 

                "industry_id"=>$industry,
                "category_id"=>$ncat,
                "multiplex_id"=>$multi,
                "movie_name"=>$name,
                "movie_cast"=>$ncast,
                "movie_price"=>$price,
                "movie_rating"=>$rating,
                "movie_experience"=>$experience,
                "status"=>$status,
                "movie_description"=>$description,
                "movie_poster"=>$data['upload_data']['file_name'],
                "movie_images"=>$mrow->movie_images,
                "movie_review"=>$review,
                "movie_trailer"=>$trailer,
                "movie_langauge"=>$langauge,
                "moviedate"=>$screen,
                "movie_duration"=>$duration
            );

            $this->db->where('movie_id',$id);
            $this->db->update('movie',$up);
            $this->getdata();
            }
            else
            {
                    $error = array('error' => $this->upload->display_errors());
                    print_r( $error);
                    die();
                
            }    
            
        }
       
        else if($poster=="")
        {
            if($this->upload->do_upload('image'))
            {
                    $data = array('upload_data' => $this->upload->data());
           
            $up=array
            ( 

                "industry_id"=>$industry,
                "category_id"=>$ncat,
                "multiplex_id"=>$multi,
                "movie_name"=>$name,
                "movie_cast"=>$ncast,
                "movie_price"=>$price,
                "movie_rating"=>$rating,
                "movie_experience"=>$experience,
                "status"=>$status,
                "movie_description"=>$description,
                "movie_poster"=>$mrow->movie_poster,
                "movie_images"=>$data['upload_data']['file_name'],
                "movie_review"=>$review,
                "movie_trailer"=>$trailer,
                "movie_langauge"=>$langauge,
                "moviedate"=>$screen,
                "movie_duration"=>$duration
            );

            $this->db->where('movie_id',$id);
            $this->db->update('movie',$up);
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
            if($this->upload->do_upload('image'))
            {
                $data1 = array('upload_data' => $this->upload->data());
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                print_r( $error);
                die();
            }          
            if($this->upload->do_upload('poster'))
            {
                $data2 = array('upload_data' => $this->upload->data());
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                print_r( $error);
                die();
            }  
    
        
            $up=array
            ( 

                "industry_id"=>$industry,
                "category_id"=>$ncat,
                "multiplex_id"=>$multi,
                "movie_name"=>$name,
                "movie_cast"=>$ncast,
                "movie_price"=>$price,
                "movie_rating"=>$rating,
                "movie_experience"=>$experience,
                "status"=>$status,
                "movie_description"=>$description,
                "movie_poster"=>$data1['upload_data']['file_name'],
                "movie_images"=>$data2['upload_data']['file_name'],
                "movie_review"=>$review,
                "movie_trailer"=>$trailer,
                "movie_langauge"=>$langauge,
                "moviedate"=>$screen,
                "movie_duration"=>$duration

            );
           $this->db->where('movie_id',$id);
           $this->db->update('movie',$up);
           $this->getdata();
        }
       
    }
}
?>