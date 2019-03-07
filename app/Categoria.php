<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  
    protected $fillable =[
        'descricao',
        'preco',
        'cor',
        'peso'
          ];

          
          public function produto()
          {
              return $this->belongsTo('App\Categoria');
          }


          
}
