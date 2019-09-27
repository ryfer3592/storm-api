<?php
class Conexao
{
    var $cr; // atributo conexão real

    function conectar()
    {
        $this->cr = new mysqli("localhost", "root", "usbw", "storm-db"); // ip do banco, usuário do banco, senha do banco e nome do banco
        if ($this->cr->connect_error) { // Está testando se a variável existe e se está ocorrendo o ERRO, ou seja, um testador
            die("Erro de conexão com o Banco de Dados <br/>" . $this->cr->connect_error);
        } else {
            echo " Conectado com sucesso!";
        }
    }
}
