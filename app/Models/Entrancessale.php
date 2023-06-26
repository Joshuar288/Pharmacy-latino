<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrancessale
 *
 * @property $id
 * @property $id_entrance
 * @property $id_sale
 * @property $created_at
 * @property $updated_at
 *
 * @property Entrance $entrance
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrancessale extends Model
{
    
    static $rules = [
		'id_entrance' => 'required',
		'id_sale' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_entrance','id_sale'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entrance()
    {
        return $this->hasOne('App\Models\Entrance', 'id', 'id_entrance');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sale');
    }
    

}
