<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["imageData"])) {
  // Get the image data from the POST request
  $imageData = $_POST["imageData"];
  
  // Decode the base64-encoded image data
  $decodedData = base64_decode(str_replace('data:image/jpeg;base64,', '', $imageData));
  
  // Create a unique filename for the image
  $filename = "kamal/Pic_" . date("Y-m-d_H-i-s") . ".jpeg";
  
  // Save the image to the kamal folder
  file_put_contents($filename, $decodedData);
  
  // Send a success response back to the client
  http_response_code(200);
  echo "Image saved successfully.";
} else {
  // Send an error response if the request is not valid
  http_response_code(400);
  echo "Bad Request.";
}
?>
