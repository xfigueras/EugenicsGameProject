<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<dialogs>
	<dialog character="Adolf1">
		<part>
			<questions>
				<question type="T">Hello</question>
				<question type="D">How are you doing?</question>
			</questions>
			<answers>
				<answer part_ref="1">Hi</answer>
				<answer part_ref="1">Good, and you?</answer>
			</answers>
		</part>
		<part>
			<questions>
				<question type="T">Good thanks</question>
				<question type="T">I was wondering... do you love me?</question>
			</questions>
			<choices>
				<choice part_ref="2">Yes</choice>
				<choice part_ref="3">No</choice>
				<choice part_ref="4">Nice weather there, huh?</choice>
			</choices>
		</part>
		<part>
			<questions>
				<question type="T">I'm happy</question>
			</questions>
		</part>
		<part>
			<questions>
				<question type="T">I'm sad</question>
			</questions>
		</part>
		<part>
			<questions>
				<question type="T">...yes ^^'</question>
			</questions>
		</part>
	</dialog>
</dialogs>
XML;
?>