<?php 
  error_reporting(0);
  $link = $_GET['link'];
  if ($link) {
    echo '<script type="text/javascript">
    document.getElementById("prosesjudul").innerHTML = "Dialihkan otomatis";
    document.getElementById("prosesket").innerHTML = "Harap tunggu";
    document.getElementById("linktime").innerHTML = "Memproses";
    document.getElementById("linkhelper").innerHTML = "";
        </script>
        ';
    echo '
      <script type="text/javascript">
      var timer = 5,
        display = document.querySelector("#linktime");
        startTimer(timer, display, "'.$link.'");
      </script>
    ';
  }
?>
