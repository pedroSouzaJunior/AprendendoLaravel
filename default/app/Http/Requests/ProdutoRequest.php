<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'nome' => 'required|max:100',
			'descricao' => 'required|max:255',
			'valor' => 'required|numeric',
			'tamanho' => 'required|max:100',
			'quantidade' => 'required'
		];
	}

	public function messages()
	{
		return[
			'required' => 'O campo :attribute não  pode ser vazio'
		];
	}

}
