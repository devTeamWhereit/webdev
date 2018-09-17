<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whereit | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?=$admin_assets_path?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?=$admin_assets_path?>/dist/css/default.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function banner_insert_plus () {
            $('.plus-btn').remove();
            var banner_num= Number($('#default_banner_num').val());

            banner_num=banner_num+1;
            var html='';
            html +=  '<div class="form-group">' +
                '<label class="control-label col-md-2">banner'+banner_num+'</label>' +
                '<div class="col-md-6">' +
                '<input type="text" name="banner31" class="form-control" placeholder="URL">' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label class="control-label col-md-2">&nbsp;</label>' +
                '<div class="col-md-6">' +
                '<input type="text" name="banner32" class="form-control" placeholder="파일명">' +
                '</div>' +
                '<div class="col-md-4">' +
                '<button type="button" class="btn btn-default">첨부</button>' +
                '<button type="button" class="btn btn-primary">적용</button>' +
                '<button type="button" class="btn btn-danger">삭제</button>' +
                '<button type="button" class="btn btn-info plus-btn" onclick="banner_insert_plus()">추가</button>' +
                '</div>' +
                '</div>';
            $('#banner_form').append(html);
            $('#default_banner_num').val(banner_num);
        }
    </script>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition sidebar-mini skin-black-light">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>DM</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>whereit</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <!--                <li class="header">MAIN NAVIGATION</li>-->
                <li class="<?=$menu_name=='member_list'?'active':''?> ">
                    <a href="/index.php/admin">
                        <i class="fa fa-user-o"></i> <span>회원관리</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="<?=$menu_name=='banner'?'active':''?> ">
                    <a href="/index.php/adm/bannersch">
                        <i class="fa fa-image"></i> <span>베너관리</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="<?=$menu_name=='store'?'active':''?>">
                    <a href="/index.php/adm/store">
                        <i class="fa fa-map-o"></i> <span>업체관리</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-ol"></i> <span>랭킹관리</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-copy"></i> <span>컨텐츠관리</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-ul"></i> <span>블랙리스트</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-question-circle"></i> <span>문의확인</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header <?=$use_yn=='n'?'hidden':''?>">
            <h1>
                <?=$menu_title?>
<!--                <small>--><?//=$page_title?><!--</small>-->
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"></i> Home</a></li>
                <li class="active"> <?=$menu_title?></li>
            </ol>
        </section>

        <!-- Main content -->