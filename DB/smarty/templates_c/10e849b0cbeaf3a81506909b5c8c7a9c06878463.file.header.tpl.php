<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-29 16:51:04
         compiled from "DB\style\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:823855e04f7e886a31-70238351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e849b0cbeaf3a81506909b5c8c7a9c06878463' => 
    array (
      0 => 'DB\\style\\header.tpl',
      1 => 1440859862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '823855e04f7e886a31-70238351',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e04f7e92e976_24168937',
  'variables' => 
  array (
    'description' => 0,
    'keyword' => 0,
    'style_url' => 0,
    'title' => 0,
    'main_url' => 0,
    'side_menu' => 0,
    'property' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e04f7e92e976_24168937')) {function content_55e04f7e92e976_24168937($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <meta name="author" content="AliReza Ghadimi">
    <meta name="keyword" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
img/favicon.html">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
css/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/respond.min.js"><?php echo '</script'; ?>
>
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;?>
" class="logo" ><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></a>
        <!--logo end-->
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
img/avatar1_small.jpg">
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
                <?php  $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['property']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['side_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['property']->key => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['property']->key;
?>
                    <li class="">
                        <a class="" href="<?php echo $_smarty_tpl->tpl_vars['main_url']->value;
echo $_smarty_tpl->tpl_vars['property']->value[0];?>
">
                            <i class="<?php echo $_smarty_tpl->tpl_vars['property']->value[1];?>
"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start--><?php }} ?>
