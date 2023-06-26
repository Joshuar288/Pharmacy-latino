<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entrancesdiscard
 *
 * @property $id
 * @property $id_entrance
 * @property $id_discard
 * @property $created_at
 * @property $updated_at
 *
 * @property Discard $discard
 * @property Entrance $entrance
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entrancesdiscard extends Model
{
    
    static $rules = [
		'id_entrance' => 'required',
		'id_discard' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_entrance','id_discard'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function discard()
    {
        return $this->hasOne('App\Models\Discard', 'id', 'id_discard');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entrance()
    {
        return $this->hasOne('App\Models\Entrance', 'id', 'id_entrance');
    }
    

}
