<!DOCTYPE html>
<html>
<head>
    <title>Registrar Usuario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Registrar </h5>
            <div class="card-body">
                <form action="<?= site_url('/guardar-usuario') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-4 col-form-label text-right">Nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-4 col-form-label text-right">Apellidos:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tutor" class="col-sm-4 col-form-label text-right">Tutor:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tutor" name="tutor" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="carrera" class="col-sm-4 col-form-label text-right">Carrera:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="carrera" name="carrera" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="caso" class="col-sm-4 col-form-label text-right">Caso:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="caso" name="caso" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matricula" class="col-sm-4 col-form-label text-right">Matrícula:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="matricula" name="matricula" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="/lista-usuarios" class="btn btn-secondary">Ver Lista de Usuarios</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
