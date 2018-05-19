<?php

namespace arq;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable = array('nome', 'estoque', 'preco');

    protected $guarded = ['id'];
}
