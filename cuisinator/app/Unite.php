<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unites';

    public function quantites()
    {
        $this->hasMany('App\Quantite', 'id_unite');
    }
}
