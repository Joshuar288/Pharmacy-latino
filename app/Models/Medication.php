<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medication
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
 * @property Entrancesmedication[] $entrancesmedications
 * @property Providere $providere
 * @property Entrance[] $entrances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medication extends Model
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
    public function entrances()
    {
        return $this->belongsToMany(Entrance::class,'entrancesmedications', 'id_entrance','id_medication');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function providere()
    {
        return $this->hasOne('App\Models\Providere', 'id', 'id_provider');
    }


}
