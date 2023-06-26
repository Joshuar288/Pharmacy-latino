<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Batchesentrance
 *
 * @property $id
 * @property $id_batche
 * @property $id_entrance
 * @property $created_at
 * @property $updated_at
 *
 * @property Batchesmedication $batchesmedication
 * @property Entrance $entrance
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Batchesentrance extends Model
{
    
    static $rules = [
		'id_batche' => 'required',
		'id_entrance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_batche','id_entrance'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function batchesmedication()
    {
        return $this->hasOne('App\Models\Batchesmedication', 'id', 'id_batche');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entrance()
    {
        return $this->hasOne('App\Models\Entrance', 'id', 'id_entrance');
    }
    

}
