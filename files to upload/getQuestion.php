<?php
$char_id=$_GET["char"];
$part_id=$_GET["id"];
$question_idx=$_GET["idx"];

include 'dialogs.php';

$dialogs = new SimpleXMLElement($xmlstr);
foreach ($dialogs as $dialog) {
	if($dialog['character'] == $char_id)
	{
		echo $dialog->part[intval($part_id)]->questions->question[intval($question_idx)];
	}
}
?>

