<?php
  $db = new PDO("mysql:dbname=bergej88; host=localhost",
                "bergej88", "plantDatabase");

  $states = $db->query ("SELECT Name FROM States");
  $plants = $db->query ("SELECT CommmonName From Plants");
 ?>


<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
    <body>
      <form action="" method="post">
        <div>
          <label>Plant</label><br>
          <input id="plants">
        </div>
        <div>
          <label>Date Planted:</label><br>
          <input type="date" name="dateplanted">
        </div>
        <div>
          <label>State Planted:</label><br>
          <select name="state">
          <?php
            foreach ($states as $state) { ?>
                      <option value="<?= $state["Name"] ?>" ><?=$state["Name"]?></option>
          <?php  } ?>
        </div>
      </form>
    </body>
</html>
