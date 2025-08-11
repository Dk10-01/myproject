<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;

class Produtocontroller extends Controller
{
   public function index()
{ 
 return view('users.index');
}


public function create()
{
 return view('users.create');
}

public function store(ProdutoRequestt $request)
{
$request->validated();

Produto::create([
   'name' => $request->name,
   'preco'=> $request->decimal,
   'descricao'=> $request->string,
]);

return redirect()->route('produto.index')->with('success','Usuário
cadastrado com sucesso!');

}



}
