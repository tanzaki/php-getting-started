<h2>PHP - The if Statement</h2>
The if statement executes some code if one condition is true.

Syntax
<pre>
	if (condition) {
		code to be executed if condition is true;
	}
</pre>
The example below will output "Have a good day!" if the current time (HOUR) is less than 20:

<div>
	Example
	<?php
	$current_hour = 19;

	if ( $current_hour < "20") {
		echo "Have a good day!";
	}
	?>
</div>
<h2>PHP - The if...else Statement</h2>
The if....else statement executes some code if a condition is true and another code if that condition is false.

Syntax
<pre>
	if (condition) {
		code to be executed if condition is true;
	} else {
		code to be executed if condition is false;
	}
</pre>
The example below will output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

<div>
	Example
	<?php
	$current_hour = 21;
	if ( $current_hour < "20") {
		echo "Have a good day!";
	} else {
		echo "Have a good night!";
	}
	?>
</div>
