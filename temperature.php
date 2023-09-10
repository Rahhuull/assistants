<html lang='en' >
<meta charset='UTF-8'>


</head><body>

<style>
.sees {
    border: 3px solid #02feff;
background-image: -moz-radial-gradient(45px 45px 45deg, circle cover, lightgreen 0%, green 100%, blue 5%);
			background-image: -webkit-radial-gradient(45px 45px, circle cover, lightgreen, green);
			background-image: radial-gradient(45px 45px 45deg, circle cover, lightgreen 0%, green 100%, blue 5%);
border: 1px solid green;
			-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
			box-shadow: 0 3px 8px rgba(0, 0, 0, .3);
   border-radius: 50%;
   width: 150px;
   height:150px;
}

.see2 {
    border: 2px solid #02feff;

 
   width: 130px;
   height:130px;
}





</style>
<br><br><br>
<body bgcolor='black'>
<table border='0'align='center'width='60%'height='70%'class='to'><tr>

<div id="temp" class='fixed'hidden>loading weather data</div>





<td class='see2'>

<script src="//www.powr.io/powr.js?external-type=html"></script> 
 <div class="powr-weather" id="a9e36b77_1513700932"></div>



















</tr></td></table>











<script src='jquery.min.js'></script>
<script >$(document).ready(function(){
  var city = "Dimapur";
  var searchtext = "select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text='" + city + "') and u='c'"
  //change city variable dynamically as required
  $.getJSON("https://query.yahooapis.com/v1/public/yql?q=" + searchtext + "&format=json").success(function(data){
   console.log(data);
   $('#temp').html("<table border='1'align='center' class='sees'><tr><td class='see'align='center'bgcolor='navy'><font color='white'><b>" + city + " is " + data.query.results.channel.item.condition.temp + "°C</font></tr></td>");
   

  });
});

</script>
</body></html>




