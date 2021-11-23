<?php

class Cruiser {
  private $conn;
  private $id;

  public function __construct($conn, $id) {
    $this->conn = $conn;
    $this->id = $id;
  }

  public function getCruiser() {
    $query = mysqli_query($this->conn, "SELECT * FROM cruisers WHERE id='$this->id'");
    $result = mysqli_fetch_array($query);

    $cruiser = [$result['id'], $result['name'], $result['length'], $result['image_path']];

    return $cruiser;
  }

}

?>