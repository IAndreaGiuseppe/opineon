<?php

namespace Agpretto\Opineon\Traits;

trait HasComments {


 // - relations

 /**
  * Implementors may have many comments
  */
 public function comments() {
  return $this->morphMany( config( 'opineon.commentModel' ), 'subject' );
 }
}
