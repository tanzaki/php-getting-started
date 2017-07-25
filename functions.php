The real power of PHP comes from its functions; it has more than 1000 built-in functions.
<h2>Replace Text Within a String</h2>
The PHP str_replace() function replaces some characters with some other characters in a string.

The example below replaces the text "world" with "Dolly":

<div>
	Example
	<?php
	echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
	?>
</div>
<h2>PHP User Defined Functions</h2>
Besides the built-in PHP functions, we can create our own functions.

A function is a block of statements that can be used repeatedly in a program.

A function will not execute immediately when a page loads.

A function will be executed by a call to the function.
<h2>Create a User Defined Function in PHP</h2>
<pre>
    function functionName() {
        code to be executed;
    }
</pre>
<div>
    Example
	<?php
	function writeMsg() {
		echo "Hello world!";
	}
	writeMsg(); // call the function
	?>
</div>
<h2>PHP Function Arguments</h2>
Information can be passed to functions through arguments. An argument is just like a variable.
The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:
<div>Example</div>
<?php
function familyName($fname) {
	echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
The following example has a function with two arguments ($fname and $year):
<div>Example</div>
<?php
function familyName2($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}
familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>
<h2>PHP Default Argument Value</h2>
The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

<div>Example</div>
<?php
function setHeight($minheight = 50) {
	echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>

<h2>PHP Functions - Returning values</h2>
To let a function return a value, use the return statement:
<div>Example</div>
<?php
function sum($x, $y) {
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
<h2>Variable function</h2>
<?php
function foo() {
	echo "In foo()<br />\n";
}
function bar($arg = '')
{
	echo "In bar(); argument was '$arg'.<br />\n";
}
// This is a wrapper function around echo
function echoit($string)
{
	echo $string;
}
$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()
?>

