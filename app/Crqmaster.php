<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crqmaster extends Model
{
    protected $fillable =[
        'crq_desc',
        'ayear'
    ];

    protected $table ="crqmastertbs";

}
