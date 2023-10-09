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
<p>You have to place an external script reference for <b>mr.encryptor.min.js</b> in <b> &lt;head&gt;</b>.</p>

```html
<script src="mr.encryptor.min.js"></script>
```

<p>Now you are ready for using <b>mr.encryptor.min.js</b>.</p>
<p><b>An Encode Demo:</b></p>

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Use of MrEncode in javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!---include mr.encryptor.min.js--->
	<script src="../src/mr.encryptor.min.js"></script>
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
