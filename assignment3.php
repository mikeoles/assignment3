<?php
  require_once 'ChildClass.php';
  $fantasyTeam = new ChildClass("Buffalo Ballers","ESPN",2016,"Ball So Hard University");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Fantasy Football</title>
    <link rel="stylesheet" href="assignment3.css">
  </head>

  <body>
    <h1>2016 Fantasy Football League Results</h1>

    <section id="fantasyResults">

      <h3>Here is my fantasy football team</h3>
      <?= $fantasyTeam; ?>

      <h3>After the draft i'm ready for the season</h3>
      <?= $fantasyTeam->addPlayer("QB-Joe Flacco"); ?>
      <?= $fantasyTeam->addPlayer("RB-Melvin Gordon"); ?>
      <?= $fantasyTeam->addPlayer("RB-Lamar Miller"); ?>
      <?= $fantasyTeam->addPlayer("WR-Steve Smith Sr."); ?>
      <?= $fantasyTeam->addPlayer("WR-Jordy Nelson"); ?>
      <?= $fantasyTeam->addPlayer("TE-Rob Gronkowski"); ?>
      <?= $fantasyTeam->addPlayer("DEF-Baltimore Ravens"); ?>
      <?= $fantasyTeam; ?>

      <h3>I've had a tough start to the season</h3>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->lose(); ?>
      <?= $fantasyTeam->lose(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->lose(); ?>
      <?= $fantasyTeam->lose(); ?>
      <?= $fantasyTeam; ?>


      <h3>But added a few good players</h3>
      <?= $fantasyTeam->addPlayer("QB-Marcus Mariota"); ?>
      <?= $fantasyTeam->addPlayer("RB-Jay Ajayi"); ?>
      <?= $fantasyTeam->addPlayer("WR-Travis Benjamin"); ?>
      <?= $fantasyTeam; ?>

      <h3>And won some games</h3>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->lose(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam; ?>

      <h3>Fantasy Football Champion!</h3>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->win(); ?>
      <?= $fantasyTeam->winChampionship(); ?>
      <?= $fantasyTeam; ?>
    </section>

  </body>
</html>
