<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	public $timestamps = false;
  protected $guarded = ['id'];
  
  public function produtos()
  {
    return $this->hasMany('estoque\Produto');
  }
}
