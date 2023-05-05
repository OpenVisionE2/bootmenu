





		}
	}
	}
	}
	}
	}
?>
{
}
}
}
			$dirArray[] = $file;
	$FileList = getDirArray($Path,"_multi.zip$|_nand.zip$|_mmc.zip$|_usb.zip$");
	$Folder="";
		$Folder=$_GET['open'];
	$handle=opendir($Path);
	$Path="./";
		$Path="./".$_GET['open']."/";
		$Url=$Folder."/".end($FileList);
	closedir($handle);
	} else {
		exit;
function getDirArray($Path="./",$Filter=".*",$Sorted="True")
function printList() {
		header('Cache-Control: must-revalidate');
		header('Content-Description: File Transfer');
		header('Content-Disposition: attachment; filename="'.basename($Url).'"');
		header('Content-Length: ' . filesize($Url));
		header('Content-Type: application/octet-stream');
		header('Expires: 0');
		header('Pragma: public');
	if ($FileList) {
		if (file_exists($Url)) {
	if (!is_array($dirArray)) {
		if (is_file("$Path/$file") && preg_match("/$Filter/i", $file) && strpos($file, "recovery") === false) {
	if ( isset($_GET['open']) ) {
	if (strcasecmp($Sorted,"True")) {
<?php
printList();
		readfile($Url);
	return $dirArray;
		return 0;
		shuffle($dirArray);
		sort($dirArray);
	while ($file = readdir($handle)) {
