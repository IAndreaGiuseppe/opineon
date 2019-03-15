<?php

namespace Agpretto\Opineon\Traits;

trait HasOpinions {


 // - relations

 /**
  * Implementors may have many opinions
  */
 public function opinions() {
  return $this->morphMany( config( 'opineon.opinionModel' ), 'subject' );
 }
}
