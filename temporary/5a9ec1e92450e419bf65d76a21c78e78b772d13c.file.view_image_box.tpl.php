<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:43:46
         compiled from "/home/skilohx6/public_html/dev/themes/view_image_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22141131357a710e2145ae1-83489440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9ec1e92450e419bf65d76a21c78e78b772d13c' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/view_image_box.tpl',
      1 => 1468533486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22141131357a710e2145ae1-83489440',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul id="carousel">
	<?php if ($_smarty_tpl->getVariable('p')->value['youtube']!=''){?><?php $_template = new Smarty_Internal_Template('view_vjs.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t3/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php if ($_smarty_tpl->getVariable('p')->value['p2']!=''){?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t3/<?php echo $_smarty_tpl->getVariable('p')->value['p2'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('p')->value['p3']!=''){?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t3/<?php echo $_smarty_tpl->getVariable('p')->value['p3'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php }?>
</ul>
