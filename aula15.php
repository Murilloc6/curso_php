<?php

// DBEAVER.IO

// CRUD
/*
    C - Creat
    R - Read
    U - Update
    D - Delete
*/


// SQL
/*
    S - Structure
    Q - Query
    L - Language
*/

// Oque é? Quais as diferenças?
// - Banco Relacional
// - Banco Não Relacional


class Usuario{
    
    public $email;
    public $cpf;
    public $senha;
    public $permissao;

    public function criar() {}
    public function getUsuario($login) {}      // 1 Usuario
    public function getUsuarios() {}           // Todos Usuarios
    public function atualizar($id) {}          // 1 Usuario
    public function excluir($id) {}     // 1 Usuario (Ex: Excluir 1 pessoa do insta q violou as regras, ao inves de todos os usuarios)

}





