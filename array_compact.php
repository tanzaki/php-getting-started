<h2>PHP compact() Function</h2>
Create an array from variables and their values:
<div>Example</div>

<pre>
	<?php
	$firstname = "Peter";
	$lastname = "Griffin";
	$age = "41";

	$result = compact("firstname", "lastname", "age");

	print_r($result);
	?>
</pre>
<h2>Definition and Usage</h2>
The compact() function creates an array from variables and their values.
