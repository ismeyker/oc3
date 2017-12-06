<?php
class ControllerMenumanagerAddmenu extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('menumanager/layout');
		$this->load->language('menumanager/addmenu');

		$this->document->setTitle($this->language->get('heading_title'));

	  if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

    $page = ($page - 1) * $this->config->get('config_admin_limit');
    $limit = $this->config->get('config_admin_limit');


    // if(isset($this->request->get['menu_id'])){
    //     $this->load->model('menumanager/view');
    //     $menuInfo = $this->model_menumanager_view->viewMenuInfo($this->request->get['menu_id']);

    //     $data['menuInfo'] = $menuInfo;
    // }

		$this->getList();
	}


	private function getList() {
		$url = '';


		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('menumanager/addmenu', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['heading_title'] = 'Добавление меню';


    if(isset($this->request->get['menu_id'])){
        $this->load->model('menumanager/view');
        $menuInfo = $this->model_menumanager_view->viewMenuInfo($this->request->get['menu_id']);

        $data['menuInfo'] = $menuInfo;
        $data['heading_title'] = 'Редактирование меню';
    }


		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_image_manager'] = $this->language->get('text_image_manager');

		$data['column_image'] = $this->language->get('column_image');
		$data['column_name'] = $this->language->get('column_name');
		$data['column_model'] = $this->language->get('column_model');
		$data['column_price'] = $this->language->get('column_price');
		$data['column_quantity'] = $this->language->get('column_quantity');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_copy'] = $this->language->get('button_copy');
		$data['button_insert'] = $this->language->get('button_insert');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_filter'] = $this->language->get('button_filter');

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




		$data['cancel'] = $this->url->link('menumanager/view', 'user_token=' . $this->session->data['user_token'] . $url, true);
		// $data['addmenu'] = $this->url->link('menumanager/add/addmenu', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['addmenu'] = $this->url->link('menumanager/add/addmenu') .'&'. 'user_token=' . $this->session->data['user_token'];
		$data['url_menu_list'] = $this->url->link('menumanager/view', 'user_token=' . $this->session->data['user_token'] . $url, true);


		$data['header'] 		 = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] 		 = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('menumanager/add_menu', $data));
	}

}
?>