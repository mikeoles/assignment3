<?php
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
    private $teamName;
    private $wins;
    private $losses;
    private $players = array();

    public function __construct($leagueName, $website, $year, $teamName, $wins, $losses){
      parent::__construct($leagueName, $while, $year);
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
      $roster;
      foreach($players as $name){
        $roster . $name . "\n";
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
      $leagueInfo = parent::_toString();
      $teamInfo = "Team: " . $this->getTeamName . "\n Record: " . $this->getRecord . "\n " . $this->getRoster;
      return $leagueInfo . $teamInfo;
    }
	}
?>
