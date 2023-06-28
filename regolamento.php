<!DOCTYPE html>
<html>
<head>
<?php include 'controller.php'; ?>
</head>

<body onload="pazzesca()">
<?php header("Location: http://127.0.0.1/Project_pHp/BackUPFlip.html"); ?>
</body>

<script>
  function pazzesca(){
    var flag = "<?php $_SESSION['flag']; ?>";

    if (flag == "true") {
      header("Location: http://127.0.0.1/Project_pHp/BackUPFlip.html");
    } 
    else {
      header("Location: http://127.0.0.1/Project_pHp/BackUPFlip.html");
    }
  }
</script>
</html>
