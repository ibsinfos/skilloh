<?php /* Smarty version Smarty-3.0.7, created on 2016-08-24 02:47:31
         compiled from "C:/wamp/www/GIT/skilloh/themes\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2818457bd4303a92b93-16725094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec25ad40986e0cecc7f0ac5be11e82fb5a898e2f' => 
    array (
      0 => 'C:/wamp/www/GIT/skilloh/themes\\view.tpl',
      1 => 1471688044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2818457bd4303a92b93-16725094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\wamp\www\GIT\skilloh\smarty\libs\plugins\modifier.replace.php';
?><link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/bxslider/jquery.bxslider.css" />
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/jquery.customSelect.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/js/bxslider/jquery.bxslider.js"></script>

<script>
	$(document).ready(function(){
		sQuery('#carousel').bxSlider();
		sQuery('.scriptolutionpopup').click(function(event) {
			var width  = 575,
				height = 450,
				left   = (sQuery(window).width()  - width)  / 2,
				top    = (sQuery(window).height() - height) / 2,
				url    = this.href,
				opts   = 'status=1' +
						 ',width='  + width  +
						 ',height=' + height +
						 ',top='    + top    +
						 ',left='   + left;
			window.open(url, 'scriptolutionwindow', opts);
			return false;
		  });
	});
</script>

<?php $_template = new Smarty_Internal_Template("scriptolution_error7.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->getVariable('p')->value['gtitle']),$_smarty_tpl), true);?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop50">
		<div class="inner-wrapper">
			<div class="contentArea">
				<h1><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?></h1>
                <?php if ($_smarty_tpl->getVariable('enablescriptolutionlocations')->value=="1"){?><?php if ($_smarty_tpl->getVariable('p')->value['scriptolutionjoblocation']!=''){?>
                <div class="gig-scriptolutionlocation"><i class="fa fa-map-marker"></i> <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['scriptolutionjoblocation']);?>
</div>
                <?php }?><?php }?>
				<div class="gig-meta"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang360')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang360')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang360')->value));?>
 <?php echo ((mb_detect_encoding(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['time_added'],"%A %B %e %Y"), 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['time_added'],"%A %B %e %Y"),SMARTY_RESOURCE_CHAR_SET) : strtoupper(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['time_added'],"%A %B %e %Y")));?>
, <?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang119')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang119')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang119')->value));?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
"><?php echo ((mb_detect_encoding(stripslashes($_smarty_tpl->getVariable('p')->value['name']), 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper(stripslashes($_smarty_tpl->getVariable('p')->value['name']),SMARTY_RESOURCE_CHAR_SET) : strtoupper(stripslashes($_smarty_tpl->getVariable('p')->value['name'])));?>
</a></div>
				<div class="gig-social">
					<div class="left">
						<ul class="social">
                        	<?php $_smarty_tpl->assign('takento' , insert_get_short_url (array('value' => 'a', 'PID' => $_smarty_tpl->getVariable('p')->value['PID'], 'seo' => $_smarty_tpl->getVariable('p')->value['seo'], 'short' => $_smarty_tpl->getVariable('posts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['short'], 'title' => $_smarty_tpl->getVariable('title')->value),$_smarty_tpl), true);?>
							<li><a href="https://www.facebook.com/dialog/feed?app_id=<?php echo $_smarty_tpl->getVariable('FACEBOOK_APP_ID')->value;?>
&display=popup&link=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('p')->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
&picture=<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
&name=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>&description=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>&redirect_uri=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('p')->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" class="facebook scriptolutionpopup"><span class="hide">Facebook</span></a></li>
							<li><a href="https://twitter.com/share?url=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo smarty_modifier_replace(stripslashes($_smarty_tpl->getVariable('p')->value['seo']),' ','+');?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
&amp;text=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>" class="twitter scriptolutionpopup"><span class="hide">Twitter</span></a></li>
							<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
&media=<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t2/<?php echo $_smarty_tpl->getVariable('p')->value['p1'];?>
&description=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>" class="pinterest scriptolutionpopup"><span class="hide">Pinterest</span></a></li>
							<li><a href="mailto:?subject=<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>&amp;body=<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" class="scriptolutionemail"><span class="hide">E-Mail</span></a></li>
                            <li><g:plusone size="medium" count="false" href="<?php echo $_smarty_tpl->getVariable('takento')->value;?>
"></g:plusone></li>
                            <li>
                                <a class="addthis_button" addthis:url="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
/<?php echo $_smarty_tpl->getVariable('title')->value;?>
" addthis:title="<?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['price']);?>
<?php }?>" href="https://www.addthis.com/bookmark.php?v=250&amp;pub="><img src="https://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share"></a>
                                
                                <script type="text/javascript">
                                var addthis_config = {
                                    services_exclude: 'email, facebook, twitter, print'
                                }
                                </script>
                                <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pub="></script>
                                
                            </li>
                        </ul>
					</div>
                    <?php if ($_SESSION['USERID']!=''){?>                     
                    
                    <script language="javascript" type="text/javascript">
                    sQuery(document).ready(function() {
                        sQuery('#scriptolution_heart_<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
').click(function() {
                        	sQuery.post('<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
&do=add', sQuery(this).serialize(),function(data){
								sQuery('#sbookmark1').hide();
								sQuery('#sbookmark2').show();
                        	});
                        	return false;
                        });
						
						sQuery('#scriptolution_unheart_<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
').click(function() {
                        	sQuery.post('<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/bookmark?id=<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['PID']);?>
&do=rem', sQuery(this).serialize(),function(data){
								sQuery('#sbookmark2').hide();
								sQuery('#sbookmark1').show();
                        	});
                        	return false;
                        });
                    });
                    </script>
                    
                    <?php $_smarty_tpl->assign('liked' , insert_like_cnt (array('value' => 'var', 'pid' => $_smarty_tpl->getVariable('p')->value['PID']),$_smarty_tpl), true);?>
                    <div class="right">
						<dl id="bookmark" class="dropdown cleanStyle">
							<dt id="sbookmark1" <?php if ($_smarty_tpl->getVariable('liked')->value=="1"){?>style="display:none;"<?php }?>><a class="tooltip" title="<?php echo $_smarty_tpl->getVariable('lang574')->value;?>
" href="javascript(void);" id="scriptolution_heart_<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
"><span><i class="icon-red-heart"></i></span></a></dt>
                            <dt id="sbookmark2" <?php if ($_smarty_tpl->getVariable('liked')->value!="1"){?>style="display:none;"<?php }?>><a class="tooltip" title="<?php echo $_smarty_tpl->getVariable('lang574')->value;?>
" href="javascript(void);" id="scriptolution_unheart_<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
"><span><i class="icon-white-heart"></i></span></a></dt>
						</dl>
					</div>
                    <?php }else{ ?>
                    <div class="right scriptolutionbookmark">
                    	<a class="tooltip" title="<?php echo $_smarty_tpl->getVariable('lang574')->value;?>
" href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login"><span><i class="icon-white-heart"></i></span></a>
                    </div>
                    <?php }?>
				</div>
				<div class="clear"></div>
                <?php $_template = new Smarty_Internal_Template('view_image_box.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
				<div class="gig-description" <?php if ($_smarty_tpl->getVariable('rtl')->value!="1"){?>align="left"<?php }?>>
					<p <?php if ($_smarty_tpl->getVariable('rtl')->value=="1"){?>class="scriptolutionrtl"<?php }else{ ?>align="left"<?php }?> style="overflow: hidden;"><?php echo html_entity_decode(stripslashes($_smarty_tpl->getVariable('p')->value['gdesc']),@ENT_QUOTES,'utf-8');?>
</p>
                    <?php if ($_smarty_tpl->getVariable('p')->value['youtube']!=''){?><?php $_template = new Smarty_Internal_Template('view_yt.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
				</div>
                <?php $_template = new Smarty_Internal_Template('view_extra.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
                <div id="scriptolutionbarnreviews">
                    <div class="scriptolutionbar">
                        <div class="whiteBox inside">
                            <div class="block inside">
                                <span class="number"><?php echo $_smarty_tpl->getVariable('grat')->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->getVariable('lang476')->value;?>
</span>
                            </div>
                            <div class="block inside">
                                <span class="number"><?php echo $_smarty_tpl->getVariable('brat')->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->getVariable('lang477')->value;?>
</span>
                            </div>
                            <div class="block inside last">
                                <span class="number"><?php echo $_smarty_tpl->getVariable('ftot')->value;?>
</span>
                                <span class="descr"><?php echo $_smarty_tpl->getVariable('lang478')->value;?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="gig-reviews">
                        <div class="left">
                            <h2><?php echo $_smarty_tpl->getVariable('lang143')->value;?>
</h2>
                        </div>
                        <div class="right">
                        </div>
                        <div class="clear"></div>
                        <ul class="gig-reviews-list">
                            <?php if (count($_smarty_tpl->getVariable('f')->value)>0){?>
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('f')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <li>
                                <?php if ($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['good']=="1"){?>
                                <span class="thumbsUp"></span>
                                <?php }else{ ?>
                                <span class="thumbsDown"></span>
                                <?php }?>
                                <?php $_smarty_tpl->assign('fprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                <span class="review-avatar"><img src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('fprofilepicture')->value;?>
" /></span>
                                <span class="comment">
                                    <span class="comment-meta"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a></span>
                                    <span class="comment-comment">
                                        <?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment']);?>
								
                                    </span>
                                </span>
                            </li>
                            <?php endfor; endif; ?>
                            <?php }?>
                        </ul>
                        <!-- <p class="centerMe"><a href="#" class="whiteBtn"><span></span></a></p> -->
                    </div>	                
                	<?php $_template = new Smarty_Internal_Template('scriptolution_bit_related.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </div>
			</div>
			
			<div class="sidebarArea">
				<?php $_template = new Smarty_Internal_Template('scriptolution_order_selection.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>				
				<ul class="gig-details">
					<li class="gig-rating">
                    	<?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_rating_stars_big (array('value' => 'a', 'scriptolutionpid' => $_smarty_tpl->getVariable('p')->value['PID']),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('scriptolutionstars')->value;?>

					</li>
					<li>
						<span class="rating-positive">
							<?php if (count($_smarty_tpl->getVariable('f')->value)=="0"){?><?php echo $_smarty_tpl->getVariable('lang471')->value;?>
<?php }else{ ?><?php $_smarty_tpl->assign('percent' , insert_get_rating (array('value' => 'a', 'b' => $_smarty_tpl->getVariable('brat')->value, 'g' => $_smarty_tpl->getVariable('grat')->value),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('percent')->value;?>
&#37;<?php }?>
							<span class="label"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang568')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang568')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang568')->value));?>
</span>
						</span>
						<span class="rating-middle">
							<?php echo $_smarty_tpl->getVariable('lang414')->value;?>

						</span>
						<span class="rating-votes">
							<?php echo $_smarty_tpl->getVariable('scriptolutiontotalvotes')->value;?>

							<span class="label"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang569')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang569')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang569')->value));?>
</span>
						</span>
					</li>
                    <?php if ($_smarty_tpl->getVariable('p')->value['days']=="0"){?>
                    <?php $_template = new Smarty_Internal_Template('view_instant.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <?php }else{ ?>
					<li>
						<i class="icon-clock"></i>
						<span class="big"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['days']);?>
</span>
						<span class="small"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang131')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang131')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang131')->value));?>
<br/><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang474')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang474')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang474')->value));?>
</span>
					</li>
                    <?php }?>
					<li>
						<i class="icon-queue"></i>
						<span class="big"><?php echo $_smarty_tpl->getVariable('quecount')->value;?>
</span>
						<span class="small"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang475')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang475')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang475')->value));?>
<br/><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang473')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang473')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang473')->value));?>
</span>
					</li>
					<li class="small"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang576')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang576')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang576')->value));?>
</li>
				</ul>
				<div class="clear"></div>				
				<div class="profile-info">
					<?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('p')->value['USERID']),$_smarty_tpl), true);?>
					<div class="profile-avatar"><img src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('profilepicture')->value;?>
?<?php echo time();?>
" width="50px" height="50px" /></div>
					<div class="user-info">
						<h3><?php echo $_smarty_tpl->getVariable('lang414')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('p')->value['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
</a></h3>
						<h4>
							<?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang573')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang573')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang573')->value));?>
: <?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->getVariable('p')->value['country']),$_smarty_tpl), true);?><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('userc')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('userc')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('userc')->value));?>

							<br/>
							<?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang572')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang572')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang572')->value));?>
: <?php echo ((mb_detect_encoding(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['addtime'],"%B %e %Y"), 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['addtime'],"%B %e %Y"),SMARTY_RESOURCE_CHAR_SET) : strtoupper(smarty_modifier_date_format($_smarty_tpl->getVariable('p')->value['addtime'],"%B %e %Y")));?>

							<span class="countryflag"><span class="country <?php echo $_smarty_tpl->getVariable('p')->value['country'];?>
"></span></span>
						</h4>
					</div>
					<div class="user-language">
                    	<?php if ($_SESSION['USERID']!=$_smarty_tpl->getVariable('p')->value['USERID']){?>
                        <?php if ($_SESSION['USERID']>"0"){?>
						<strong><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('p')->value['username'])),$_smarty_tpl), true);?><?php echo $_smarty_tpl->getVariable('cvseo')->value;?>
?id=<?php echo $_smarty_tpl->getVariable('p')->value['PID'];?>
"><?php echo $_smarty_tpl->getVariable('lang142')->value;?>
</a></strong>
                        <?php }else{ ?>
                        <strong><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl2' , insert_get_redirect2 (array('value' => 'a', 'uname' => $_smarty_tpl->getVariable('p')->value['username'], 'pid' => $_smarty_tpl->getVariable('p')->value['PID']),$_smarty_tpl), true);?><?php echo stripslashes($_smarty_tpl->getVariable('rurl2')->value);?>
"><?php echo $_smarty_tpl->getVariable('lang142')->value;?>
</a></strong>
                        <?php }?>
                        <?php }?>
					</div>
                    <?php $_smarty_tpl->assign('mpercent' , insert_get_percent (array('value' => 'a', 'userid' => $_smarty_tpl->getVariable('p')->value['USERID']),$_smarty_tpl), true);?>
                    <div style="clear:both; padding-top:15px;"></div>
					<div class="user-level">
                    	<?php if ($_smarty_tpl->getVariable('enable_levels')->value=="1"){?>
                        	<?php if ($_smarty_tpl->getVariable('p')->value['level']=="1"){?>
							<img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_level1.png" />
                            <?php }elseif($_smarty_tpl->getVariable('p')->value['level']=="2"){?>
							<img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_level2.png" />
                            <?php }elseif($_smarty_tpl->getVariable('p')->value['level']=="3"){?>
							<img src="<?php echo $_smarty_tpl->getVariable('imageurl')->value;?>
/scriptolution_level3.png" />
                            <?php }?>
                        <?php }?>
						<span class="big"><?php if ($_smarty_tpl->getVariable('mpercent')->value!=''){?><?php echo $_smarty_tpl->getVariable('mpercent')->value;?>
&#37;<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang471')->value;?>
<?php }?></span>
						<span class="small"><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang570')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang570')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang570')->value));?>
<br/><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('lang571')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('lang571')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('lang571')->value));?>
</span>
					</div>
				</div>
				<div class="clear"></div>
				<div class="relatedTopics">
					<h3><?php echo $_smarty_tpl->getVariable('lang76')->value;?>
</h3>
					<ul class="tags">
                    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tags')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <li><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/tags/<?php echo stripslashes($_smarty_tpl->getVariable('p')->value['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]);?>
</a></li>
                        <?php endfor; endif; ?>
					</ul>
				</div>				
				<div class="sidebarAds">
					<center><?php echo insert_get_advertisement(array('AID' => 5),$_smarty_tpl);?>
</center>
				</div>
			</div>
            
            
            
            
            <div id="scriptolutionbarnreviewsmobile">
            	<div class="contentArea">
                	<div>
                        <div class="scriptolutionbar">
                            <div class="whiteBox inside">
                                <div class="block inside">
                                    <span class="number"><?php echo $_smarty_tpl->getVariable('grat')->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->getVariable('lang476')->value;?>
</span>
                                </div>
                                <div class="block inside">
                                    <span class="number"><?php echo $_smarty_tpl->getVariable('brat')->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->getVariable('lang477')->value;?>
</span>
                                </div>
                                <div class="block inside last">
                                    <span class="number"><?php echo $_smarty_tpl->getVariable('ftot')->value;?>
</span>
                                    <span class="descr"><?php echo $_smarty_tpl->getVariable('lang478')->value;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="gig-reviews">
                            <div class="left">
                                <h2><?php echo $_smarty_tpl->getVariable('lang143')->value;?>
</h2>
                            </div>
                            <div class="right">
                            </div>
                            <div class="clear"></div>
                            <ul class="gig-reviews-list">
                                <?php if (count($_smarty_tpl->getVariable('f')->value)>0){?>
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('f')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <li>
                                    <?php if ($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['good']=="1"){?>
                                    <span class="thumbsUp"></span>
                                    <?php }else{ ?>
                                    <span class="thumbsDown"></span>
                                    <?php }?>
                                    <?php $_smarty_tpl->assign('fprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                                    <span class="review-avatar"><img src="<?php echo $_smarty_tpl->getVariable('membersprofilepicurl')->value;?>
/thumbs/<?php echo $_smarty_tpl->getVariable('fprofilepicture')->value;?>
" /></span>
                                    <span class="comment">
                                        <span class="comment-meta"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username']);?>
</a></span>
                                        <span class="comment-comment">
                                            <?php echo stripslashes($_smarty_tpl->getVariable('f')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment']);?>
								
                                        </span>
                                    </span>
                                </li>
                                <?php endfor; endif; ?>
                                <?php }?>
                            </ul>
                            <!-- <p class="centerMe"><a href="#" class="whiteBtn"><span></span></a></p> -->
                        </div>	                
                        <?php $_template = new Smarty_Internal_Template('scriptolution_bit_related.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    </div>
                </div>
            </div>
            
            
            
            
            			
			<div class="clear"></div>
			<div class="more-user-gigs">
				<h3><?php echo $_smarty_tpl->getVariable('lang137')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('p')->value['username']);?>
</h3>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('u')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="user-gig <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%5==0){?>last<?php }?>">
					<div class="gig-thumb">
						<a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('utitle')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('purl')->value;?>
/t/<?php echo $_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p1'];?>
" width="180" height="112" /></a>
					</div>
					<span class="user-gig-excerpt"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['PID']);?>
/<?php echo $_smarty_tpl->getVariable('utitle')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang62')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gtitle']);?>
 <?php if ($_smarty_tpl->getVariable('scriptolution_cur_pos')->value=="1"){?><?php echo $_smarty_tpl->getVariable('lang589')->value;?>
 <?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php echo $_smarty_tpl->getVariable('lang197')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang63')->value;?>
<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price']);?>
<?php }?></a></span>
                    <br />
                    <span class="user-cat"><a href="<?php echo $_smarty_tpl->getVariable('baseurl')->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->getVariable('u')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</a></span>
				</div>
				<?php endfor; endif; ?>				
			</div>
		</div>    
	</div>
</div>