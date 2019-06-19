<?php

if(isset($_GET['lang']) && $_GET['lang'] != "pt"){
	
	if($_GET['lang'] == "en"){
		
		#include "content/vegetables/".$_GET['lang']."_us/home.php";
		header("Location: content/vegetables/".$_GET['lang']."_us/home.php?lang=en");
		
	}else if($_GET['lang'] == "es"){
	
		#include "content/vegetables/".$_GET['lang']."_ve/home.php";
		header("Location: content/vegetables/".$_GET['lang']."_ve/home.php?lang=es");
	
	}
	
}else{
	#include "content/vegetables/pt_br/home.php";
	header('Location: content/vegetables/pt_br/home.php');
	#include "mantenimiento.html";

}

?>
