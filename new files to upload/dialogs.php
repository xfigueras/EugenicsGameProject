<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<dialogs>
	<dialog id="TEST">
		<part id="START">
			<answers>
				<answer id="GRANGE">Are you in love?</answer>
			</answers>
			<LIKE>0</LIKE>
			<choices>
				<choice>G1</choice>
				<choice>G2</choice>
				<choice>G3</choice>
			</choices>
		</part>
		<part id="G1">
			<question id='PIP'>Yes</question>
			<SETENABLED>INLOVE</SETENABLED>
			<SETDISABLED>NOTINLOVE</SETDISABLED>
			<LIKE>1</LIKE>
			<choices>
				<choice>G4</choice>
			</choices>
		</part>
		<part id='G2'>
			<question id='PIP'>No</question>
			<SETENABLED>NOTINLOVE</SETENABLED>
			<SETDISABLED>INLOVE</SETDISABLED>
			<LIKE>-1</LIKE>
			<choices>
				<choice>G7</choice>
			</choices>
		</part>
		<part id='G3'>
			<question id='PIP'>Maybe</question>
			<LIKE>0</LIKE>
			<choices>
				<choice>G7</choice>
			</choices>
		</part>
		<part id='G4'>
			<answers>
				<answer id='WATERS'>In love... with me?</answer>
				<answer id='GRANGE'>Or... with me?</answer>
			</answers>
			<LIKE>0</LIKE>
			<choices>
				<choice>G5</choice>
				<choice>G6</choice>
				<choice>G7</choice>
			</choices>
		</part>
		<part id='G5'>
			<question id='PIP'>With Waters</question>
			<LIKE>2</LIKE>
			<choices>
				<choice>END[INLOVEWITHWATERS]</choice>
			</choices>
		</part>
		<part id='G6'>
			<question id='PIP'>With Grange</question>
			<LIKE>2</LIKE>
			<choices>
				<choice>END[INLOVEWITHGRANGE]</choice>
			</choices>
		</part>
		<part id='G7'>
			<question id='PIP'>...</question>
			<answers>
				<answer id='WATERS'>Okok!</answer>
			</answers>
			<LIKE>0</LIKE>
			<choices>
				<choice>END[INLOVE]</choice>
			</choices>
		</part>
	</dialog>
</dialogs>
XML;
?>


