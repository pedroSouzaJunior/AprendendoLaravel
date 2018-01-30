<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	public $timestamps = false;
	protected $fillable = array('id','nome', 'descricao', 'valor', 'quantidade', 'tamanho');
	protected $guarded = ['id'];
}
