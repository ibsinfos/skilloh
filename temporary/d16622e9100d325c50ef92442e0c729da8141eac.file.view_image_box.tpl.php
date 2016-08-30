<?php /* Smarty version Smarty-3.0.7, created on 2016-08-24 02:47:33
         compiled from "C:/wamp/www/GIT/skilloh/themes\view_image_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2468957bd430562b127-06701758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16622e9100d325c50ef92442e0c729da8141eac' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\view_image_box.tpl',
      1 => 1471688044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2468957bd430562b127-06701758',
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
