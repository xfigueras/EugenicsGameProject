<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<dialogs>
	<dialog character="Adolf1">
		<part id="0">
			<questions>
				<question type="T">Hello</question>
				<question type="D">How are you doing?</question>
			</questions>
			<answers>
				<answer part_ref="1">Hi</answer>
				<answer part_ref="1">Good, and you?</answer>
			</answers>
		</part>
		<part id="1">
			<choices>
				<choice part_ref="2">Good</choice>
				<choice part_ref="3">Bad</choice>
				<choice part_ref="4">So so...</choice>
			</choices>
		</part>
		<part id="2">
			<answers>
				<answer part_ref="5">That's good</answer>
			</answers>
		</part>
		<part id="3">
			<answers>
				<answer part_ref="6">That's bad</answer>
			</answers>
		</part>
		<part id="4">
			<answers>
				<answer part_ref="-1">so what?</answer>
			</answers>
		</part>
		<part id="5">
			<questions>
				<question type="T">Totally</question>
			</questions>
		</part>
		<part id="6">
			<choices>
				<choice part_ref="7">Are you sure?</choice>
				<choice part_ref="8">Sure thing</choice>
				<choice part_ref="9">If you say so...</choice>
			</choices>
		</part>
		<part id="7">
			<answers>
				<answer part_ref="-1">Yes</answer>
			</answers>
		</part>
		<part id="8">
			<answers>
				<answer part_ref="-1">Awesome</answer>
			</answers>
		</part>
		<part id="9">
			<answers>
				<answer part_ref="-1">That's bad</answer>
			</answers>
		</part>
	</dialog>
</dialogs>
XML;
?>