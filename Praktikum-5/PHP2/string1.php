<?php 

$loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam temporibus dignissimos fugit culpa aperiam. Fugit atque expedita excepturi odit cupiditate incidunt blanditiis, dolorem unde sequi accusantium, alias, culpa voluptatum corporis.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>