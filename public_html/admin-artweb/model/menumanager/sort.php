<?php
class ModelMenumanagerSort extends Model {
    
	public function sortMenuItem($items){
	    
        $errFlag = true;
        
        foreach($items as $key=>$value){
            $query = $this->db->query("UPDATE ".DB_PREFIX."menu_item SET sort='".$value."' WHERE id='".$key."'");
            
            if(!$query){
                $errFlag = false;
            }
        }
        
        
        if($errFlag){
            return true;
        } else {
            return false;
        }
	}
    
    
}
?>