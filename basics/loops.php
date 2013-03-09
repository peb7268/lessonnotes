<?php //0 based array indexes
//$groceries = array("ham", "cheese", "cake", "slim fast"); //associative

$groceries = array("produce" => array("lettuce", "cabbage", "onions", "carrots"),
			 	   "meats"   => array("beef", "chicken", "pork"),
			 	   "drinks"  => array("beer", "more beer", "water")
);

print_r($groceries);

/*
$count = count($groceries);
echo "there are: ".$count." groceries on the list. <br><br>";

for($i = 0; $i < $count; $i++){
	echo $groceries[$i]."<br>";
}
*/

echo "The Loop: <br><br>";
foreach($groceries as $list => $groceryList){
	echo $list."<br>";
	foreach($groceryList as $key => $value){
		echo "&nbsp;&nbsp;&nbsp;&nbsp;".$value."<br>";
	}
	echo "<br>";
}

$i = 0;
while($i < count($groceries)){
	echo $groceries;
	$i = $i++; //$i + 1;
}