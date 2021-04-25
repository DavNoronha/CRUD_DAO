<?php
//              Aplicando DAO(Data Access Object)
//  O DAO serve para colocar em 'classes' os objetos que estaremos manipulando com o CRUD
//deixando padronizado como deve ser a interação entre o programa e o banco de dados, seja ele qual for.

//criando classe 'Usuario', que contem as informações necessárias
class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = ucwords(trim($n));
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $this->email = strtolower(trim($e));
    }
}

//criando 'interface' para padronizar o conteúdo obrigatório nas classes que irão
//fazer a interação com o banco de dados
interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}