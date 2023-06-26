<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 *
 * @property $id
 * @property $name_provider
 * @property $address
 * @property $address_mail
 * @property $number_phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Batchesmedication[] $batchesmedications
 * @property Entrance[] $entrances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Provider extends Model
{

    static $rules = [
		'name_provider' => 'required',
		'address' => 'required',
		'address_mail' => 'required',
		'number_phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_provider','address','address_mail','number_phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function batchesmedications()
    {
        return $this->hasMany('App\Models\Batchesmedication', 'id_provider', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entrances()
    {
        return $this->belongsToMany('App\Models\Entrance', 'id_provider', 'id');
    }


}
