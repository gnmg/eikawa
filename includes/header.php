<?php
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="駒ヶ根英語塾、駒ヶ根英会話,　駒ヶ根英語学校, 駒ヶ根英語教室, TOEIC" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="">
	<title>駒ヶ根英語学校、英語塾</title>
	<!-- Woff2 fonts preload -->
	<link rel="preload" href="fonts/noto-sans-jp-v24-latin-300.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="fonts/noto-sans-jp-v24-latin-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="fonts/noto-sans-jp-v24-latin-500.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="fonts/noto-sans-jp-v24-latin-700.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<!-- Style files -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Style file for validation tooltip -->
	<link rel="stylesheet" href="css/validationEngine.css">

	<!-- Google recaptcha-->
	<script src="https://www.google.com/recaptcha/api.js?render=6LfpmwgaAAAAABUbmR-qxC24rUnzdyKoVZ2gcgKX"></script>
<script>
    grecaptcha.ready(function() {
    // do request for recaptcha token
    // response is promise with passed token
        grecaptcha.execute('6LfpmwgaAAAAABUbmR-qxC24rUnzdyKoVZ2gcgKX', {action:'validate_captcha'})
                  .then(function(token) {
            // add token value to form
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
</script>



	<!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1729919350403908');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1729919350403908&ev=PageView&noscript=1"
/></noscript>
  <!-- End Facebook Pixel Code -->
</head>
?>