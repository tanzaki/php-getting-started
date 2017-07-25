Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:
<div>
    Think of variables as containers for storing data.
</div>
<div>
Example
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt;
?>
</div>
<h2>Output Variables</h2>
The PHP echo statement is often used to output data to the screen.

The following example will show how to output text and a variable:

<div>
    Example
    <?php
    $txt = "W3Schools.com";
    echo "I love $txt!";
    ?>
</div>
The following example will produce the same output as the example above:

<div>
    Example
    <?php
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";
    ?>
</div>
Run example »
The following example will output the sum of two variables:
<div>
    Example
	<?php
	$x = 5;
	$y = 4;
	echo $x + $y;
	?>
</div>
