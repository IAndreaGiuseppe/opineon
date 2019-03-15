<?php

namespace Agpretto\Opineon\Traits;

trait CanComment {

 /**
  * Get the primary id of the model implementing this trait
  */
 protected function primaryId() {
  return (string) $this->getAttribute( $this->primaryKey );
 }

 /**
  * Comment subject
  */
 public function comment( array $data, $subject ) {
  $data = array_merge( [
   'author_id' => $this->primaryId(),
   'author_type' => get_class()
  ], $data );

  $comment = $subject->comments()->create( $data );

  return $comment;
 }


 // - relations

 /**
  * Implementors may have many comments
  *
  * @return \Illuminate\Database\Eloquent\Relations\MorphMany
  */
 public function comments() {
  return $this->morphMany( config( 'opineon.commentModel' ), 'author' );
 }
}
