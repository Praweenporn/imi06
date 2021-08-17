<style type="text/css">
  body { background-color: #ffffff; }
  div {
  background-color: DodgerBlue;
  width: 300px;
  padding: 50px;
  margin: 20px;
  }
</style>
<body>
<h1> Prweenporn Mathurot </h1>
<h1 align="center">Monitor temp & humidity </h1>
<table align="center">
<tr algin="center">
 <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe></td>
  <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe></td>
    <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/maps/channel_show"></iframe></td>
    </tr>
 </table>
</body>

<?php

$temperture = file_get_contents('https://api.thingspeak.com/channels/1458414/fields/1/last.txt');
$humidity = file_get_contents('https://api.thingspeak.com/channels/1458414/fields/2/last.txt');

 <div> echo $humidity </div>

 echo "humidity is =""<br>";
 echo "temperture is = ".$temp;

?>
