<?php
$char_id=$_GET["char"];
$part_id=$_GET["id"];
$answer_idx=$_GET["idx"];

include 'dialogs.php';

$dialogs = new SimpleXMLElement($xmlstr);
foreach ($dialogs as $dialog) {
	if($dialog['character'] == $char_id)
	{
		echo $dialog->part[intval($part_id)]->answers->answer[intval($answer_idx)]['part_ref'];
	}
}
?>
