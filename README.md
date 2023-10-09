<p align="center"><img alt="Mr Encryptor" src="https://api.mr999plus.site/image/neko/Mr%20Encryptor"></p>

<h1 align="center">Mr Encryptor</h1>
<p align="center">This encryptor makes your API data private and secure. Block all 3rd party requests to API and keep all data safe.</p>

<h2>Authors</h2>
<a href="https://mr999plus.com/">
    @Samiul Alim
</a>

<h2>Download</h2>
<a href="https://github.com/samiulalim1/mr-encryptor/raw/main/mr.encryptor.zip">
    DOWNLOAD NOW
</a>


## Documentation

### Javascript Encode
```js
//string which you want to encode 
var string = 'Hello World';
//output result emoji/string
var emoji = false;
//encode mode > 0
var mode = 3;
//encryption
var data = MrEncode(string, emoji, mode);
//output
alert(data); //data => Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO
```

### Javascript Encode Emoji
```js
//string which you want to encode 
var string = 'Hello World';
//output result emoji/string
var emoji = true;
//encode mode > 0
var mode = 3;
//encryption
var data = MrEncode(string, emoji, mode);
//output
alert(data); //data => 🍀😓🐻🍎👌🐶🔥😂🐻💣🐟😉🍎🐶🍻⚽😱💘😝💩😝🍸🐟🍎💄🧐👊💩😝🍎🐻🍎💄🍎🎉😂🐩🚗🙌👠🎾🚗☀🌈💩👠🎾👂🤪👠🐻⚽💩🚗🐟👿😝💜👊🍎🎾💘🏈🎀
```

### Javascript Decode
```js
//string/emoji which you want to decode 
var string = 'Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO';
//encode result emoji/string
var emoji = false;
//decode mode > 0, use the encode mode 
var mode = 3;
//decryption
var data = MrDecode(string, emoji, mode);
//output
alert(data); //data => Hello World
```

### Javascript Decode Emoji
```js
//string/emoji which you want to decode 
var string = '🍀😓🐻🍎👌🐶🔥😂🐻💣🐟😉🍎🐶🍻⚽😱💘😝💩😝🍸🐟🍎💄🧐👊💩😝🍎🐻🍎💄🍎🎉😂🐩🚗🙌👠🎾🚗☀🌈💩👠🎾👂🤪👠🐻⚽💩🚗🐟👿😝💜👊🍎🎾💘🏈🎀';
//encode result emoji/string
var emoji = true;
//decode mode > 0, use the encode mode 
var mode = 3;
//decryption
var data = MrDecode(string, emoji, mode);
//output
alert(data); //data => Hello World
```

### Javascript full Demo
<p>You have to place an external script reference for <b>mr.encryptor.min.js</b> in <b> &lt;head&gt;</b></p>

```html
<script src="mr.encryptor.min.js"></script>
```

<p>Now you are ready for using <b>Mr Encryptor</b>.</p>
<p><b>An Encode Demo:</b></p>

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use of MrEncode in javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!---include mr.encryptor.min.js--->
	<script src="mr.encryptor.min.js"></script>
</head>
<body>
	<script>
		//string which you want to encode 
		var string = 'Hello World';
		//output result emoji/string
		var emoji = false;
		//encode mode > 0
		var mode = 3;
		//encryption
		var data = MrEncode(string, emoji, mode);
		//output
		alert(data); //data => Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO
	</script>
</body>
</html>
```

<p><b>A Decode Demo:</b></p>

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use of MrDecode in javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!---include mr.encryptor.min.js--->
	<script src="mr.encryptor.min.js"></script>
</head>
<body>
	<script>
		//string/emoji which you want to decode 
		var string = 'Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO';
		//encode result emoji/string
		var emoji = false;
		//decode mode > 0, use the encode mode 
		var mode = 3;
		//decryption
		var data = MrDecode(string, emoji, mode);
		//output
		alert(data); //data => Hello World
	</script>
</body>
</html>
```


### PHP Encode
```php
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
echo $data; //data => Y8U14VIBUtX71VHPExCbCcX1NvzbC1U1N1gt53QKg=hJif0=N/Xc5tTTCyz1QxkO

?>
```
### PHP Encode Emoji
```php
<?php
//include mr.encryptor.min.php
include 'mr.encryptor.min.php';

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
```

### PHP Decode
```php
<?php
//include mr.encryptor.min.php
include 'mr.encryptor.min.php';

//use of MrDecode in php
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
```

### PHP Decode Emoji
```php
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
```

### Decode Error
```js
//Return false if code cannot be decoded
var data = MrDecode('abc', true, 9);
//output
alert(data); //data => false
```

## About
<p>This tool encrypts data using the domain name. If your domain name is <b>example.com</b> and you encrypt your data, it can only decrypt on <b>example.com</b>.You can use this tool to transfer your data from html to php for your api.</p>
