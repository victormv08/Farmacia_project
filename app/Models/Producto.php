<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre_producto
 * @property $cantidad_producto
 * @property $precio_producto
 * @property $id_categoria
 * @property $descripcion_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Categorium $categorium
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre_producto' => 'required',
		'cantidad_producto' => 'required',
		'precio_producto' => 'required',
		'id_categoria' => 'required',
		'descripcion_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_producto','cantidad_producto','precio_producto','id_categoria','descripcion_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categorium()
    {
        return $this->hasOne('App\Models\Categorium', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'id_producto', 'id');
    }
    

}
