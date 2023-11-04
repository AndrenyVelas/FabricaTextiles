<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre
 * @property $estado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estado'];



}
