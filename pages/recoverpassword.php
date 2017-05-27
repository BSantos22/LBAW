<?php
	/*==================================================*/
	/* Same for every page */
	include_once('../config/init.php');
	
	/* Redirect to previous page if already logged in */
	if ($_SESSION['id']) {
		header("location:javascript://history.go(-1)");
		exit;
	}
	
	include_once('../database/countries.php');
	include_once('../database/keywords.php');
	
	$countries = getAllCountries();
	$keywords = getAllKeywords();
	
	$smarty->assign('countries', $countries);
	$smarty->assign('keywords', $keywords);
	
	/*==================================================*/
	/* Change to files of each pages */
	$smarty->assign('css_file', 'recoverpassword.css');  
	$smarty->assign('js_file', 'common.js');
	$smarty->assign('page_title', 'Recover Password');
	
	/*==================================================*/

	$smarty->display('recoverpassword.tpl');
?>
