<?php
//include mr.encryptor.min.php
include '../src/mr.encryptor.min.php';

//use of MrDecode with Emoji decode in php
//string/emoji which you want to decode 
$string = 'Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO';
//encode result emoji/string
$emoji = false;
//decode mode > 0, use the encode mode 
$mode = 3;
//encryption
$data = MrDecode($string, $emoji, $mode);

//output
echo $data; //data => Hello World

?>
