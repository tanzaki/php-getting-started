An array stores multiple values in one single variable:

Example
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<h2>What is an Array?</h2>
An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

<pre>
    $cars1 = "Volvo";
    $cars2 = "BMW";
    $cars3 = "Toyota";
</pre>
However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number.
<div>
    <h2>PHP Indexed Arrays</h2>
    There are two ways to create indexed arrays:

    The index can be assigned automatically (index always starts at 0), like this:

    <pre>
        $cars = array("Volvo", "BMW", "Toyota");
    </pre>
    or the index can be assigned manually:

    <pre>
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";
    </pre>
    The following example creates an indexed array named $cars, assigns three elements to it, and then prints a text containing the array values:
</div>
<div>
    Example
	<?php
	$cars = array("Volvo", "BMW", "Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
	?>
</div>
