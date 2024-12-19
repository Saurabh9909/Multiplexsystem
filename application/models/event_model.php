<?php  
class event_model extends CI_Model
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
    public function get_event($eid)
    {
        $this->db->where('eventcategory_id',$eid);
        return $this->db->get('eventcategory')->result();
    }
    public function event_details($eid)
    {
        $this->db->where('event_id',$eid);
        return $this->db->get('event')->row();
    }
    public function event_category($ecid)
    {
        $this->db->where('eventcategory_id',$ecid);
        return $this->db->get('event')->result();
    }
    public function event_speakers($esid)
    {
        $this->db->where('eventspeaker_id',$esid);
        return $this->db->get('eventspeaker')->row();
    }
}
?>