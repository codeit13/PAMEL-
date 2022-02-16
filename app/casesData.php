<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casesData extends Model
{
    protected $table = "casesData";
    protected $fillable = [
        'caseTitle', 'preparationFile', 'organisedFile', 'fusedFile', 'configFile',
    ];
}
