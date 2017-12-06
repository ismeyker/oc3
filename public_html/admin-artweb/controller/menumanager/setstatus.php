<?php 
class ControllerMenumanagerSetstatus extends Controller {
	private $error = array(); 
    
    
     
  	public function index() {
        $rsData = array();
        
        $this->load->model('menumanager/setstatus');
        
        $changeStatus = $this->model_menumanager_setstatus->setStatus($this->request->post['id'], $this->request->post['status']);
            
        if($changeStatus){
            $rsData['success'] = true;    
        } else {
            $rsData['success'] = false; 
        }
        
        echo json_encode($rsData);
    }
}
?>