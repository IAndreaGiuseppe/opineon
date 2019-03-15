<?php

namespace Agpretto\Opineon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model implements Commentable {

 use SoftDeletes;

 /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'comments';

 /**
  * Don't auto-apply mass assignment protection.
  */
 protected $guarded = [];


 // - relations

 /**
  * A comment belongs to an author
  */
 public function author() {
  return $this->morphTo( 'author' );
 }

 /**
  * A comment belongs to a subject
  */
 public function subject() {
  return $this->morphTo( 'subject' );
 }
}
