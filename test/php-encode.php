<?php
//include mr.encryptor.min.php
include 'mr.encryptor.min.php';

//use of MrEncode in php
//string which you want to encode 
$string = 'Hello World';
//output result emoji/string
$emoji = false;
//encode mode > 0
$mode = 3;
//encryption
$data = MrEncode($string, $emoji, $mode);

//output
echo $data; // data => Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO

?>
