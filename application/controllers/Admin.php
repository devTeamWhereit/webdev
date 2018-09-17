<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-12
 * Time: 오후 8:07
 */
class Admin extends  CI_Controller {

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
        $view['menu_title']='회원관리';
        $view['page_title']='회원리스트';
        $view['menu_name']='member_list';
        $view['use_yn']='y';
        $this->load->view('layout/admin/header.php',$view);
        $this->load->view('layout/admin/index.php',$view);
        $this->load->view('layout/admin/footer.php',$view);
    }
}