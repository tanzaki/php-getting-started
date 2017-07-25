<h2>PHP extract() Function</h2>
Assign the values "Cat", "Dog" and "Horse" to the variables $a, $b and $c:
<div>Example</div>
<?php
$my_array = array(
	"a" => "Cat",
	"b" => "Dog",
	"c" => "Horse",
);
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";
?>
