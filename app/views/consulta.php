<div class="row container">
    <div class="col s12">
        <h3 class="light">Página de Consulta</h3>
    </div>

    <div class="col s12">
        <table>

                <tr>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>Ações:</th>
                </tr>
                <?php foreach($consulta as $reg){ ?>
                <tr>
                    <td><?=  $reg['nome'] ?></td>
                    <td><?= $reg['email'] ?></td>
                    <td><a href="?router=Site/editar/&id=<?= base64_encode($reg['id']) ?>">EDITAR</a> |
                        <a href="?router=Site/deletar/&id=<?=  base64_encode($reg['id']) ?>" class="red-text">DELETAR</a></td>
                </tr>
                <?php } ?>
        </table>
    </div>
</div>