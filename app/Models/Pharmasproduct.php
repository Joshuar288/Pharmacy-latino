<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pharmasproduct
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $datr_fabication
 * @property $date_due
 * @property $purchase_price
 * @property $sale_price
 * @property $doses
 * @property $quantity
 * @property $id_provider
 * @property $created_at
 * @property $updated_at
 *
 * @property Discard[] $discards
 * @property Entrancesproduct[] $entrancesproducts
 * @property Providere[] $provideres
 * @property Entrance[] $entrances
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pharmasproduct extends Model
{

    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'datr_fabication' => 'required',
		'date_due' => 'required',
		'purchase_price' => 'required',
		'sale_price' => 'required',
		'doses' => 'required',
		'quantity' => 'required',
		'id_provider' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','datr_fabication','date_due','purchase_price','sale_price','doses','quantity','id_provider'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discards()
    {
        return $this->hasMany('App\Models\Discard', 'id_product', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrances()
    {
        return $this->belongsToMany(Entrance::class, 'entrancesproducts', 'id_entrance', 'id_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function providere()
    {
        return $this->hasOne('App\Models\Providere', 'id', 'id_provider');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'id_product', 'id');
    }


}
