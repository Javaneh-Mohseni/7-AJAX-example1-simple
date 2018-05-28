<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
  <title>AJAX with JavaScript</title>
  <script>
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'sidebar.php');
  xhr.onreadystatechange = function () {
    if (xhr.readyState ===  4) {
      if (xhr.status === 200) {
        document.getElementById('ajax').innerHTML = xhr.responseText;
      } else if (xhr.status === 404) {
          //file not foudn error
          alert(xhr.statusText);
      } else if (xhr.status === 500) {
        //server had a problem
        alert(xhr.statusText);
      }
    }
  };

  function sendAJAX() {
    xhr.send();
    document.getElementById('load').style.display = 'none';
  }
  </script>
</head>
<body>
  <div class="grid-container centered">
    <div class="grid-100">
      <div class="contained">
        <div class="grid-100">
          <div class="heading">
            <h1>Bring on the AJAX</h1>
          </div>
          <button id="load" onclick="sendAJAX()" class="button">Bring it!</button>
          <ul id="ajax">

          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
