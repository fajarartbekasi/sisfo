<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use AutoNumberTrait;
    protected $table = 'pendaftarans';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'no_pendaftaran'    => [
                'format'    => function() {
                    return 'REG/'.date('ymd'). '/?';
                },
                'length'=> 5
            ]
        ];
    }

}
