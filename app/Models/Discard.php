<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Discard
 *
 * @property $id
 * @property $reason
 * @property $quantity
 * @property $id_product
 * @property $created_at
 * @property $updated_at
 *
 * @property Entrancesdiscard[] $entrancesdiscards
 * @property Pharmasproduct $pharmasproduct
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Discard extends Model
{
    
    static $rules = [
		'reason' => 'required',
		'quantity' => 'required',
		'id_product' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reason','quantity','id_product'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrancesdiscards()
    {
        return $this->hasMany('App\Models\Entrancesdiscard', 'id_discard', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pharmasproduct()
    {
        return $this->hasOne('App\Models\Pharmasproduct', 'id', 'id_product');
    }
    

}
