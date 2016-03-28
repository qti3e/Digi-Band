<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-28 14:09:34
         compiled from "DB\style\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3004455e04f7e9eeba1-21979822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7959c721ac8aa6b4abd35d048e00ea19f6e20040' => 
    array (
      0 => 'DB\\style\\footer.tpl',
      1 => 1440751285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3004455e04f7e9eeba1-21979822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e04f7ea222a3_60771086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e04f7ea222a3_60771086')) {function content_55e04f7ea222a3_60771086($_smarty_tpl) {?>     <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/jquery.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
assets/morris.js-0.4.3/morris.min.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
assets/chart-master/Chart.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
assets/jquery-knob/js/jquery.knob.js"><?php echo '</script'; ?>
>


     <!--common script for all pages-->
<?php echo '<script'; ?>
 src="js/common-scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/javascript">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/all-chartjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['style_url']->value;?>
js/sparkline-chart.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    //knob
    $(".knob").knob();

<?php echo '</script'; ?>
>


</body>
</html><?php }} ?>
