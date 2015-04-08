<?php
$img_dir = "../../project_img/";
$code_dir = "../../code/";
$img_file = $img_dir . basename($_FILES["project_image"]["name"]);
$code_file = $code_dir . basename($_FILES["source_code"]["name"]);

if(file_exists($img_file)){
	unlink($img_file);
}

if(file_exists($code_file)) {
	unlink($code_file);
}

if(move_uploaded_file($_FILES["project_image"]["tmp_name"], $img_file) && 
		move_uploaded_file($_FILES["source_code"]["tmp_name"], $code_file)) {
	echo("In XML stage...");
	$project_xml = "../../xml/projects.xml";
	$name = $_POST["name"];
	$base_url = "http://" . $_SERVER["SERVER_NAME"];
	$img_url = $baseurl . "/project_img/" . $_FILES["project_image"]["name"];
	$code_url = $baseurl . "/code/" . $_FILES["source_code"]["name"];
	$url = $_POST["url"];
	$description = $_POST["description"];
	if(!file_exists($project_xml)) { //creates new XML document
		$xmlelem = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><entries></entries>');
		$xmlelem->asXML($project_xml);
	}
	
	echo("Done creating XML document.");
	$sxml = simplexml_load_file($project_xml);
	$entry = $sxml->addChild("entry");
	$entry->addChild("name",$name);
	$entry->addChild("imgurl",$img_url);
	$entry->addChild("codeurl",$code_url);
	$entry->addChild("url",$url);
	$entry->addChild("description",$description);
	$sxml->asXML($project_xml);
	echo("Added XML entry!");
}