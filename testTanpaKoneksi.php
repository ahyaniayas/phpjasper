<?php

require 'vendor/autoload.php';

use PHPJasper\PHPJasper;

$dir = "examples";
$jasper = "hello_world";
$formatout = "docx"; //  [0] => pdf [1] => rtf [2] => xls [3] => xlsx [4] => docx [5] => odt [6] => ods [7] => pptx [8] => csv [9] => html [10] => xhtml [11] => xml [12] => jrprint
$location = $dir.'/output/'.$jasper.'.'.$formatout;

$input = __DIR__ . '/'.$dir.'/'.$jasper.'.jrxml';  
$output = __DIR__ . '/'.$dir.'/output';   
$options = [
    'format' => [$formatout] 
];

$jasper = new PHPJasper;
$jasper->process(
    $input,
    $output,
    $options
)->execute();

?>

<script>
	location="<?= $location ?>";
</script>