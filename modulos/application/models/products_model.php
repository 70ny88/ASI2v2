<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_Model extends CI_Model {

function get_products($pagination, $segment) {
	
  $this->db->order_by('id', 'asc'); 	
  $this->db->limit($pagination, $segment);
  $query = $this->db->get('vwproductos')->result();
     
  		foreach ($query as $result) {
			
			if ($result->valores) {
				$result->valores = explode(',',$result->valores);
			}
			
		}
		
	return $query;	      
}
  
function get_product($id) {
		
		$query = $this->db->get_where('vwproductos', array('id' => $id))->result();
			
		$result = $query[0];
		
		if ($result->valores) {
			$result->valores = explode(',',$result->valores);
		}
				
		return $result;
	}

function get($id){
   $query = $this->db->get_where('vwproductos', array('id' => $id))->result();
   return $query;
   
}	

function update_product($id=NULL){

		$data = array(
               'marca' => $this->input->post('marca'),
               'precio' => $this->input->post('precio'),
               'opcion' => $this->input->post('opcion'),
               'valores' => $this->input->post('atributos'),
            );
			
if($id!==NULL){
  $this->db->where('id', $id);
  return $this->db->update('vwproductos', $data);
}else{
   return $this->db->insert('vwproductos', $data);
}
	
}

function delete_product($id){
	
return $this->db->delete('vwproductos', array('id' => $id));	
	
}
    	  
}
