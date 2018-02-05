<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller {

	public function login()
  {
    $credenciais = Request::only('email', 'password');
		dd($credenciais);
    if (Auth::attempt($credenciais)) {
      return "Usuário NOME logado com sucesso!";
    }
    return "As credenciais não são válidas";
  }

}
