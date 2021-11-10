<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PrincipalController extends Controller
{
    //
    public function index()
    {
        // Ir para Tela da Home
        $detalhe_lista = array();
        $cadastro = new \App\Repositories\CadastroDAO(new \App\Models\Cadastro);

        $listagem = $cadastro->lista_cadastro();
        $listagem_completa = json_decode($listagem, true);

        foreach($listagem_completa as $lista)
        {
            $detalhe_lista[] = $lista;
        }
        return view('home.index', compact('detalhe_lista'));
    }

    public function cadastro()
    {
        // Ir para Tela do Cadastro
        return view('home.cadastro');
    }

    public function salvar(Request $request)
    {
        // Novo Registro
        $nome = $request->Nome;
        $data = $request->data;
        $valor = $request->valor;

        date_default_timezone_set('America/Sao_Paulo');

        $cadastrar = new \App\Models\Cadastro();
        $cadastrar->nome = $nome;
        $cadastrar->data = $data;
        $cadastrar->valor = $valor;

        if($cadastrar->save())
        {
            return redirect()->route('home');
        }
    }

    public function alterar(Request $request)
    {
        // Apresentar na Tela o Registro Selecionado
        $id_selecionado = $request->numero;
        $altera_cadastro = array();
        $cadastro_selecionado = new \App\Repositories\CadastroDAO(new \App\Models\Cadastro());

        $resultado_cadastro = $cadastro_selecionado->lista_cadastro($id_selecionado);

        $cad_resultado = json_decode($resultado_cadastro, true);

        foreach($cad_resultado as $lista)
        {
           $altera_cadastro['listagem'] = [
               'id_cadastro' => $lista['id_cadastro'],
               'Nome' => $lista['nome'],
               'Data' => $lista['data'],
               'Valor' => $lista['valor'],
           ];
        }

        $resultado_cadastro = $altera_cadastro['listagem'];
        return view('home.edit', compact('altera_cadastro'));
    }

    public function excluir(Request $request)
    {
        //Localizar o id da linha para Excluir o Registro
        $id    = $request->id;

        date_default_timezone_set('America/Sao_Paulo');
        $cadastrar = new \App\Repositories\CadastroDAO(new \App\Models\Cadastro());
        $cadastrar = $cadastrar->lista_cadastro($id);

        if($cadastrar[0]->delete())
        {
            return redirect('home');
        }
    }

    public function atualizar(Cadastro $cadastro, Request $request)
    {
        // Fazer Alteração do Registro apena um Registro
        $nome = $request->Nome;
        $data = $request->data;
        $valor = $request->valor;
        $id    = $request->id;

        date_default_timezone_set('America/Sao_Paulo');

        $cadastrar = new \App\Repositories\CadastroDAO(new \App\Models\Cadastro());

        $cadastrar = $cadastrar->lista_cadastro($id);
        $cadastrar[0]->nome        = $nome;
        $cadastrar[0]->data        = $data;
        $cadastrar[0]->valor       = $valor;

        if($cadastrar[0]->save())
        {
            return redirect('home');
        }
    }
}
