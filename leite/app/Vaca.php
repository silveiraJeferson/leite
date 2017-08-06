<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaca extends Model
{
         protected $fillable = ['id','id_produtor','data_nascimento','raca','pai','mae','foto'];

}
