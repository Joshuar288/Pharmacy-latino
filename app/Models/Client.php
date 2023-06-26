<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $user_name
 * @property $email
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @property Salesclient[] $salesclients
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{

    static $rules = [
		'user_name' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_name','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'salesclients', 'id_sale','id_client');
    }


}
