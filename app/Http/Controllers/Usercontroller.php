<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class Usercontroller extends Controller
{
   public function index()
{ 
 return view('users.index');
}


public function create()
{
 return view('users.create');
}

public function store(UserRequest $request)
{
$request->validated();

user::create([
   'name' => $request->name,
   'preco'=> $request->decimal,
   'descricao'=> $request->string,
]);

return redirect()->route('produto.index')->with('success','Usuário
cadastrado com sucesso!');

}



}
