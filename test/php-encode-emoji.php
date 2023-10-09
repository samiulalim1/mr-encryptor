<?php
//include mr.encryptor.min.php
include '../src/mr.encryptor.min.php';

//use of MrEncode with Emoji encode in php
//string which you want to encode 
$string = 'Hello World';
//output result emoji/string
$emoji = true;
//encode mode > 0
$mode = 3;
//encryption
$data = MrEncode($string, $emoji, $mode);

//output
echo $data; //data => 🍀😓🐻🍎👌🐶🔥😂🐻💣🐟😉🍎🐶🍻⚽😱💘😝💩😝🍸🐟🍎💄🧐👊💩😝🍎🐻🍎💄🍎🎉😂🐩🚗🙌👠🎾🚗☀🌈💩👠🎾👂🤪👠🐻⚽💩🚗🐟👿😝💜👊🍎🎾💘🏈🎀

?>
