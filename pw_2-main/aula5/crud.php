<?php

$db = new mysqli('localhost','root','','crud');

function getNomes(){
    global $db;
    $sql = "SELECT * FROM nomes";
    $result = $db ->query($sql);
    $nomes =[];
    while ($row = $result->fetch_assoc()){
        $nomes[] = $row;
    }  

    return $nomes;
}
function adicionarNOme($nome){
    global $db;
    $sql = "INSERT INTO nomes (nome) VALUES ('$nome')";
    $db->query($sql); 
}

function editarnome($id,$nome){
    global $db;
    $sql = "UPDATE nomes SET nome = '$nome' WHERE id =$id";
    $db-> query($sql);
}
function excluirNome($id){
    global $db ;
    $sql = "DELETE FROM nomes WHERE id =$id";
    $db-> query($sql);
}

$acao = isset($_GET['acao']) ? $_GET['acao'] : null;
$id = isset($_GET['id']) ? intval($_GET['id']): 0;
$nome = isset($_POST['nome']) ? $_POST['nome']:'';

if ($acao === 'adicionar'){
    adicionarNOme($nome);
    header('Location: crud.php');
    exit();
} elseif ($acao === 'editar'){
    $id = intval($_GET['id']);
    $nomeoriginal = ($_GET['nome']);
    $nome = $_POST['nome'];
    editarnome($id,$nome);
    headre('Location: editar.php?id=' . $id. 'nome=' . $nomeoriginal);
    exit();
} elseif ($acao === 'excluir'){
    excluirNome($id);
    header('Location: crud.php');
    exit();
}

$nomes = getNomes();
?>

<h1>Lista de Nomes</h1>
<from method='post' action="?acao=adicionar">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required="required">
    <button type="submit">Adicionar</button>
</from>

<table border="border">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Açôes</th>
</tr>