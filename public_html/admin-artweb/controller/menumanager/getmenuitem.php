<?php 
class ControllerMenumanagerGetmenuitem extends Controller {
	private $error = array(); 
    
    
     
  	public function index() {
        $rsData = array();

		
        $this->load->model('menumanager/view');
        
        
        $rs = $this->model_menumanager_view->getMenuItem($this->request->post['menu_id']);
        
        
        
        if($rs){
            $rsData['success'] = true;  
            
            
            $menu_item = '';
            $menu_item .= "<option value='0'>Главный пункт меню</option>";
            
            foreach($rs as $item){
                $menu_item .= "<option value='".$item['id']."'>".$item['link_text']."</option>";   
            }  
            $rsData['item'] = $menu_item;  
        } else {
            $rsData['success'] = false; 
        }
        
        echo json_encode($rsData);
  	}
}
?>