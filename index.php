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

<body onload="JavaScript:timedRefresh(14000);","startTime()">
<br><h1 align="center">Monitor Temperature & Humidity: Prweenporn Mathurot </h1></br>
<p><h3 align="center">Current Date and Time is <span id='date-time'></span>.</h3></p>
<script type="text/JavaScript">
  function timedRefresh(timeoutPeriod) {
  setTimeout("location.reload(true);",timeoutPeriod);
  var dt = new Date();
  document.getElementById('date-time').innerHTML=dt;
 }
</script>

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
 <div3> <a href="https://goo.gl/maps/LPdPmFXEhwc5VgXw9" target="_blank"> Location: Phang nga</a></div3>
