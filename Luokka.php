<?php
class Drinkki {
  // Properties
  public $nimi;
  public $ainesosa;
  public $holi_prosentti;
  // Methods
  function set_nimi($nimi) {
    $this->nimi = $nimi;
  }
  function get_nimi() {
    return $this->nimi;
  }
}
?>
