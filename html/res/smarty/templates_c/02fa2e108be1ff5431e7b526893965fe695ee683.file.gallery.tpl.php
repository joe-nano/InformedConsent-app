<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 16:43:51
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1352526f98b511b411-24750019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02fa2e108be1ff5431e7b526893965fe695ee683' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\gallery.tpl',
      1 => 1385469828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1352526f98b511b411-24750019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526f98b525c917_28029817',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'gall_title' => 0,
    'gall_desc' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f98b525c917_28029817')) {function content_526f98b525c917_28029817($_smarty_tpl) {?><div class="center_container">
	<div class="center">		
        	<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
            <h4 class="gall_title"><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h4>
            <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['gall_desc']->value;?>
</span>
            
            <ul class="gall_images">
    
            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
            <li>
            <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
" />
            </a>
            </li>      
            <?php } ?>
            
            </ul>  
    </div>   
</div><?php }} ?>