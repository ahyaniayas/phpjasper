<?php

require 'vendor/autoload.php';

use PHPJasper\PHPJasper;

$dir = "examples";
$jasper = "tms_daftar_tagihan_per_principal";
$formatout = "docx"; //  [0] => pdf [1] => rtf [2] => xls [3] => xlsx [4] => docx [5] => odt [6] => ods [7] => pptx [8] => csv [9] => html [10] => xhtml [11] => xml [12] => jrprint
$location = $dir.'/output/'.$jasper.'.'.$formatout;

$input = __DIR__ . '/'.$dir.'/'.$jasper.'.jrxml';  
$output = __DIR__ . '/'.$dir.'/output'; 
$options = [
    'format' => [$formatout],
    'locale' => 'en',
    'params' => ['Ptanggalfr'=>'2019-01-01', 'Ptanggalto'=>'2019-11-01', 'Pcabang'=>'431'],
    'db_connection' => [
        'driver' => 'postgres', //postgres, mysql, ....
        'username' => 'postgres',
        'password' => 'postgres',
        'host' => '172.16.5.28',
        'port' => '5432',
        'database' => 'sbn'
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