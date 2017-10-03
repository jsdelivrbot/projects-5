<!DOCTYPE html>
<html>
<head>
	<title>pmri</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- JS file -->
<script src="auto/jquery.easy-autocomplete.min.js"></script> 

<!-- CSS file -->
<link rel="stylesheet" href="auto/easy-autocomplete.min.css"> 

<!-- Additional CSS Themes file - not required-->
<link rel="stylesheet" href="auto/easy-autocomplete.themes.min.css"> 


</head>
<body>
  <?php 
    $url = "https://api.intrinio.com/companies";
    
    $options = array(
    'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded",
    'header' => "Authorization: Basic " . base64_encode("bf74019dff7d62dbb876afe4429ff5e8:ffaf7422618b158727f6ca24c6ee8f54")
    )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

  ?>
  
	<input id="basics" />


  <script type="text/javascript">
    var options = {
      data: ["blue", "green", "pink", "red", "yellow"]
    };
    //var  options = <?= json_encode($result); ?>;

    $("#basics").easyAutocomplete(options);
  </script>

</body>
</html>