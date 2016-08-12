<?php /* Smarty version Smarty-3.0.7, created on 2016-08-07 06:56:50
         compiled from "/home/skilohx6/public_html/dev/themes/administrator/cat_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155365371957a713f22a0ae3-34027000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30dea07ae9686a3d5eaf6efb25f76ebfa6b1043a' => 
    array (
      0 => '/home/skilohx6/public_html/dev/themes/administrator/cat_add.tpl',
      1 => 1468533502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155365371957a713f22a0ae3-34027000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Categories</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="cat_manage.php" id="isoft_group_1" name="group_1" title="Manage Categories" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Categories
                                    </span>
        						</a>
                                <div id="isoft_group_1_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="cat_add.php" id="isoft_group_2" name="group_2" title="Add Category" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Add Category
                                    </span>
                                </a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_2_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Add Category</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

										<fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Parent Category </label></td>
                                                        <td class="value">
                                                        	<select id="parent" name="parent">
                                                            <option value="0">None</option>
                                                            <?php $_smarty_tpl->assign('cats' , insert_get_categories (array('value' => 'a'),$_smarty_tpl), true);?>
                                                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cats')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                            <option value="<?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['CATID'];?>
"><?php echo $_smarty_tpl->getVariable('cats')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
                                                            <?php endfor; endif; ?>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[IF YOU WANT THIS TO BE A SUB-CATEGORY, SELECT A PARENT CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Name </label></td>
                                                        <td class="value">
                                                        	<input id="name" name="name" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NAME OF THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">SEO Name </label></td>
                                                        <td class="value">
                                                        	<input id="seo" name="seo" value="<?php echo stripslashes($_REQUEST['seo']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NAME OF THE CATEGORY THAT WILL APPEAR ON URL'S, SLASHES ARE NOT ALLOWED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">Description </label></td>
                                                        <td class="value">
                                                        	<input id="details" name="details" value="<?php echo stripslashes($_REQUEST['details']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[DESCRIPTION OF THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="mtitle">Page Title </label></td>
                                                        <td class="value">
                                                        	<input id="mtitle" name="mtitle" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[PAGE TITLE FOR THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="mdesc">Meta Description </label></td>
                                                        <td class="value">
                                                        	<input id="mdesc" name="mdesc" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[META DESCRIPTION FOR THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="mtags">Meta Keywords </label></td>
                                                        <td class="value">
                                                        	<input id="mtags" name="mtags" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[META KEYWORDS FOR THE CATEGORY]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_featuredcat">Featured Category </label></td>
                                                        <td class="value">
                                                        	<select name="scriptolution_featuredcat" id="scriptolution_featuredcat">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected="selected">No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[FEATURE THIS CATEGORY ON THE HOMEPAGE?]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="cimage">Featured Category Image </label></td>
                                                        <td class="value">
                                                            <input type="file" id="cimage" name="cimage">
                                                        </td>
                                                        <td class="scope-label">[IMAGE OF THE CATEGORY TO SHOW UP IF FEATURED]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="bigimage">Big Category Image </label></td>
                                                        <td class="value">
                                                            <input type="file" id="bigimage" name="bigimage">
                                                        </td>
                                                        <td class="scope-label">[IMAGE SHOWN ON THE INDIVIDUAL CATEGORY PAGE]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_cattag1">Featured Category Tag #1</label></td>
                                                        <td class="value">
                                                        	<input id="scriptolution_cattag1" name="scriptolution_cattag1" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TAG THAT IS DISPLAYED UNDER THE FEATURED CATEGORY ON THE HOMEPAGE]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_cattag2">Featured Category Tag #2</label></td>
                                                        <td class="value">
                                                        	<input id="scriptolution_cattag2" name="scriptolution_cattag2" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TAG THAT IS DISPLAYED UNDER THE FEATURED CATEGORY ON THE HOMEPAGE]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="scriptolution_cattag3">Featured Category Tag #3</label></td>
                                                        <td class="value">
                                                        	<input id="scriptolution_cattag3" name="scriptolution_cattag3" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[TAG THAT IS DISPLAYED UNDER THE FEATURED CATEGORY ON THE HOMEPAGE]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
                                        
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </li>
    
						</ul>
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_2', []);
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
                               <h3 class="icon-head head-products">Categories - Add Category</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Submit</span></button>			
                                </p>
                            </div>
                            
                            <form action="cat_add.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div>