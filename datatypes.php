PHP Data Types
Variables can store data of different types, and different data types can do different things.
<div></div>
PHP supports the following data types:

String
Integer
Float
Boolean
Array
Object
NULL
Resource
<h2>PHP String</h2>
A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

<div>
	<div>
		Example
	</div>
	<?php
	$x = "Hello world!";
	$y = 'Hello world!';

	echo $x;
	echo "<br>";
	echo $y;
	?>
</div>
<h2>PHP Boolean</h2>
A Boolean represents two possible states: TRUE or FALSE.

$x = true;
$y = false;
<div>PHP Array</div>
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

<pre>
    Example
	<?php
	$cars = array("Volvo","BMW","Toyota");
	//instead for
    $car_1 = 'Volvo';
    $car_2 = 'BMW';
    $car_3 = 'Toyota';
	var_dump($cars);
	?>
</pre>
<h2>PHP Object</h2>
An object is a data type which stores data and information on how to process that data.

<div>
    Example
	<?php
	$carVW = (object)[
		'model' => 'VW',
        'speed' => 114,
	];
	echo "<div>$carVW->model</div>";
	echo "<div>$carVW->speed</div>";

	$carRav4 = (object)[
		'model' => 'Rav4',
        'speed' => 197,
	];
	echo "<div>Model $carRav4->model speed $carRav4->speed</div>";
	//instead for
    $carVM_model = 'VM';
    $carVM_speed = 114;
    $carRav4_model = 'Rav4';
    $carRav4_speed = 197;
	?>

</div>

<h2>PHP NULL Value</h2>
Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.
Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
Variables can also be emptied by setting the value to NULL:
<div>
    Example
	<?php
	$x = "Hello world!";
	$x = null;
	var_dump($x);
	echo $x;
	?>
</div>
