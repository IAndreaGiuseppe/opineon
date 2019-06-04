<?php

namespace Agpretto\Opineon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Agpretto\Opineon\Contracts\SubjectInterface;
use Agpretto\Opineon\Traits\HasComments;

class Opinion extends Model implements SubjectInterface {

 use SoftDeletes, HasComments;

 /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'opinions';

 /**
  * Don't auto-apply mass assignment protection.
  */
 protected $guarded = [];


 // - relations

 /**
  * An opinion always belongs to a user
  */
 public function author() {
  return $this->belongsTo( config( 'opineon.userModel' ), 'author_id' );
 }
 
 /**
  * The opineon subject
  */
 public function subject() {
  return $this->morphTo( 'subject' );
 }
}
