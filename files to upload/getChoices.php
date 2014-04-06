<?php
$char_idx=$_GET["char"];
$part_id=$_GET["id"];

include 'dialogs.php';

$dialogs = new SimpleXMLElement($xmlstr);

foreach ($dialogs as $dialog) {
	if($dialog['character'] == $char_idx)
	{
		$part = $dialog->part[intval($part_id)];
		
		if($part->choices)
		{
			foreach($part->choices->children() as $choice)
			{
				$id = $choice['part_ref'];
				echo "$id"."|$choice/";
			}
		}
	}
}
?>