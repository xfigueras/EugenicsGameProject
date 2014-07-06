<?php
$char_id=$_GET["dialog"];
$part_id=$_GET["id"];

include 'dialogs.php';

$dialogs = new SimpleXMLElement($xmlstr);
foreach ($dialogs as $dialog) {
	if($dialog['id'] == $char_id)
	{
		foreach($dialog->part as $part)
		{
			if($part['id'] == $part_id)
			{
				echo $part->SETENABLED[0];
			}
		}
	}
}
?>

