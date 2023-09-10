<meta http-equiv="refresh" content="10">
<?php
function checkInternetConnection()
{
  $connected = @fsockopen("www.google.com", 80);
  if ($connected) {
    fclose($connected);
    return true; // Internet is available
  }
  return false; // Internet is not available
}

$internetAvailable = checkInternetConnection();
?>

<!DOCTYPE html>
<html>
<head>
<style>

td{  background-color: red;
border: 1px solid red; /* Default border style */
border-color: red; /* Set the border color */
	border-radius:0px;
	background: linear-gradient(to right, black, red 50%, red 50%, black);border: 1px solid black;}
}


</style>

 <style>
    body {
      overflow-x: hidden;
      overflow-y: hidden;
    }
  </style>

    <script type="text/javascript">
        function updateTime() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var timeString = 'Time : '+hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            document.getElementById("current-time").innerHTML = timeString;

            setTimeout(updateTime, 1000); // Update every second
        }
    </script>
  <title>Internet Availability</title>
</head>
<body onload="updateTime()">
<table border='0'width='100%'>

<tr><td colspan='2'align='center'> <font color='white' size='2'>
<div id="current-time"></div>
  </tr>
  
  <tr height='5'>
  
<tr><td colspan='2'align='center'> <font color='white' size='2'>
IP :
<?php
$ipAddress = gethostbyname('www.google.com');
echo  $ipAddress;
?>
  </td>
  </tr>
  
    <tr height='5'>
  
  <tr><td colspan='2'align='center'> <font color='white' size='2'>
Press F5 to Refresh System
  </td>
  </tr>

</body>
</html>