<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-30 15:06:03
         compiled from "DB\style\notfound404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1546155e1d2ea32d495-23450318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f1a9d00003794b12efa9f8f247e5768050a558' => 
    array (
      0 => 'DB\\style\\notfound404.tpl',
      1 => 1440939961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546155e1d2ea32d495-23450318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e1d2ea52da68_20459899',
  'variables' => 
  array (
    'description' => 0,
    'keyword' => 0,
    'base' => 0,
    'title' => 0,
    'title_text' => 0,
    'style_url' => 0,
    'notFound' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e1d2ea52da68_20459899')) {function content_55e1d2ea52da68_20459899($_smarty_tpl) {?><!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <meta name="author" content="AliReza Ghadimi">
    <meta name="keyword" content="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <link rel="shortcut icon" href="img/favicon.html">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['title_text']->value;?>
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

<body class="body-404">

<div class="container">

    <section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>404</h1>
        <h2 dir="ltr"><?php echo $_smarty_tpl->tpl_vars['notFound']->value;?>
</h2>
        <p dir="ltr" class="page-404">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </p>
    </section>

</div>


</body>
</html><?php }} ?>
