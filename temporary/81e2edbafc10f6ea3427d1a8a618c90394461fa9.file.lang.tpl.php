<?php /* Smarty version Smarty-3.0.7, created on 2016-08-21 16:21:48
         compiled from "C:/wamp/www/GIT/skilloh/themes\lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2379257ba0d5c484064-47941046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81e2edbafc10f6ea3427d1a8a618c90394461fa9' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\lang.tpl',
      1 => 1471688043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2379257ba0d5c484064-47941046',
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