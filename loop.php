<h2>The PHP foreach Loop</h2>
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
<pre>
	foreach ($array as $value) {
		code to be executed;
	}
</pre>
<div>Example</div>
<div>
	<?php
	$colors = array("red", "green", "blue", "yellow");

	foreach ($colors as $value) {
		echo "$value <br>";
	}
	?>
</div>
