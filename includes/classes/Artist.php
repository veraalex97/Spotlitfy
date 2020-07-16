<?php

  class Artist {
    private $con;
    private $id;
    private $name;

    public function __construct($con, $id) {
      $this->con = $con;
      $this->id = $id;
    }
  }

?>