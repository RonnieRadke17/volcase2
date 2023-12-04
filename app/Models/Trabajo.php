<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajo
 *
 * @property $id
 * @property $trabajo
 * @property $descripcion
 * @property $fecha_Inicio
 * @property $fecha_Fin
 * @property $comentario
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Calendario[] $calendarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trabajo extends Model
{
    
    static $rules = [
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['trabajo','descripcion','fecha_Inicio','fecha_Fin','comentario','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calendarios()
    {
        return $this->hasMany('App\Models\Calendario', 'ID_Trabajo', 'id');
    }
    

}
