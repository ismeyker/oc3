<?php
class ControllerMenumanagerAdd extends Controller {
	private $error = array();



  	public function addmenu() {
        $rsData = array();


        $this->load->model('menumanager/addmenu');

        if(isset($this->request->post['action']) and $this->request->post['action']=='add'){


            $rs = $this->model_menumanager_addmenu->addMenu($this->request->post['menu_name'], $this->request->post['menu_desc'], $this->request->post['menu_class']);

            if($rs){
                $rsData['success'] = true;
                $rsData['message'] = 'Меню успешно добавлено!';
            } else {
                $rsData['success'] = false;
            }

        } else if(isset($this->request->post['action']) and $this->request->post['action']=='change') {

            $rs = $this->model_menumanager_addmenu->changeMenu($this->request->post['id'], $this->request->post['menu_name'], $this->request->post['menu_desc'], $this->request->post['menu_class']);

            if($rs){
                $rsData['success'] = true;
                $rsData['message'] = 'Меню успешно обновлено!';
            } else {
                $rsData['success'] = false;
            }

        }



        echo json_encode($rsData);
  	}


    public function addmenuitem() {
        $rsData = array();


        $this->load->model('menumanager/addmenu');



        if(isset($this->request->post['action']) and $this->request->post['action']=='add'){

            $rs = $this->model_menumanager_addmenu->addMenuItem($this->request->post['menu_for_item'],
                                                         $this->request->post['parent_menu_item'],
                                                         $this->request->post['attr_title'],
                                                         $this->request->post['link_text'],
                                                         $this->request->post['source_type'],
                                                         $this->request->post['href'],
                                                         $this->request->post['target'],
                                                         $this->request->post['sortMenu'],
                                                         $this->request->post['class_menu_item'],
                                                         $this->request->post['user_code'],
                                                         $this->request->post['status']
                                                         );
            if($rs){
                $rsData['success'] = true;
                $rsData['message'] = 'Пункт меню успешно добавлен!';
            } else {
                $rsData['success'] = false;
            }

        } else if(isset($this->request->post['action']) and $this->request->post['action']=='change') {

           $rs = $this->model_menumanager_addmenu->changeMenuItem($this->request->post['id'],
                                                                 $this->request->post['menu_for_item'],
                                                                 $this->request->post['parent_menu_item'],
                                                                 $this->request->post['attr_title'],
                                                                 $this->request->post['link_text'],
                                                                 $this->request->post['source_type'],
                                                                 $this->request->post['href'],
                                                                 $this->request->post['target'],
                                                                 $this->request->post['sortMenu'],
                                                                 $this->request->post['class_menu_item'],
                                                                 $this->request->post['user_code'],
                                                                 $this->request->post['status']
                                                                 );
           if($rs){
                $rsData['success'] = true;
                $rsData['message'] = 'Пункт меню успешно обновлен!';
            } else {
                $rsData['success'] = false;
            }

        }
        //print_r($_POST);

        echo json_encode($rsData);
    }
}
?>