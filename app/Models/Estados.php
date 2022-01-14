<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    /**
     * Nombre de la tabla a utilizar.
     *
     * @var string
     */
    protected $table = 'estados';

    /**
     * Llave primaria a utilizar.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    /**
     * Relaciones que deben emitirse.
     *
     * @var array<string>
     */
    protected $with = [
        //
    ];

    /**
     * Relaciones entre modelos
     */
    public function municipios()
    {
        return $this->hasMany(Municipios::class, 'id_estado', 'id');
    }
}
