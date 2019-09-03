<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crqmastertb extends Model

    {
        protected $fillable =[
            'crq_desc',
            'ayear'
        ];
    
        protected $table ="crqmastertbs";
    
    }

