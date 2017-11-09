# Simple Captcha Server 

This application base on Slim Framework 3 application.  It also uses the alost of thrid part project.

- gregwar/captcha
- dapphp/securimage
- abeautifulsite/simple-php-captcha
- kangkang66/captcha
- lifei6671/php-captcha
- firebase/php-jwt

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Part One

This application can provider server for another application with json api.

1. api to get the captche url, and a token to valid captch or get captch code  
 	http://host/captcha/[{token}]  
	<pre>
	{
		jwt:xxxxxxxxxxxx,
		url:xxxxxxxxxxxx
	}
	</pre>

2. valid 
	http://host/captcha/valid/[{code}]/[{jwt}]
	<pre>
	{
		"valid":"pass"
	}
	</pre>

3. get code
	http://host/captcha/valid/[{code}]/[{jwt}]
	<pre>
	{
		"code":"1234"
	}
	</pre>