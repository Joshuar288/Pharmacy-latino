<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrance
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
 * @property Batchesentrance[] $batchesentrances
 * @property Entrancesdiscard[] $entrancesdiscards
 * @property Entrancesproduct[] $entrancesproducts
 * @property Pharmasproduct[] $pharmasproducts  
 * @property Providere $providere
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrance extends Model
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
    public function batchesmedications()
    {
        return $this->belongsToMany(Batchesmedication::class, 'batchesentrances', 'id_batche','id_entrance');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discards()
    {
        return $this->belongsToMany(Discard::class, 'entrancesdiscards', 'id_entrance','id_discard');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'id_entrance', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medications()
    {
        return $this->belongsToMany(Medication::class,'entrancesmedications', 'id_entrance','id_medication');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pharmasproducts()
    {
        return $this->belongsToMany(Pharmasproduct::class,'entrancesproducts', 'id_entrance','id_product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function providere()
    {
        return $this->hasOne('App\Models\Providere', 'id', 'id_provider');
    }


}
