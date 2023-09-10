
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">


  <script src='AI.js'></script>
  

  
<script>
  annyang.start({continuous: true });
  var recognition = annyang.getSpeechRecognizer();
  var final_transcript = '';
 
    recognition.onresult = function(event) {
    var interim_transcript = '';
    final_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
 if(event.results.length>0){
sonuc=event.results[event.results.length-1];
if(sonuc.isFinal){
document.querySelector("input").value=sonuc[0].transcript
document.getElementById('userName').value= value=sonuc[0].transcript;
document.getElementById('labnol').submit();
}
}
}

   
  };
</script>




<script language="javascript">
function firstrun()
{
document.getElementById('autoid').submit();
return false;
}
</script>



</head>

 <style>

        table {
            border-collapse: collapse;
            border: 1px solid black;
        }
		
        th, td {	color: white;
            padding: 5px;
            text-align: center;
            border: 1px solid black;
        }

        #center-table {
            margin: 0 auto;
        }

        #right-table {
            float: right;
        }
		
		   #lipSyncVideo {
border-radius: 100%; 

width: 430px;
height: 430px;
border: 1px solid red;
border-radius: 100%;
text-align: center;
vertical-align: middle;
background-color: transparent;

/* Outer border (navy) */
border: 15px solid navy;

/* Inner border (black) */
box-shadow: inset 0 0 0 1px black;
 
    box-shadow: 0 0 10px navy,
                0 0 20px navy,
                0 0 40px navy,
                0 0 80px navy,
                0 0 120px navy,
                0 0 200px navy;
    animation: radiant 5s infinite linear;


  
  animation-name: blinking;
  animation-duration: 2s;
  animation-iteration-count: 100;
}
@keyframes blinking {
  50% {
    border-color: #1589FF;
  }}}
		
		
    </style>


	<style>
body {
	overflow: hidden;
margin: 0;
padding: 0;
    background:black;
color: #02feff;
}
* {
  user-select: none;
  font: 15px 'Agency FB', sans-serif;
}
table{
	border:1px #02feff  ;	
}
input {
    width: 100%;
    background:transparent;
	color: white;
	
border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: hidden;
  
}


.hi{
            height: 99%;
            width: 99%;
            border-collapse: collapse;
            border: 1px solid black;
        }
		
		.liner{background: linear-gradient(to right, black, red 50%, red 50%, black);}
	iframe{border: 1px solid transparent;}
</STYLE>

<body>









<!-- Place this element in your HTML body where you want to display the response -->
<br>
<form id="labnol" method="POST" action="">
<center>

<table border='1'class='hi'>

<tr><td colspan='3'><b>Digital Human Assistan AI Bot</TR></TD>
<tr HEIGHT='40%'><td colspan='3'>&nbsp; </TR></TD>

<tr>
<td>

<table>
        <tr><td align='center'><iframe src="ii.php " width='100%' height="100" name='hum'class='spin'></iframe></tr>
        <tr><td>+</td></tr>
        <tr><td><iframe src="seepic.php " width='100%' height="100" name='huum'class='spin'></iframe></td></tr>
		
		
		
    </table>

    <!-- Center-aligned table -->
  <td>  <table id="center-table" width='100%'>
  
  
 	 <tr>
      <td align='center' colspan='3' CLASS='vid'width='100%'><video id="lipSyncVideo" src="55.mp4" loop muted></video></td>
    </tr>
	
	
	
	
<tr><td colspan='3'>&nbsp; </TR></TD>
<tr HEIGHT='40%'><td colspan='3'>&nbsp; </TR></TD>
<tr><td colspan='3'>&nbsp; </TR></TD>
<tr HEIGHT='40%'><td colspan='3'>&nbsp; </TR></TD>

          <td align='center' class='liner'width='200'> Query: <td align='center'><input type="text" id="userName" name="userName" SIZE='50%'/><td rowspan='2'class='liner'width='200'><input type='submit'></td>
        </tr>
        <tr>
            <td align='center' class='liner'width='200'>Response:<td align='center'><input type="text" id="response" name="response" SIZE='50%'/> </td>
        </tr>
 

   
</form>
    </table>

    <!-- Right-aligned table -->
 <td>   <table id="right-table">
        <tr>
            <td align='center'><iframe src="iii.php " width='100%' height="100" name='tum'class='spin'></iframe>
        </tr>
        <tr>
           <td>+</td>
        </tr>
        <tr>
            <td><iframe src="seepic.php" width='100%' height="100" name='tuum'class='spin'></iframe></td>
        </tr>
    </table>
</body>





	
	


