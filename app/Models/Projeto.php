<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Projeto
 *
 * @property $id
 * @property $nome
 * @property $imagem
 * @property $descriçao
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Projeto extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'imagem' => 'required',
		'descriçao' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','imagem','descriçao','url'];



}
