<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}
    public function getRecords()
    {
        $query=$this->db->get("customer");
         return $query->result();
    }
    public function saveRecords($data)
    {
        return $this->db->insert('customer', $data);
    }
    public function getAllRecords($record_id)
    {
        $query= $this->db->where('id',$record_id)->get('customer')->row();
        if($query){
            return $query;
        }
    }
    public function updateRecords($record_id, $data)
    {
       return $this->db->where('id',$record_id)->update('customer',$data);
    }
    public function deleteRecords($record_id)
    {
        return $this->db->delete('customer', array('id'=>$record_id));
    }
}

/* End of file Usermodel.php */
/* Location: ./application/models/Usermodel.php */