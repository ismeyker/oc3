<?php
class ControllerMenumanagerAddmenuitem extends Controller {
	private $error = array();



	public function index() {

		$this->load->language('menumanager/layout');
		$this->load->language('menumanager/addmenuitem');


    if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

    $page = ($page - 1) * $this->config->get('config_admin_limit');
    $limit = $this->config->get('config_admin_limit');



    // if(isset($this->request->get['menu_item_id'])){
    //     $this->load->model('menumanager/view');
    //     $menu_item = $this->model_menumanager_view->viewItem($this->request->get['menu_item_id']);

    //     $data['menu_item'] = $menu_item;

    //     if($menu_item['menu_id']){
    //         $menu_item_list = $this->model_menumanager_view->getMenuItem($menu_item['menu_id']);
    //         $data['menu_item_list'] = $menu_item_list;
    //     }

    // }



		$this->getList();
	}


	private function getList() {

    $this->load->model('menumanager/view');

    $menus = $this->model_menumanager_view->getMenu();
    $data['menus'] = $menus;

    $menus_items = $this->model_menumanager_view->getMenuItem();
    $data['menus_items'] = $menus_items;



    if(isset($this->request->get['menu_item_id'])){
        $this->load->model('menumanager/view');
        $menu_item = $this->model_menumanager_view->viewItem($this->request->get['menu_item_id']);

        $data['menu_item'] = $menu_item;

        if($menu_item['menu_id']){
            $menu_item_list = $this->model_menumanager_view->getMenuItem($menu_item['menu_id']);
            $data['menu_item_list'] = $menu_item_list;
        }

    }



		$url = '';


    if(isset($this->request->get['menu_item_id'])){
    	$data['heading_title'] = 'Редактирование пункта меню';
    }	else{
    	$data['heading_title'] = 'Добавление пункта меню';
    }


		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text'      => 'Список пунктов меню',
			'href' => $this->url->link('menumanager/viewitem', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);





 		$data['token'] = $this->session->data['user_token'];

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$url = '';

		$data['link_example'] = '';

    if(isset($menu_item['source_type']) and $menu_item['source_type']=='category'){
         $data['link_example'].= HTTP_CATALOG."index.php?route=product/category&path=";
    } else if(isset($menu_item['source_type']) and $menu_item['source_type']=='product'){
        $data['link_example'].= HTTP_CATALOG."index.php?route=product/product&product_id=";
    } else if(isset($menu_item['source_type']) and $menu_item['source_type']=='information'){
        $data['link_example'].= HTTP_CATALOG."index.php?route=information/information&information_id=";
    } else if(isset($menu_item['source_type']) and $menu_item['source_type']=='out'){
        $data['link_example'].= "";
    }  else if(isset($menu_item['source_type']) and $menu_item['source_type']=='main'){
        $data['link_example'].= HTTP_CATALOG;
    }



		$data['cancel'] = $this->url->link('menumanager/view', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['addmenu'] = $this->url->link('menumanager/addmenu') .'&'. 'user_token=' . $this->session->data['user_token'];
		$data['addmenuitem'] = $this->url->link('menumanager/addmenuitem') .'&'. 'user_token=' . $this->session->data['user_token'];
		$data['viewitem'] = $this->url->link('menumanager/viewitem', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['getmenuitem'] = $this->url->link('menumanager/getmenuitem') . '&' . 'user_token=' . $this->session->data['user_token'];
		$data['url_menu_list'] = $this->url->link('menumanager/view') .'&'. 'user_token=' . $this->session->data['user_token'];


		$data['add'] = $this->url->link('menumanager/add/addmenuitem') .'&'. 'user_token=' . $this->session->data['user_token'];

		$data['header'] 		 = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] 		 = $this->load->controller('common/footer');


		// echo '<pre>'; print_r($data); echo '</pre>';
		// exit();

		$this->response->setOutput($this->load->view('menumanager/add_menu_item', $data));


  }
}
?>