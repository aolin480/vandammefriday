<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>It's a...Van Damme FRIDAY!</title>
  <meta name="description" content="Uh oh...guess what day it is? That's right, it's VAN DAMME FRIDAY!" />
  <meta property="og:image" content="img/damme-snake.jpg" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

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
 pict[1]='<img src="img/82.gif" alt="" />'
 pict[2]='<img src="img/vdf-2.gif" alt="" />'
 pict[3]='<img src="img/van.gif" alt="" />'
 pict[4]='<img src="img/81927386.gif" alt="" />'
 pict[5]='<img src="img/126.gif" alt="" />'
 pict[6]='<img src="img/vd2.gif" alt="" />'
 pict[7]='<img src="img/vd3.gif" alt="" />'
 pict[8]='<img src="img/3i648.gif" alt="" />'
 pict[9]='<img src="img/vandamme4.gif" alt="" />'
 pict[10]='<img src="img/vandamme5.gif" alt="" />'
 pict[11]='<img src="img/vandamme6.gif" alt="" />'
 pict[12]='<img src="img/vandamme7.gif" alt="" />'
 pict[13]='<img src="img/vandamme8.gif" alt="" />'
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