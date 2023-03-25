<?= $header; ?>
<div class="container">
    <h2>Editar</h2>
    <a href="<?=base_url('clients')?>">Home</a>
    <?php if (session('message')) : ?>
        <div class="alert alert-danger" role="alert">
            <?=session('message');?>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('/clients/update/'.$client['id']); ?>" method="post">
                <div class="mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$client['name'];?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Apellido</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?=$client['lastname'];?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?=$client['phone'];?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Correo Electrónico</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?=$client['email'];?>" />
                </div>

                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>

</div>