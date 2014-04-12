<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<dialogs>
	<dialog character="Gan1">
		<part id="0">
			<questions>
				<question type="T">Ugh. My chest hurts. Where Am I?</question>
			</questions>
			<answers>
				<answer part_ref="1">You’re in Sick Bay. You almost didn’t make it.</answer>
			</answers>
		</part>
		<part id="1">
			<questions>
				<question type="T">Who- who are you? Whats wrong with me?</question>
			</questions>
			<answers>
				<answer part_ref="2">My name is Gan. I can’t say for sure, but it looks like you have dusty lung, made worse by the azma. But you seem to have stabilized for now.</answer>
			</answers>
		</part>
		<part id="2">
			<questions>
				<question type="T">Ugh. This headache. All I remember is heading here after getting caught in the storm. So when can I get out?</question>
			</questions>
			<answers>
				<answer part_ref="3">I don’t know kiddo.They don’t tell us 'gimps' very much. We’ll just have to play it by ear.</answer>
			</answers>
		</part>
		<part id="3">
			<questions>
				<question type="T">Please, don’t call me kiddo, old timer. </question>
			</questions>
			<answers>
				<answer part_ref="4">Uh, whatever you say. So what should I call you?</answer>
			</answers>
		</part>
		<part id="4">
			<choices>
				<choice part_ref="5">Who are you calling ‘gimp’?</choice>
				<choice part_ref="6">How’d you  break your leg?</choice>
				<choice part_ref="7">So why are you here?</choice>
				<choice part_ref="-1" action_id="sleep">I’m tired. I’m gonna sleep now.</choice>
			</choices>
		</part>
		<part id="5">
			<answers>
				<answer part_ref="-1">Anyone in sick bay gets called a ‘gimp’. They only send you here if you are hurt or handicapped in some way.  It could be physically, mentally, terminally  or just temporary like us. </answer>
			</answers>
		</part>
		<part id="6">
			<answers>
				<answer part_ref="9">My leg? They broke it!</answer>
			</answers>
		</part>
		<part id="9">
			<questions>
				<question type="T">Who are ‘they’?</question>
			</questions>
			<answers>
				<answer part_ref="10">The Collective. They run things around here. Everything on this planet is theirs. Goods, labour, one and the same.  You're own body ain't your own while they got you. </answer>
			</answers>
		</part>
		<part id="10">
			<questions>
				<question type="T" action_id="from question">What do you mean ‘You’re body ain’t your own’?</question>
			</questions>
			<!--
			<answers>
				<answer part_ref="-1">Once you end up in a place like this, the Collective can pretty  much have its way with you. Its all rumors, although I’ve seen  some of it firsthand. Experiments, organ harvest, surrogacy, sterilizations, its pretty ugly. Nobody talks about it.</answer>
			</answers>
			-->
		</part>
		<part id="7">
			<answers>
				<answer part_ref="-1" action_id="walk">Me? Well, I guess I would have to say that it all started with a rattle-drum. But it was why she played it...</answer>
			</answers>
		</part>
	</dialog>
</dialogs>
XML;
?>