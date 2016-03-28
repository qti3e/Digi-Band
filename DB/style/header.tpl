<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$description}">
    <meta name="author" content="AliReza Ghadimi">
    <meta name="keyword" content="{$keyword}">
    <link rel="shortcut icon" href="{$style_url}img/favicon.html">
    <title>{$title}</title>

    <!-- Bootstrap core CSS -->
    <link href="{$style_url}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$style_url}css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{$style_url}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{$style_url}css/style.css" rel="stylesheet">
    <link href="{$style_url}css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{$style_url}js/html5shiv.js"></script>
    <script src="{$style_url}js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="{$main_url}" class="logo" ><span>{$title}</span></a>
        <!--logo end-->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{$style_url}img/avatar1_small.jpg">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                {foreach $side_menu as $name => $property}
                    <li class="">
                        <a class="" href="{$main_url}{$property.0}">
                            <i class="{$property.1}"></i>
                            <span>{$name}</span>
                        </a>
                    </li>
                {/foreach}
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->