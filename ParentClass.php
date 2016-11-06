<?php
	// This is the file for the parent class

	class ParentClass {
    private $leagueName;
    private $website;
    private $year;

    public function __construct($leagueName,$website,$age){
      $this->leagueName = $leagueName;
      $this->website = $website;
      $this->year = $year;
    }

    public function getLeagueName(){
      return $this->leagueName;
    }

    public function getWebsite(){
      return $this->website;
    }

    public function getYear(){
      return $this->year;
    }

    public function __toString(){
      $leagueInfo = $this->getLeagueName() . " is a fantasy league on " . this->getWebsite() . " for the year " . this->getYear();
      return $leagueInfo;
    }
	}

?>
