<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Salesclient
 *
 * @property $id
 * @property $id_sale
 * @property $id_client
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Salesclient extends Model
{
    
    static $rules = [
		'id_sale' => 'required',
		'id_client' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sale','id_client'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'id_sale');
    }
    

}
