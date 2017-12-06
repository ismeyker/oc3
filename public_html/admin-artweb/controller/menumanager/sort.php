<?php
class ControllerMenumanagerSort extends Controller {
	private $error = array();



  	public function sortmenuitem() {
      $rsData = array();

      $this->load->model('menumanager/sort');

      if(!empty($this->request->post['menu_item_sort'])){

        $changeSort = $this->model_menumanager_sort->sortMenuItem($this->request->post['menu_item_sort']);

        if($changeSort){
            $rsData['success'] = true;
        } else {
            $rsData['success'] = false;
        }

      } else {
          $rsData['success'] = false;
      }

      echo json_encode($rsData);
    }
}
?>