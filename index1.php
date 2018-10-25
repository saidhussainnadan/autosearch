<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jjjj.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#c" ).autocomplete({
      source: 'search2.php'
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label id="l" for="Country">Country Name: </label>
  <input id="c">
</div>
</body>
</html>