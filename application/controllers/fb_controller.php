<?php  
class fb_controller extends CI_Controller
{
    public function fb_details()
    {
        $file['food']=$this->db->get('foodbeveragebooking')->result();
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $file['cart']=$this->db->get('fbaddtocart')->result();
        $this->load->view('template/header');
        $this->load->view('food&beverages/fb_detail',$file);
        $this->load->view('template/footer');
    }
    public function addtocart($id)
    {
        if( $this->session->userdata('user_id')!="")
        {
    
        $this->db->where('foodbeverage_id',$id);
        $fb=$this->db->get('foodbeveragebooking')->row();
        $qty=$this->input->post('qtybutton');
        // echo $fb->foodbeverage_price;
        // echo $qty;.
        $ins=array
            (
                'foodbeverage_id'=>$id,
                'user_id'=>$this->session->userdata('user_id'),
                'ticketbooking_number'=>rand(10,10000),
                'quantity'=>$qty,
                'totalamount'=>$qty*$fb->foodbeverage_price
            );

            $this->db->where('foodbeverage_id',$id);
            $this->db->where('user_id',$this->session->userdata('user_id'));
            $fb=$this->db->get('fbaddtocart')->result();
          
           if(count($fb)>0)
           {
             $this->db->where('foodbeverage_id',$id);
             $this->db->where('user_id',$this->session->userdata('user_id'));
             $this->db->update('fbaddtocart',$ins);
           }
           else
           {
            $ins=array
            (
                'foodbeverage_id'=>$id,
                'user_id'=>$this->session->userdata('user_id'),
                'ticketbooking_number'=>rand(10,10000),
                'quantity'=>$qty,
                'totalamount'=>$qty*$fb->foodbeverage_price
            );
            $this->db->insert('fbaddtocart',$ins);  
           }
           
           redirect('fb_controller/fb_details');   
        }
    
        else
        {
            redirect('logincontroller');   
        }
    }
    
}
?>