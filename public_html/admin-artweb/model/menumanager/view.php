<?php
class ModelMenumanagerView extends Model {
    public function viewItem($id){
	   
        $id = intval($id);
        
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."menu_item WHERE id='".$id."' LIMIT 1");
        
        
        return $query->row;
	}
    
    
    public function viewMenuInfo($id){
	   
        $id = intval($id);
        
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."menu WHERE id='".$id."' LIMIT 1");
        
        
        return $query->row;
	}
    
    
	public function getMenu(){
	   
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."menu");
        
        $rsArray = array();
        
        foreach ($query->rows as $result) {
            $rsArray[] = $result;
        }
        return $rsArray;
	}
    
    public function getMenuItem($menu_id = null){
        
        $menu_id = intval($menu_id);
        
        $sql = "SELECT * FROM ".DB_PREFIX."menu_item";
        if($menu_id){
            $sql .= " WHERE menu_id='".$menu_id."'";
        }
        $sql .= " ORDER BY sort";
	   
        $query = $this->db->query($sql);
        
        $rsArray = array();
        
        foreach ($query->rows as $result) {
            $rsArray[] = $result;
        }
        return $rsArray;
	}
    
    public function getItems($menu_id = null){
        
        $menu_id = intval($menu_id);
        
        $sql = "SELECT * FROM ".DB_PREFIX."menu_item WHERE parent_id='0' ";
        if($menu_id){
            $sql .= " AND menu_id='".$menu_id."'";
        }
        $sql .= " ORDER BY sort";
	   
        $query = $this->db->query($sql);
        
        $rsArray = array();
        
        foreach ($query->rows as $result) {
            
            $result['children'] = $this->getChildrenForMenuItem($result['id']);
            
            $rsArray[] = $result;
        }
        return $rsArray;
	}
    
    public function getChildrenForMenuItem($id){
            
        $id = intval($id);
        
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."menu_item WHERE parent_id=$id ORDER BY sort");
        
        $rsArray = array();
        
        foreach ($query->rows as $result) {
            
            $result['children'] = $this->getChildrenForMenuItem($result['id']);
            
            $rsArray[] = $result;
        }
        return $rsArray;

    }
    
}
?>