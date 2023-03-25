<?= $header; ?>
<div class="container">
    <h2>Crear</h2>
    <a href="<?=base_url('clients')?>">Home</a>
    <?php if (session('message')) : ?>
        <div class="alert alert-danger" role="alert">
            <?=session('message');?>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('/clients/store'); ?>" method="post">
                <div class="mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=old('name');?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Apellido</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?=old('lastname');?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?=old('phone');?>" />
                </div>
                <div class="mb-3">
                    <label for="name">Correo Electrónico</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?=old('email');?>" />
                </div>

                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>

</div>