<?php /* Smarty version Smarty-3.0.7, created on 2016-07-14 18:00:35
         compiled from "/home/skilohx6/public_html/dev/themes/lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104495358957880b833c3522-48264104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '863e7828f92403719f28c65fef25d4c31b8670cc' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/lang.tpl',
      1 => 1468533434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104495358957880b833c3522-48264104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
                        <form name="langselect" id="langselect" method="post">                        
                            <select name="language" onChange="document.langselect.submit()" style="font-family: Tahoma, Verdana; font-size: 11px"> 
                                <option value="english" <?php if ($_SESSION['language']=="english"){?>selected<?php }?> >English</option> 
                                <option value="spanish" <?php if ($_SESSION['language']=="spanish"){?>selected<?php }?>>Español</option> 
                                <option value="french" <?php if ($_SESSION['language']=="french"){?>selected<?php }?>>Français</option> 
                                <option value="portuguese" <?php if ($_SESSION['language']=="portuguese"){?>selected<?php }?>>Português</option>
                                <option value="hebrew" <?php if ($_SESSION['language']=="hebrew"){?>selected<?php }?>>עברית</option>
                                <option value="german" <?php if ($_SESSION['language']=="german"){?>selected<?php }?>>Deutsch</option>
                                <option value="arabic" <?php if ($_SESSION['language']=="arabic"){?>selected<?php }?>>العربية</option>
                                <option value="chinese" <?php if ($_SESSION['language']=="chinese"){?>selected<?php }?>>中文</option>
                                <option value="russian" <?php if ($_SESSION['language']=="russian"){?>selected<?php }?>>русский</option>
                            </select>
                        </form>