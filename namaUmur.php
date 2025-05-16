<?php
$data = [
    ["nama" => "Pawestri", "umur" => 15],
    ["nama" => "Amanda", "umur" => 16],
    ["nama" => "Rehania", "umur" => 17],
    ["nama" => "Aidilia", "umur" => 15],
    ["nama" => "Eko", "umur" => 18],
    ["nama" => "Fira", "umur" => 16],
    ["nama" => "Gilang", "umur" => 15],
    ["nama" => "Hana", "umur" => 17],
    ["nama" => "Iqbal", "umur" => 16],
    ["nama" => "Joko", "umur" => 15],
    ["nama" => "Kiki", "umur" => 17],
    ["nama" => "Lina", "umur" => 18],
    ["nama" => "Mira", "umur" => 15],
    ["nama" => "Niko", "umur" => 17],
    ["nama" => "Oki", "umur" => 16]
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$jsonData</pre>";
?>
