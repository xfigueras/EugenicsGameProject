<?php
$char_id=$_GET["dialog"];
$part_id=$_GET["id"];
$answer_idx=$_GET["idx"];

include 'dialogs.php';

$dialogs = new SimpleXMLElement($xmlstr);
foreach ($dialogs as $dialog) {
	if($dialog['id'] == $char_id)
	{
		foreach($dialog->part as $part)
		{
			if($part['id'] == $part_id)
			{
				$ref = $part->choices->choice[intval($answer_idx)];
			}
		}
		echo $ref;
	}
}
?>

