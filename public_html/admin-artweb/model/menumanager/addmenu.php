<?php
class ModelMenumanagerAddmenu extends Model {
	public function addMenu($title, $description, $class){


        $title = htmlspecialchars($title);
        $description = htmlspecialchars($description);
        $class = htmlspecialchars($class);

        $query = $this->db->query("INSERT INTO ".DB_PREFIX."menu (name, info, class)
                                    VALUES ('".$title."', '".$description."', '".$class."')");


        if($query){
            return true;
        } else {
            return false;
        }
	}

    public function changeMenu($id, $title, $description, $class){

        $id = intval($id);
        $title = htmlspecialchars($title);
        $description = htmlspecialchars($description);
        $class = htmlspecialchars($class);

        $query = $this->db->query("UPDATE ".DB_PREFIX."menu SET name='".$title."', info='".$description."', class='".$class."'
                                    WHERE id='".$id."'");



        if($query){
            return true;
        } else {
            return false;
        }
	}

    public function addMenuItem($menu_id, $parent_id, $title, $link_text, $source_type, $href, $target, $sort, $class, $user_code = null, $status){
	    $menu_id = intval($menu_id);
        $parent_id = intval($parent_id);
        $title = htmlspecialchars($title);
        $link_text = htmlspecialchars($link_text);
        $source_type = htmlspecialchars($source_type);
        $href = strip_tags($this->db->escape($href));
        $target = htmlspecialchars($target);
        $sort = intval($sort);
        $class = htmlspecialchars($class);
        $user_code = addslashes($user_code);
        $status = intval($status);


        if(!isset($user_code)){
            $user_code='';
        }

        $query = $this->db->query("INSERT INTO ".DB_PREFIX."menu_item (menu_id, parent_id, title, link_text, source_type, href, target, sort, class, user_code, status)
                                VALUES ('".$menu_id."',
                                        '".$parent_id."',
                                         '".$title."',
                                         '".$link_text."',
                                         '".$source_type."',
                                         '".$href."',
                                         '".$target."',
                                         '".$sort."',
                                         '".$class."',
                                         '".$user_code."',
                                         '".$status."')");


        if($query){
            return true;
        } else {
            return false;
        }
	}


    public function changeMenuItem($id, $menu_id, $parent_id, $title, $link_text, $source_type, $href, $target, $sort, $class, $user_code = null, $status){
	    $id = intval($id);
        $menu_id = intval($menu_id);
        $parent_id = intval($parent_id);
        $title = htmlspecialchars($title);
        $link_text = htmlspecialchars($link_text);
        $source_type = htmlspecialchars($source_type);
        $href = strip_tags($this->db->escape($href));
        $target = htmlspecialchars($target);
        $sort = intval($sort);
        $class = htmlspecialchars($class);
        $user_code = addslashes($user_code);
        $status = intval($status);

        if(!$id) return false;




        if(!isset($user_code)){
            $user_code = '';
        }

        $sql_text = "UPDATE ".DB_PREFIX."menu_item SET menu_id='".$menu_id."',
                                                                     parent_id='".$parent_id."',
                                                                     title='".$title."',
                                                                     link_text='".$link_text."',
                                                                     source_type='".$source_type."',
                                                                     href='".$href."',
                                                                     target='".$target."',
                                                                     sort='".$sort."',
                                                                     class='".$class."',
                                                                     user_code='".$user_code."',
                                                                     status='".$status."'
                                                                     WHERE id='".$id."'";



        $query = $this->db->query($sql_text);



        if($query){
            return true;
        } else {
            return false;
        }
	}
}
?>