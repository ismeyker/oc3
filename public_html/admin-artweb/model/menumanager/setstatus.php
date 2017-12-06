<?php
class ModelMenumanagerSetstatus extends Model {
    
	public function setStatus($id, $status){
	    
        $query = $this->db->query("UPDATE ".DB_PREFIX."menu_item SET status='".$status."' WHERE id='".$id."'");
        
        
        if($query){
            return true;
        } else {
            return false;
        }
	}
    
    
}
?>