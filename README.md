send.php
========
send.php is a PHP script for sharing websites or URLs in general between
your devices.

How does it work?
-----------------
The script consists of two bookmarks you may store in your desktop
browser, mobile client or workplace browser. For sending URLs you will
have to create a bookmarklet like the following containing a little bit
of JavaScript and the place of send.php:

### Send Bookmarklet ###
``` javascript
javascript:void(location.href='PATH_TO_YOUR_SEND_PHP_FOLDER/send.php?url='+encodeURIComponent(location.href))
```

By clicking this bookmarklet, it will take your current URL, transmit it
to send.php on your server and send.php will you send back to the URL
you just submitted.

It might be a little tough to store that JavaScript part instead of an
URL on your mobile browser. Best approach would be to just store an URL
and editing it to the JavaScript afterwards.

### Receive Bookmark###
By calling the send.php without any url attached, send.php will you send
back to the latest URL saved.

You can safely store the send.php link as any other bookmark.

Configuration
-------------

You can configure your setting by creating `config.php`. Take
`config.example.php` as an example for the file. The list file will
contain all files ever shared.

