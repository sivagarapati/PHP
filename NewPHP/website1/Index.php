<?php
#SUPERGLOBALS- are bulitiin variable always avaliable in all scopes.

include 'server-info.php';
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>System info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
      <h1>Server & File Info</h1>
      <?php if($server): ?>
        <ul class="list-group">
          <?php foreach($server as $key => $value ): ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?></strong>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

<h1>client info</h1>
          <?php if($client): ?>
        <ul class="list-group">
          <?php foreach($client as $key => $value ): ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?></strong>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
  </body>

  </html>