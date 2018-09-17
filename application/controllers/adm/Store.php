<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-16
 * Time: 오후 2:45
 */
class Store extends  CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $view['admin_assets_path']='/assets';
        $view['menu_title']='업체관리';
        $view['page_title']='업체리스트';
        $view['menu_name']='store';
        $view['use_yn']='y';
        $this->load->view('layout/admin/header.php',$view);
        $this->load->view('page/admin/store.php',$view);
        $this->load->view('layout/admin/footer.php',$view);
    }
}