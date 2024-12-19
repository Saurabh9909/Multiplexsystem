<?php  

class eventticket_controller extends CI_Controller
{
    public function ticket()
    {

        $file['book'] = array(
            "title" => $this->input->post('title'),
            "address" => $this->input->post('address'),
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "mobile" => $this->input->post('mobile'),
            "quantity" => $this->input->post('quantity'),
            "price" => $this->input->post('price'),
            "totalamount" => $this->input->post('totalamount')
        );
        
        // $this->load->view('template/header');
        $this->load->view('event/eventticket',$file);
        // $this->load->view('template/footer');
    }
}
?>