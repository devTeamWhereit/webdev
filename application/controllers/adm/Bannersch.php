<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-12
 * Time: 오후 8:07
 */
class Bannersch extends  CI_Controller {

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
        $view['menu_title']='배너관리';
        $view['page_title']='배너검색';
        $view['menu_name']='banner';
        $view['use_yn']='n';
        $this->load->view('layout/admin/header.php',$view);
        $this->load->view('page/admin/bannersch.php',$view);
        $this->load->view('layout/admin/footer.php',$view);
    }
}