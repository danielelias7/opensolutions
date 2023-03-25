<?= $header; ?>
<div class="container">
    <h2>Clientes</h2>
    <div class="mb-3">
        <a href="clients/create" class="btn btn-primary">Crear</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo Electronico</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?= $client['id']; ?></td>
                    <td><?= $client['name']; ?></td>
                    <td><?= $client['lastname']; ?></td>
                    <td><?= $client['phone']; ?></td>
                    <td><?= $client['email']; ?></td>
                    <td>
                        <a href="<?= base_url('/clients/edit') . '/' . $client['id']; ?>" class="btn btn-info">Editar</a>
                        <a href="<?= base_url('/clients/delete') . '/' . $client['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>