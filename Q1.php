
<?php

$count = 0;

//open file in aread mode.........

$file = fopen("data.txt","r");

$filePath = "data.txt";

$str = file_get_contents($filePath) or die("cannot read from file --bad file type!");

$array = file($filePath) or die("cannot read from file ! --error code 402!");


$newstr = preg_replace('/\s+/', ' ' ,$str);

$cchar = strlen($newstr);

$digits = preg_match_all("/[0-9]/", $str );

$vowel = preg_match_all("@[aeiouAEIOU]@", $str);



//performing the operations.........

while (($line = fgets($file)) !== false) {
// code...

//splits each line into words............

$words = explode(" ",$line);

//count each word

$count = $count + count($words);

}

//counts digit of file.......
//function countdigits($file)

//{

// return preg_match_all("/[0-9]", $file);
// }

//substr_count($file, ' ');

$lenght = strlen($filePath);

$lines = count(file($filePath));


echo "number of words  present in the given file :" . $count; 

echo "\nthe number of digits in the file are :" . $digits;

echo "\nnumber of vowels  in the file is :"  . $vowel;

echo " \nthe size of the file is :" .$lenght; 

echo "\nthe number of line in the file is:" .$lines;

echo "\nthe number of character in the file is:" .$cchar;


fclose($file);




?>


