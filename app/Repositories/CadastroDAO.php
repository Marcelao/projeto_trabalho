<?php

namespace App\Repositories;

use App\Models\Cadastro;

class CadastroDAO
{

    /**
     * @var
     * Return the model
     */

    private $model;

    public function __construct(Cadastro $a)
    {
        $this->model = $a;
    }

    public function lista_cadastro($id_cadastro = "")
    {
        $select = $this->model
                ->where("id_cadastro", "like", $id_cadastro."%");
        return $select->get();
    }

    public function lista_nome($nome = "")
    {
        $select = $this->model
                ->where("nome", "like", $nome."%");
        return $select->get();
    }

}
