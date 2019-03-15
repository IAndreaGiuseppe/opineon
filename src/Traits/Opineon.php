<?php

namespace Agpretto\Opineon\Traits;

trait Opineon {


 /**
  * User can express an opinion about a subject
  */
 public function express( array $data, $subject ) {
  $opinion = null;

  if ( !$this->hasOpinionOn( $subject ) ) {
   $data = array_merge( [
    'subject_id' => $subject->id,
    'subject_type' => get_class( $subject )
   ], $data );

   $opinion = $this->opinions()->create( $data );
  }

  return $opinion;
 }


 // - checks

 /**
  * Check if author has an opinion over a subject
  *
  * @return bool
  */
 public function hasOpinionOn( $subject ) {
  return $this->opinions()->where( [
   'subject_id' => $subject->id,
   'subject_type' => get_class( $subject )
  ] )->exists();
 }


 // - relations

 /**
  * Implementors may have many opinions
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function opinions() {
  return $this->hasMany( config( 'opineon.opinionModel' ), 'author_id' );
 }
}
