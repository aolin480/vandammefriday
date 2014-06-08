<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>It's a...Van Damme FRIDAY!</title>
  <meta name="description" content="Uh oh...guess what day it is? That's right, it's VAN DAMME FRIDAY!" />
  <meta property="og:image" content="img/damme-snake.jpg" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<!--
 __   __   ______     __   __
/\ \ / /  /\  __ \   /\ "-.\ \
\ \ \'/   \ \  __ \  \ \ \-.  \
 \ \__|    \ \_\ \_\  \ \_\\"\_\
  \/_/      \/_/\/_/   \/_/ \/_/

 _____     ______     __    __     __    __     ______
/\  __-.  /\  __ \   /\ "-./  \   /\ "-./  \   /\  ___\
\ \ \/\ \ \ \  __ \  \ \ \-./\ \  \ \ \-./\ \  \ \  __\
 \ \____-  \ \_\ \_\  \ \_\ \ \_\  \ \_\ \ \_\  \ \_____\
  \/____/   \/_/\/_/   \/_/  \/_/   \/_/  \/_/   \/_____/

 ______   ______     __     _____     ______     __  __
/\  ___\ /\  == \   /\ \   /\  __-.  /\  __ \   /\ \_\ \
\ \  __\ \ \  __<   \ \ \  \ \ \/\ \ \ \  __ \  \ \____ \
 \ \_\    \ \_\ \_\  \ \_\  \ \____-  \ \_\ \_\  \/\_____\
  \/_/     \/_/ /_/   \/_/   \/____/   \/_/\/_/   \/_____/

For all you nerds that look at the source code:
You're welcome, bitches...
-->

</head>
<?php
$day=date("l");

if ($day=="Friday")
  {
echo <<<END
<body class="bg">
 <div class="container">
 <h1>It's a...</h1>
 <h2>Van Damme Friday!</h2>
 <script type="text/javascript">
 function random_image(){
 var pict=new Array()
 pict[1]='<img src="img/vdf-01.gif" alt="" />'
 pict[2]='<img src="img/vdf-02.gif" alt="" />'
 pict[3]='<img src="img/vdf-03.gif" alt="" />'
 pict[4]='<img src="img/vdf-04.gif" alt="" />'
 pict[5]='<img src="img/vdf-05.gif" alt="" />'
 pict[6]='<img src="img/vdf-06.gif" alt="" />'
 pict[7]='<img src="img/vdf-07.gif" alt="" />'
 pict[8]='<img src="img/vdf-08.gif" alt="" />'
 pict[9]='<img src="img/vdf-09.gif" alt="" />'
 pict[10]='<img src="img/vdf-10.gif" alt="" />'
 pict[11]='<img src="img/vdf-11.gif" alt="" />'
 pict[12]='<img src="img/vdf-12.gif" alt="" />'
 pict[13]='<img src="img/vdf-13.gif" alt="" />'
pict[14]='<img src="img/vdf-14.gif" alt="" />'
pict[15]='<img src="img/vdf-15.gif" alt="" />'
pict[16]='<img src="img/vdf-16.gif" alt="" />'
pict[17]='<img src="img/vdf-17.gif" alt="" />'
pict[18]='<img src="img/vdf-18.gif" alt="" />'
 <!--add more here-->
 var rand=Math.floor(Math.random()*pict.length)
 if (rand==0)
 rand=1
 document.write(pict[rand])
 }
 random_image()

function reloadPage() {
  location.reload();
}
 </script>
   <div>
    <input type="button" value="Get Another VAN DAMME!" onclick="reloadPage()">
  </div>
</div>

END;
}
else
  {
  echo <<<END
  <body>
   <div class="container">
   <p>Sorry Folks...</p>
   <p>But it's not Friday yet</p>
   <p>:(</p>
    <img src="img/damme-snake.jpg" />
   </div>
END;
  }
?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44023307-1', 'vandammefriday.net');
      ga('send', 'pageview');

    </script>
  </body>
</html>
