<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $direccion
 * @property $telefono
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','telefono'];



}
