<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $sale_price
 * @property $quantity
 * @property $id_product
 * @property $created_at
 * @property $updated_at
 *
 * @property Pharmasproduct $pharmasproduct
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'sale_price' => 'required',
		'quantity' => 'required',
		'id_product' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sale_price','quantity','id_product'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pharmasproduct()
    {
        return $this->hasOne('App\Models\Pharmasproduct', 'id', 'id_product');
    }
    

}