<?php
function getApiResponseFromCache($query) {
    // Specify the cache folder path on the server
    $cacheFolderPath = 'cache/';

    // Generate a unique filename for the query to use as the cache key
    $cacheKey = md5($query);

    // Check if the cache file exists and is not expired (you can set an expiration time as per your requirement)
    $cacheFile = $cacheFolderPath . $cacheKey . '.txt';
    if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 3600) { // Cache is valid for 1 hour
        // If the cache file exists and is not expired, read the response from cache
        return file_get_contents($cacheFile);
    }

    // If the cache file does not exist or is expired, return false
    return false;
}

function storeApiResponseInCache($query, $response) {
    // Specify the cache folder path on the server
    $cacheFolderPath = 'cache/';

    // Generate a unique filename for the query to use as the cache key
    $cacheKey = md5($query);

    // Store the response in the cache file
    $cacheFile = $cacheFolderPath . $cacheKey . '.txt';
    file_put_contents($cacheFile, $response);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['userName'];

    switch ($userName) {
case "who are you":
$response = 'I am an AI language model developed by Computer Science-Department & MCA Students. My purpose is to assist and provide information to users based on the questions and queries posed to me.';
break;
			
case "are you there":
$response = 'Yes, I am here and I am listening to you.';
break;

case "i love you":
$response = 'Thank you, but I am just an AI language model.';
break;
			
case "what is your name":
$response = 'My name is CJ';
break;
        
case "how old are you":
$response = 'As an AI language model, I dont have an age or physical existence. I am a program developed by Computer Science-Department & MCA Students';
break;
        
		
case "do you have life":
$response = 'As an AI language model, I dont have consciousness or feelings, so I dont possess life';
break;
		  
case "where are you now":
$response = 'I m in ICFAI University Nagaland';
break;
		  
		  
		  
		  
		  
		
        default:
            // If the query is not matched with any specific case, check the cache first
            $cachedResponse = getApiResponseFromCache($userName);

            if ($cachedResponse !== false) {
                // If the response is in cache, use it
                $response = $cachedResponse;
            } else {
                // If the response is not in cache, make API request
                $apiKey = 'X2KGLK-644VH68H8R'; // Replace this with your actual Wolfram Alpha API key
                $apiUrl = "http://api.wolframalpha.com/v1/spoken?i=" . urlencode($userName) . "&appid=" . $apiKey;

                // Make the HTTP request using file_get_contents()
                $response = @file_get_contents($apiUrl);

                if ($response === false) {
                    $response = 'As of now i dont have answers to you queries.But i am learning a new language skills and data set trained by my developer.';
                } else {
                    // Check if the response contains the phrase "Wolfram Alpha did not understand your input"
                    if (stripos($response, 'Wolfram Alpha did not understand your input') !== false) {
                        $response = 'As of now i dont have answers to you queries.But i am learning a new language skills and data set trained by my developer.';
                    } 
			
										else if (stripos($response, "Info@wolframalpha.com") !== false) {
                        $response = 'As an AI language model, i live in internet';
                    }
					
					
					
					
					
					
					
					
					else if (stripos($response, "No, I'm afraid you have me at a disadvantage there. My name is Wolfram Alpha. What's yours?") !== false) {
                        $response = 'As an AI language model, I dont have access to personal data about individuals';
                    } else if (stripos($response, "No spoken result available") !== false) {
                        $response = 'As an AI language model, I don\'t have access to personal data about individuals';
                    } 

                }

                // Store the response in the cache
                storeApiResponseInCache($userName, $response);
            }
            break;
    }

    // Use the $response value to display and speak the response.
    echo "<script>
        var msg = new SpeechSynthesisUtterance(decodeURIComponent('$response'));
        msg.lang = 'en-GB';
        
        // Get the video element
        var video = document.getElementById('lipSyncVideo');

        // Function to play the video and sync with speech
        function playVideoSync() {
            video.play();
        }

        // Attach event listeners to sync video with speech
        msg.addEventListener('start', playVideoSync);
        msg.addEventListener('end', function() {
            video.pause();
            video.currentTime = 0; // Reset video to start
			
            document.getElementById('response').value = '';
            document.getElementById('userName').value = '';
        });
        msg.addEventListener('onboundary', function(event) {
            var wordIndex = event.charIndex;
            var wordsPerSecond = 5; // Adjust this value as needed to sync video with speech
            video.currentTime = wordIndex / wordsPerSecond;
        });

        // Speak the response
        window.speechSynthesis.speak(msg);

        // Display the response
        document.getElementById('response').value = decodeURIComponent('$response');
        document.getElementById('userName').value = '$userName';
    </script>";
}
?>



</body>
</html>



