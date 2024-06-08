<?php
if (isset($_POST['candidato'])) {
    $candidato = $_POST['candidato'];

    // Conexão com o banco de dados
    $servername = "localhost"; // Mudar o indereço IPv4 de acordo  com a rede de wi-fi
    $username = "root";
    $password = "";
    $dbname = "urnaeleitoral"; // Nome do banco de dados

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Insira o nome no banco de dados
    $sql = "INSERT INTO contagem_de_votos (candidato) VALUES ('$candidato')";

    if ($conn->query($sql) === TRUE) {
        echo "Voto inserido com sucesso no banco de dados.";
    } else {
        echo "Erro ao inserir nome: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}
?>