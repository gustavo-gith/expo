<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api"

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Apaga a base de dados se existir
$sql = "DROP DATABASE IF EXISTS api";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados 'api' apagado com sucesso, se existia.<br>";
} else {
    echo "Erro ao apagar banco de dados: " . $conn->error . "<br>";
}

// Cria a base de dados
$sql = "CREATE DATABASE api";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados 'api' criado com sucesso.<br>";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error . "<br>";
}

// Seleciona a base de dados
$conn->select_db("api");

// SQL para criar a tabela 'produto'
$sql = "CREATE TABLE produto (
    Id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    preco_venda DECIMAL(10, 1) NOT NULL,
    preco_custo DECIMAL (10, 1) NOT NULL,
    lucro DECIMAL (10, 1) NOT NULL,
    quantidade_estoque DECIMAL (10, 1) NOT NULL,
    categoria VARCHAR (255) NOT NULL
  
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'produto' criada com sucesso.<br>";
} else {
    echo "Erro ao criar tabela: " . $conn->error . "<br>";
}

// Fecha a conexão
$conn->close();
?>