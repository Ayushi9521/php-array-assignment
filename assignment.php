<?php
$person = array("Jacob","Ethan","William","Logan","Jacob","Andrwe","Alexander","Jackson","Chase","Noah","Michael","Andrew","Alexandre");

// 1 show duplicate name in the array with the count in the list




// 1 how to count array values
$res =array_count_values($person);
echo '<pre>';
echo "Original array";
print_r($person);
echo "duplicate name in array with count";
print_r($res);
echo '</pre>';

// 2 sort name by name length
function myfunction($v)
{
$v=strlen($v);
return $v;
}

$newper = array_map("myfunction",$person);
$c=array_combine($person,$newper);
asort($c);
echo "Name by name length";
echo '<pre>';
print_r($c);
echo '</pre>';


// 3 sort name by 3rd character
function cmp($a,$b){
  return $a[2] <=> $b[2];
}
usort($person, "cmp");
echo "sort by third character";
echo '<pre>';
print_r($person);
echo '</pre>';



  //  4 insert jacky after the chase in the list.
  $name = array("Jacob","Ethan","William","Logan","Jacob","Andrwe","Alexander","Jackson","Chase","Noah","Michael","Andrew","Alexandre");
  $a = "Jacky";

  array_splice($name,9,0,$a);
  echo "Insert Jacky in the list";
  echo '<pre>';
  print_r($name);
  echo '</pre>';

// 5 Show names ending with character e
$na = array("Jacob","Ethan","William","Logan","Jacob","Andrwe","Alexander","Jackson","Chase","Noah","Michael","Andrew","Alexandre");
$output = array_map('strrev',$na);
function check($var){
 if($var[0] === 'e'){
   return($var);
 }
}
$re =array_filter($output,"check");
$out = array_map('strrev',$re);
  echo "Names ending with character 'e'";
echo '<pre>';
  print_r($out);
  echo '</pre>';
?>