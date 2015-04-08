<?php
	$project_xml = "../xml/projects.xml";
	$entries = simplexml_load_file($project_xml);
	foreach($entries->entry as $entry) {
		print_r("<span class = 'entry_title'>" . $entry->name . "</span><br />");
		print_r("<div style = 'width:300px; margin:0 auto'><img class = 'project_image' src = 'http://" . $_SERVER["SERVER_NAME"] 
				. $entry->imgurl . "' /></div><br />");
		print_r("<p class = 'paragraph'>" . $entry->description. "</p>");
		print_r("The source code for this project may be found <a href = 'http://" . $_SERVER["SERVER_NAME"] 
				. $entry->codeurl . "'>by clicking here</a><br /><br /><br />.");
	}