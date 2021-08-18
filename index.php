<script type="text/JavaScript">
  function timedRefresh(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
  }
</script>
<style type="text/css">
  body { background-color: #ffffff; }
  div1 {
  background-color: lightblue;   
  position: relative;
  font-size: 30px;
  left: 150px;
  top: 50px;
 }
  div2 {
  background-color: lightblue; 
  position: relative;
  font-size : 30px;
  left: 380px;
  top: 50px;
}
  div3 {
  background-color: lightblue; 
  position: relative;
  font-size : 30px;
  left: 600px;
  top: 50px;
}
</style>

<body onload="JavaScript:timedRefresh(14000);">
<br><h1 align="center">Monitor Temperature & Humidity: Prweenporn Mathurot </h1></br>
<table align="center">
<tr algin="center">
 <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe></td>
  <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe></td> 
   <td align="center"><iframe width="420" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1458414/maps/channel_show">
      </iframe></td>
    </tr> 
 </table>
</body>

<?php

$humidity = file_get_contents('https://api.thingspeak.com/channels/1458414/fields/1/last.txt');
$temperature  = file_get_contents('https://api.thingspeak.com/channels/1458414/fields/2/last.txt');
?>
 <div1> Hum: <?php echo $humidity?> %</div1>
 <div2> Temp: <?php echo $temperature?> C</div2>
 <div3> <a href="https://www.google.com/maps/place/8°29'43.3"N+98°30'50.1"E/@8.4953509,98.5139258,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d8.4953509!4d98.5139258"> Location: 8.4953509 98.5139258</a></div3>
