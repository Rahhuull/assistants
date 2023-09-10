
<html>

  <script src='AI.js'></script>
  
   <script src='full screen.js'></script>
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
input {
    width: 100%;
    background:black;
	color: #02feff;
	
border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
  border-bottom-style: hidden;
  background-color: black;
}

</style>
  
<script>
  annyang.start({ autoRestart: true, continuous: false });
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


<html>

<body>









  <table border='1'height="99%"width="100%">
<form id="labnol" method="POST" action="2.php"target="Frame2">
<tr><td HEIGHT="1%" align='center'>
  <input type="text"id="userName" name="userName" SIZE='187%'/>

  
  </td></tr>
  
  

</form>    

 <tr><td><iframe name="Frame2" src="a.html" class="container"frameborder="0" scrolling="no"width="100%" height="100%"></iframe>
</tr></td></table>


<button onclick="fullScreenApi.requestFullScreen(document.documentElement)"id="autoid"/>

 </body>
</html>
<html>





</head>
