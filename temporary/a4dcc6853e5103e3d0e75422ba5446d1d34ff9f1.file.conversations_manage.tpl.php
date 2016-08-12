<?php /* Smarty version Smarty-3.0.7, created on 2016-07-15 03:59:16
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/conversations_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1599377116578897d412b817-08580472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4dcc6853e5103e3d0e75422ba5446d1d34ff9f1' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/conversations_manage.tpl',
      1 => 1468533504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1599377116578897d412b817-08580472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/skilohx6/public_html/dev/smarty/libs/plugins/modifier.truncate.php';
?><div class="middle" id="anchor-content">
    <div id="page:main-container">
        <div class="columns ">
            <div class="side-col" id="page:left">
            	<h3>Conversations</h3>
                <ul id="isoft" class="tabs">
                    <li >
                        <a href="conversations_manage.php" id="isoft_group_1" name="group_1" title="Manage Conversations" class="tab-item-link ">
                            <span>
                                <span class="changed" title=""></span>
                                <span class="error" title=""></span>
                                Manage Conversations
                            </span>
                        </a>
                        <div id="isoft_group_1_content" style="display:none;">
                            <div class="entry-edit">
                                <div class="entry-edit-head">
                                	<h4 class="icon-head head-edit-form fieldset-legend">Manage Conversations</h4>
                                	<div class="form-buttons">
                                	</div>
                                </div>
                                <div>
                                    <div id="customerGrid">
                                        <table cellspacing="0" class="actions">
                                            <tr>
                                                <td class="pager">
                                                Showing <?php if ($_smarty_tpl->getVariable('total')->value>0){?><?php echo $_smarty_tpl->getVariable('beginning')->value;?>
 - <?php echo $_smarty_tpl->getVariable('ending')->value;?>
 of <?php }?><?php echo $_smarty_tpl->getVariable('total')->value;?>
 Conversations
                                                </td>
                                            	<td class="export a-right"></td>
                                                <td class="filter-actions a-right">
                                                <button id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='conversations_manage.php'" style=""><span>Reset Filter</span></button>
                                                <button id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="grid">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="data" id="customerGrid_table">
                                                    <col width="50" width="100px" />
                                                    <col width="150" />
                                                    <col />
                                                    <col width="200" />
                                                    <thead>
                                                        <tr class="headings">
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=MID&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="MID"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&msgfrom=<?php echo $_smarty_tpl->getVariable('msgfrom')->value;?>
&msgto=<?php echo $_smarty_tpl->getVariable('msgto')->value;?>
&msg=<?php echo $_smarty_tpl->getVariable('msg')->value;?>
<?php }?>" name="id" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="MID"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Message ID</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=msgfrom&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="msgfrom"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&msgfrom=<?php echo $_smarty_tpl->getVariable('msgfrom')->value;?>
&msgto=<?php echo $_smarty_tpl->getVariable('msgto')->value;?>
&msg=<?php echo $_smarty_tpl->getVariable('msg')->value;?>
<?php }?>" name="msgfrom" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="msgfrom"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Sender</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=msgto&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="msgto"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&msgfrom=<?php echo $_smarty_tpl->getVariable('msgfrom')->value;?>
&msgto=<?php echo $_smarty_tpl->getVariable('msgto')->value;?>
&msg=<?php echo $_smarty_tpl->getVariable('msg')->value;?>
<?php }?>" name="msgto" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="msgto"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Receiver</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=msg&sorthow=<?php if ($_smarty_tpl->getVariable('sortby')->value=="msg"){?><?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php }?><?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&msgfrom=<?php echo $_smarty_tpl->getVariable('msgfrom')->value;?>
&msgto=<?php echo $_smarty_tpl->getVariable('msgto')->value;?>
&msg=<?php echo $_smarty_tpl->getVariable('msg')->value;?>
<?php }?>" name="msg" class="<?php if ($_smarty_tpl->getVariable('sortby')->value=="msg"){?>sort-arrow-<?php if ($_smarty_tpl->getVariable('sorthow')->value=="desc"){?>desc<?php }else{ ?>asc<?php }?><?php }else{ ?>not-sort<?php }?>"><span class="sort-title">Message</span></a></span></th>
                                                            <th class=" no-link last"><span class="nobr">Action</span></th>
                                                            </tr>
                                                            <tr class="filter">
                                                            <th >
                                                            <div class="range">
                                                            <div class="range-line">
                                                            <span class="label">From:</span>
                                                            <input type="text" name="fromid" id="fromid" value="<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
" class="input-text no-changes"/>
                                                            </div>
                                                            <div class="range-line">
                                                            <span class="label">To : </span>
                                                            <input type="text" name="toid" id="toid" value="<?php echo $_smarty_tpl->getVariable('toid')->value;?>
" class="input-text no-changes"/>
                                                            </div>
                                                            </div>
                                                            </th>
                                                            <th ><input type="text" name="msgfrom" id="msgfrom" value="<?php echo stripslashes($_smarty_tpl->getVariable('msgfrom')->value);?>
" class="input-text no-changes"/></th>
                                                            <th ><input type="text" name="msgto" id="msgto" value="<?php echo stripslashes($_smarty_tpl->getVariable('msgto')->value);?>
" class="input-text no-changes"/></th>
                                                            <th ><input type="text" name="msg" id="msg" value="<?php echo stripslashes($_smarty_tpl->getVariable('msg')->value);?>
" class="input-text no-changes"/></th>
                                                            <th class=" no-link last">
                                                            <div style="width: 100%;">&nbsp;</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('results')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                                                        <tr id="" >
                                                            <td align="center"><?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['MID'];?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['msgfrom']),30,"...",true);?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['msgto']),30,"...",true);?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['message']),200,"...",true);?>
</td>
                                                            <td class=" last"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->getVariable('currentpage')->value;?>
&sortby=<?php echo $_smarty_tpl->getVariable('sortby')->value;?>
&sorthow=<?php echo $_smarty_tpl->getVariable('sorthow')->value;?>
<?php if ($_smarty_tpl->getVariable('search')->value=="1"){?>&fromid=<?php echo $_smarty_tpl->getVariable('fromid')->value;?>
&toid=<?php echo $_smarty_tpl->getVariable('toid')->value;?>
&msgfrom=<?php echo $_smarty_tpl->getVariable('msgfrom')->value;?>
&msgto=<?php echo $_smarty_tpl->getVariable('msgto')->value;?>
&msg=<?php echo $_smarty_tpl->getVariable('msg')->value;?>
<?php }?>&delete=1&DMID=<?php echo $_smarty_tpl->getVariable('results')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['MID'];?>
">Delete Message</a></td>
                                                        </tr>
                                                        <?php endfor; endif; ?>
                                                        <tr>
                                                        <td colspan="5">
                                                        <?php echo $_smarty_tpl->getVariable('pagelinks')->value;?>

                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            <script type="text/javascript">
            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
            </script>
            </div>
            <div class="main-col" id="content">
                <div class="main-col-inner">
                    <div id="messages">
                    <?php if ($_smarty_tpl->getVariable('message')->value!=''||$_smarty_tpl->getVariable('error')->value!=''){?>
                    <?php $_template = new Smarty_Internal_Template("administrator/show_message.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <?php }?>
                    </div>
                
                    <div class="content-header">
                    	<h3 class="icon-head head-products">Conversations - Manage Conversations</h3>
                    </div>
                
                    <form action="conversations_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                        <input type="hidden" id="submitform" name="submitform" value="1" >
                        <div style="display:none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>