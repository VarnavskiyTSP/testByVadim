<?php
function calculator(string $a): string
{
	$calculator = ($a);
	return eval("return $a;");
}
echo calculator("1+1"), "<br>";
echo calculator("1+1-2"), "<br>";
echo calculator("4+1-2+3"), "<br>";
echo calculator("4*1*2"), "<br>";
if ($a = "str") {
	echo "Incorrect input", "<br><br>";
} else {
	echo "str";
}

$int_a = '2';
$int_b = '0';
$int_c = '6';
$int_d = '8';
$int_e = 'int';
$options = array(
	'options' => array(
		'min_range' => 0,
		'max_range' => 8,
	)
);
if (filter_var($int_a, FILTER_VALIDATE_INT, $options) !== false) {
	echo "число $int_a указано верно.\n", "<br>";
} else {
	echo "число $int_a указано неверно.\n";
}
if (filter_var($int_b, FILTER_VALIDATE_INT, $options) !== false) {
	echo "число $int_b указано верно.\n", "<br>";
} else {
	echo "число $int_b указано неверно.\n";
}
if (filter_var($int_c, FILTER_VALIDATE_INT, $options) !== false) {
	echo "число $int_c указано верно.\n", "<br>";
} else {
	echo "число $int_c указано неверно.\n";
}
if (filter_var($int_d, FILTER_VALIDATE_INT, $options) !== false) {
	echo "число $int_d указано верно.\n", "<br>";
} else {
	echo "число $int_d указано неверно.\n";
}
if (filter_var($int_e, FILTER_VALIDATE_INT, $options) !== false) {
	echo "число $int_e указано верно.\n", "<br>";
} else {
	echo "число $int_e указано неверно.\n";
}
