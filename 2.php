<body bgcolor="#02feff">
<style>
body {
  background: black;
  color: #02feff;
}
* {
  user-select: none;
  font: 20px 'Agency FB', sans-serif;
}
table{
	border:1px #02feff  ;
	
	
}

</style>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['userName'];
    
    switch ($userName) {
        case "who are you":
            $response = 'I am a voice response system.';
            break;
        case "are you there":
            $response = 'Yes, I am here and I am listening to you.';
            break;
        case "i love you":
            $response = 'Thank you, but I am just an AI language model.';
            break;
        // Add other cases for specific queries...
        default:
            // If the query is not matched with any specific case, call Wolfram API.
            $apiKey = 'X2KGLK-644VH68H8R'; // Replace this with your actual Wolfram Alpha API key
            $apiUrl = "http://api.wolframalpha.com/v1/spoken?i=" . urlencode($userName) . "&appid=" . $apiKey;

            // Make the HTTP request using file_get_contents()
            $response = @file_get_contents($apiUrl);

            if ($response === false) {
                $response = 'Sorry, I could not find an answer to your question.';
            }
            break;
    }

    // Use the $response value to display and speak the response.
    echo "<script>var msg = new SpeechSynthesisUtterance('$response');msg.lang = 'en-GB';window.speechSynthesis.speak(msg);msg.onend=function(){window.location.href = '2.php';};</script>";
    echo "$response";
}
?>
