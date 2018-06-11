<?php

  trait Spedizione
  {
    public $codetrack;
    public $corriere;
    public $velocità;

    public function__kmpercorsi($tempo)
    {
      echo $tempo*$this->velocità;
    }

  }

?>
