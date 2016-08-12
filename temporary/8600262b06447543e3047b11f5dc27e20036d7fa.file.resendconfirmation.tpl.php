<?php /* Smarty version Smarty-3.0.7, created on 2016-08-03 00:15:16
         compiled from "/home/skilohx6/public_html/dev/themes/resendconfirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57047027457a16fd4587100-85106965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8600262b06447543e3047b11f5dc27e20036d7fa' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/resendconfirmation.tpl',
      1 => 1468533446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57047027457a16fd4587100-85106965',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  <?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
                    <div class='flash_notice'>
                        <p><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p>
                    </div>
                  <?php }?>
                        
                  </div>
                  
                  <?php $_template = new Smarty_Internal_Template("side2.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>