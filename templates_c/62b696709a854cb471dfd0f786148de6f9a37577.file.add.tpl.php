<?php /* Smarty version Smarty-3.0.8, created on 2017-01-18 17:02:27
         compiled from "./templates/add/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251271898587f524b9c9e78-29328029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b696709a854cb471dfd0f786148de6f9a37577' => 
    array (
      0 => './templates/add/add.tpl',
      1 => 1484738231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251271898587f524b9c9e78-29328029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_php')) include '/var/www/html/ravi/libs/plugins/block.php.php';
?>
<?php $_template = new Smarty_Internal_Template("user_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


 <div class="row" style="margin-left: 20px;">
<div class="col-lg-5">
	<div class="panel panel-primary" style="margin-top: 10px;">
		<div class="panel-heading">
                  Add 
        </div>

			<div class="panel-body" style="margin-left: 50px;">
				<form role="form" action="label.php?job=save" method="post" class="product" enctype="multipart/form-data">
					 
					<div class="row">
					<div class="col-lg-10">	
						<div class="form-group">
							<input class="form-control" name="label" value="<?php echo $_smarty_tpl->getVariable('label')->value;?>
" required placeholder="Label">
						</div>
					</div>
					</div>
					
					
					
					<div class="row">
					<div class="col-lg-8" >
						<?php if ($_smarty_tpl->getVariable('edit')->value=='on'){?>
							<button type="submit" name="ok" style="width: 150px; background: #3498db;" value="Update" class="btn btn-default">Update</button>
						<?php }else{ ?>
							<button type="submit" name="ok" style="width: 150px; background: #3498db;" value="Save" class="btn btn-default">Save</button>
						<?php }?>
					</div>
					</div>
	      		</form>
			</div>
	</div>	
</div>

 

<div class="col-lg-6" >
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
                  Labels
				</div>
                <div class="panel-body">

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; smarty_block_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
list_label();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_php(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </div>
                <div class="panel-footer">
                </div>
            </div>   
        
   </div>
 </div>


<?php $_template = new Smarty_Internal_Template("user_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
