<html>
<head>
<title>Lab 12a</title>
</head>
<body>
<h1>Regular HTML section (outside &lt;?php ... ?&gt; tags)</h1>
<p>You can type regular HTML here and it will show up</p>
<p>The following line looks like PHP but it is ignored by PHP because it doesn't appear within &lt;?php ... ?&gt; tags: <br/><br/>
<code>
echo "This page was generated: " . date("M dS, Y");
</code>
<h1>PHP section (inside &lt;?php ... ?&gt; tags)</h1>
<?php
   //this is a php comment IN tags (will not appear)
   echo "This was output using PHP";
   echo "<br>"; //notice we can echo tags in php.

?>
</body>
</html>