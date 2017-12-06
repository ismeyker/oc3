<?php
class ModelMenumanagerDel extends Model {
	public function delMenu($id){


        $id = intval($id);

        $query = $this->db->query("DELETE FROM ".DB_DATABASE.".".DB_PREFIX."menu WHERE id='".$id."'");


        if($query){
            return true;
        } else {
            return false;
        }
	}

    public function delMenuitem($id){


        $id = intval($id);

        $query = $this->db->query("DELETE FROM ".DB_DATABASE.".".DB_PREFIX."menu_item WHERE id='".$id."'");


        if($query){
            return true;
        } else {
            return false;
        }
	}
}
?>