<?php
$x = 1;

	$a = ($x > 0 ? $x^3 + $x : 1);
	$b = (7 * $x + 5);
	
	if ($a <= $b)
{
	$res = $a*(2*$a - $b^2);
	}
else {
	$res = 2*$a - ($b / 2);
}
end:
echo "Resulting number is: $res";
?>