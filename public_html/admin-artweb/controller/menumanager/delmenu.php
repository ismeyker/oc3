<?php
class ControllerMenumanagerDelmenu extends Controller {
	private $error = array();



  	public function index() {
        $rsData = array();


        $this->load->model('menumanager/del');

        $rs = $this->model_menumanager_del->delMenu($this->request->post['id']);

        if($rs){
            $rsData['success'] = true;
        } else {
            $rsData['success'] = false;
        }

        echo json_encode($rsData);
  	}
}
?>