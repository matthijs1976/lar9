<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
<<<<<<< HEAD
   //table name
   //protected $table = 'posts';

   protected $fillable = [
       'title',
       'body',
       'fototitle',
    ];

=======
     //table name
     protected $table = 'posts';
     //primary key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = 'true';
>>>>>>> d9a58528b49f903808445762182ebad212744fe2
}
