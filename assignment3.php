<?php
  require_once 'ChildClass.php';
  $fantasyLeague = new ChildClass("ESPN",2016);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Fantasy Football League</title>
  </head>

  <body>
    <h1>2016 Fantasy Football League Results</h1>

    <section>
      <p>Here is the fantasy football league</p>
      <?= $fantasyLeague; ?>

      <p>I've got some friends to join the league</p>
      <?= $fantasyLeague; ?>

      <p>We set our team names</p>
      <?= $fantasyLeague; ?>

      <p>Then we played the first week</p>
      <?= $fantasyLeague; ?>

      <p>And continued for the entire season</p>
      <?= $fantasyLeague; ?>

      <p>The winner and loser changed their names</p>
      <?= $fantasyLeague; ?>
    </section>

  </body>
</html>
