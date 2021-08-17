<?php

session_start();

if(isset($_SESSION['username'])) {
	$CURRENT_PAGE = $PAGE_TITLE = "";
	switch ($_SERVER['SCRIPT_NAME']) {
		case BASE_PATH. 'Views/Home'. PHP_FILE_EXTENSION:
			$CURRENT_PAGE = "Home Page";
			$PAGE_TITLE = "home";
			break;
		case BASE_PATH. 'Views/Profile'. PHP_FILE_EXTENSION:
		    $CURRENT_PAGE = "Profile Page";
		    $PAGE_TITLE = "Profile";
		    break;
		default:
			$CURRENT_PAGE = "Welcome Page";
			$PAGE_TITLE = " Welcome ";
			break;
		
	}
}
else {
	header("Location: /Online Food Order/");
}

?>