<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">Adicionar Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <!--Notação do 'foreach' usada para deixar mais organizado a escritade codigos html dentro dele -->
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?php echo $usuario->getId() ?></td>
            <td><?php echo $usuario->getNome() ?></td>
            <td><?php echo $usuario->getEmail() ?></td>
            <td>
                <!--o endereço passado no 'href' faz a ligação do botão com o 'id' do respectivo
                item a ser alterado e é o complemento '?id=' quem faz isso e passa a informação
                pelo metodo GET -->
                <a href="editar.php?id=<?= $usuario->getId() ?>">[Editar]</a>
                <a href="escluir.php?id=<?= $usuario->getId() ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>