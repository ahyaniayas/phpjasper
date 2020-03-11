<?php

require 'vendor/autoload.php';

use PHPJasper\PHPJasper;

$dir = "examples";
$jasper = "latihan1";
$formatout = "docx"; //  [0] => pdf [1] => rtf [2] => xls [3] => xlsx [4] => docx [5] => odt [6] => ods [7] => pptx [8] => csv [9] => html [10] => xhtml [11] => xml [12] => jrprint
$location = $dir.'/output/'.$jasper.'.'.$formatout;

$input = __DIR__ . '/'.$dir.'/'.$jasper.'.jrxml';  
$output = __DIR__ . '/'.$dir.'/output'; 
$options = [
    'format' => [$formatout],
    'locale' => 'en',
    'params' => ['nama'=>'ayas'],
    'db_connection' => [
        'driver' => 'mysql', //postgres, ....
        'username' => 'root',
        // 'password' => '',
        'host' => '127.0.0.1',
        // 'port' => '80',
        'database' => 'tes_java'
    ]
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