<?php
require_once 'conf/smarty-conf.php';
include 'functions/label_functions.php';

	
		if ($_REQUEST['job'] == 'save') {
			if($_REQUEST['ok']=='Save'){
				
				$label = $_POST['label'];
				save_label($label);
				
				$smarty->assign('page', "Label");
				$smarty->display('add/add.tpl');
			}
			
			else {
				$id = $_SESSION['label_id'];
				$label = $_POST['label'];
	
				update_label($id, $label);
				
				$smarty->assign('page', "Label");
				$smarty->display('add/add.tpl');
			}
		}
		elseif ($_REQUEST['job']=='edit'){
			$info=get_label_info($_REQUEST['id']);
			$_SESSION['label_id']=$_REQUEST['id'];
		
			$smarty->assign('label',$info['label']);			

			$smarty->assign('edit_mode',"on");
			$smarty->assign('page', "Label");
			$smarty->display('add/add.tpl');
		}
		elseif ($_REQUEST['job']=='delete'){
			delete_label($_REQUEST['id']);
		
			$smarty->assign('page', "Label");
			$smarty->display('add/add.tpl');
		}
		
		else{
			$smarty->assign('page', "Label");
			$smarty->display('add/add.tpl');
		}

	

