<?php
//include mr.encryptor.min.php
include 'mr.encryptor.min.php';

//use of MrDecode with Emoji decode in php
//string/emoji which you want to decode 
$string = '🍀😓🐻🍎👌🐶🔥😂🐻💣🐟😉🍎🐶🍻⚽😱💘😝💩😝🍸🐟🍎💄🧐👊💩😝🍎🐻🍎💄🍎🎉😂🐩🚗🙌👠🎾🚗☀🌈💩👠🎾👂🤪👠🐻⚽💩🚗🐟👿😝💜👊🍎🎾💘🏈🎀';
//encode result emoji/string
$emoji = true;
//decode mode > 0, use the encode mode 
$mode = 3;
//decryption
$data = MrDecode($string, $emoji, $mode);

//output
echo $data; //data => Hello World

?>
