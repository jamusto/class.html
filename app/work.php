<?php

echo '<pre>';
echo: "foo \n"; //think of echo as system.out.print

echo:"foo \n";

echo:"bar\n";   // \n only gets noted with " " not ''

$n = 5;
echo "bar {$n}\n";
echo "bar" . $n . "\n";    // these two lines are functionally equivalent

class Animal {
  public $type = 'pig';
}
$wilbur = new Animal();
echo $wilbur->type;

$arr = [
  'first' => 'Tom'
  'Last' => 'Gregory'
];

echo $arr['first'];

$arrToo = ['zero','blue','two'];
echo "\n" . $arrToo[1];   // this associative aray is one of the things different about php


//Every sample under here means exactly the same thing
$id=0;
if (isset($_get['id'])) {
  $id = $_get['id'];
}

$id = isset($_get['id']) ? $_get ['id'] : 0;

$id = $_Get ['id'] ?? 0;
