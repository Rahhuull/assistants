<style>
 body {overflow-x: hidden;overflow-y: hidden;}

.nopp{
padding:10px;
width: 150px;
height: 150px; 
border-radius: 90%; 
background: linear-gradient(to right, black, red 50%, red 50%, black);
border: 1px solid #560e02;



}
  #ig {
width: 150px;
height: 150px; 
border-radius: 90%;  }
</style>



  <div id="page-content">
<?php
$folderPath = 'kamal/';

// Get a list of all files in the folder
$files = scandir($folderPath);

// Filter the files to find ones matching the expected format
$matchingFiles = array();
foreach ($files as $file) {
    if (preg_match('/^Pic_\d{4}-\d{2}-\d{2}_\d{2}-\d{2}-\d{2}\.jpeg$/', $file)) {
        $matchingFiles[] = $file;
    }
}

// Sort the matching files in descending order (latest first)
rsort($matchingFiles);

if (!empty($matchingFiles)) {
    // Get the latest picture
    $latestPic = $matchingFiles[0];
    // Display the latest picture
    echo '<center>  <div id="page-content"class="nopp"><img src="' . $folderPath . $latestPic . '" alt="Latest Picture" id="ig"></div>';
} else {
    echo '<center>No pictures</center>';
}
?>
  </div>

  <script>
    // Function to fetch and update content using AJAX
    function refreshPageContent() {
      const xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Update the page content with the new data
          const pageContent = document.getElementById("page-content");
          pageContent.innerHTML = xhr.responseText;
        }
      };

      // Replace "your-page-url" with the URL of your server-side script that generates the updated content
      xhr.open("GET", "seepic.php", true);
      xhr.send();
    }

    // Call the refreshPageContent function after a specified time
    const refreshTimeInMilliseconds = 5000; // Adjust the time as needed (in this case, it's set to 5 seconds)
    setInterval(refreshPageContent, refreshTimeInMilliseconds);
  </script>
</body>
</html>
