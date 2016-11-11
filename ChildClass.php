<?php
	// this file will extend ParentClass.php

  require_once 'ParentClass.php';

	class ChildClass extends ParentClass {
    private $teamName;
    private $wins;
    private $losses;
    private $players = array();

    public function __construct($leagueName, $website, $year, $teamName){
      parent::__construct($leagueName, $website, $year);
      $this->teamName = $teamName;
      $this->wins = 0;
      $this->losses = 0;
    }

    public function getTeamName(){
      return $this->teamName;
    }

    public function getRecord(){
      return $this->wins . "-" . $this->losses;
    }

    public function getRoster(){
      $roster = "";
      foreach($this->players as $name){
        $roster .= $name . "<br>";
      }
      return $roster;
    }

    public function win(){
      $this->wins++;
    }

    public function lose(){
      $this->losses++;
    }

    public function addPlayer($playerName){
      array_push($this->players,$playerName);
    }

    public function winChampionship(){
      $this->teamName = $this->teamName . " CHAMPIONS";
    }

    public function __toString(){
      $leagueInfo = parent::__toString();
      $teamInfo = "Team: " . $this->getTeamName() . "<br> Record: " . $this->getRecord() . "<br> " . $this->getRoster() . "<br>";
      return $leagueInfo . $teamInfo;
    }
	}
?>
