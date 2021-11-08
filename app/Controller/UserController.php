<?php

namespace App\Controller;

use App\Models\User;

class UserController extends Controller
{
    //Meio de campo
    /**
     * 
     * Listar – O controller deve buscar com a Model uma lista de contatos e enviar para View.
     * Criar – O controller deve prover um meio para que o usuário entre com um novo contato, então solicita a view para exibir um formulário.
     * Editar – O controller deve buscar um contato solicitado pelo usuário, contatando a Model para isso e deve exibir isso para o usuário, enviando para a View.
     * Salvar – O controller deve salvar um contato novo criado pelo usuário no formulário da View. Controller recebe os dados através de uma requisição post e envia os dados para a Model salvar no banco de dados.
     * Atualizar – Funciona parecido com Salvar, a diferença é que o Controller deve pedir a model um contato a ser atualizado, e enviar para model o contato atualizado, que será salvo no banco de dados. Em outras palavras, o Controller vai localizar o contato que o usuário quer atualizar e faz isso por pedir a Model, utilizando seu método Find. Quando tiver um contato, lança os dados atualizados nele, conformes recebidos por um “Request”. Usa novamente a Model para salvar os dados no banco.
     * Excluir – O controller deve solicitar a Model a exclusão de um contato, conforme selecionado pelo usuário na Grade de listagem de contatos.
     */

    public function toList()
    {
        $users = User::getUsers();
        return $this->view('grade', ['users' => $users]);
    }
    public function update()
    {

    }
    
    public function delete($data)
    {

    }
}