<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cliente;

class ClienteController extends Controller {
    //insere cliente no BD

    public function logado() {
        $this->render("logado/servicos");
    }

    public function cadastrar(){
        $id = rand(100000, 999999);
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $senha = filter_input(INPUT_POST, 'senha1');
        $senha2 = filter_input(INPUT_POST, 'senha2');
        $data_nasc = filter_input(INPUT_POST, 'data_nasc');
        if($nome == "" || $email == "" || $telefone == "" || $senha == "" || $data_nasc == ""){
            $this->render('registro');
            echo("<script>Swal.fire({icon: 'error',title: 'Preencha todos os campos!'})</script>");
            exit;
        }else if($senha != $senha2){
            $this->render('registro');
            echo("<script>Swal.fire({icon: 'error',title: 'As senha não são iguais!'})</script>");
            exit;
        }else{
            $dataatual = date("Y/m/d");
            if(strtotime($dataatual) < strtotime($data_nasc)){
                $this->render('registro');
                echo("<script>Swal.fire({icon: 'error',title: 'Insira uma data de nascimento válida!'})</script>");
                exit;
            }else{
                try{
                    $clientes = Cliente::select()->execute();
                    if($id==$clientes["id_cliente"]){
                        $id = rand(100000, 999999);
                    }
                    $data = Cliente::select()->where('email_cliente', $email)->execute();
                    if(count($data) == 0){
                        //resgata a data atual para ser inserida no id
                        //inserção dos dados no BD
                        Cliente::insert([
                            'id_cliente' => rand(100000, 666666),
                            'nome_cliente' => $nome,
                            'email_cliente' => $email,
                            'telefone_cliente' => $telefone,
                            'senha_cliente' => md5($senha),
                            'data_nasc_cliente' => $data_nasc
                        ])->execute();
                        //Redireciona para o home.php
                        $this->redirect('./cadastrado');

                    }else{
                        //Redireciona para o registro.php
                        $this->redirect('./registrorender');
                    }
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }
        }
    }

    //avisa que o cliente já está cadastrado
    public function emailexistente(){
        $this->render('cadcliente');
        echo("<script>Swal.fire({icon: 'error',title: 'O cliente já estava cadastrado'})</script>");
    }

    public function alterarform($id){
        $cliente = Cliente::select()->where('id_cliente', $id['id'])->one();
        $this->render('editcliente', [
            'cliente' => $cliente
        ]);
    }

    public function alterarformsenha($id){
        $cliente = Cliente::select()->where('id_cliente', $id)->one();
        $this->render('editcliente', [
            'cliente' => $cliente
        ]);
        echo("<script>Swal.fire({icon: 'error',title: 'As senhas não são iguais'})</script>");
    }

    public function alterar($id){
        $cliente = Cliente::select()->where('id_cliente', $id['id'])->one();
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $senha = filter_input(INPUT_POST, 'senha1');
        $senha2 = filter_input(INPUT_POST, 'senha2');
        $data_nasc = filter_input(INPUT_POST, 'data_nasc');
        if($nome && $email && $id){
            if($senha != $senha2){
                $this->redirect('./alterarformsenha/'.$cliente['id_cliente']);
            }else if($cliente['senha_cliente'] == $senha){
                Cliente::update()
                ->set('nome_cliente', $nome)
                ->set('email_cliente', $email)
                ->set('telefone_cliente', $telefone)
                ->set('senha_cliente', $senha)
                ->set('data_nasc_cliente', $data_nasc)
                ->where('id_cliente', $id['id'])
                ->execute();
                $this->redirect('./alterado');
            }else{
                Cliente::update()
                ->set('nome_cliente', $nome)
                ->set('email_cliente', $email)
                ->set('telefone_cliente', $telefone)
                ->set('senha_cliente', md5($senha))
                ->set('data_nasc_cliente', $data_nasc)
                ->where('id_cliente', $id['id'])
                ->execute();
                $this->redirect('./alterado');
            }
        }
    }
    
    public function deletar($id){
        Cliente::delete()->where("id_cliente", $id["id"])->execute();
        $this->redirect('./');
    }
    
    public function alterado() {
        $clientes = Cliente::select()->execute();

        $this->render('home', [
            'clientes' => $clientes
        ]);
        
        echo("<script>Swal.fire(
            'Dados Alterados!',
            '',
            'success'
          );</script>");
    }
}