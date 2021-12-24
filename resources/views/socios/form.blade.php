<form id="socioForm" method="post" action="/socios/new">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Nombre</span>
                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre Socio">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Direccion</span>
                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion Socio">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Cedula</span>
                <input class="form-control" type="text" id="cedula" name="cedula" placeholder="# de Identificacion">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">E-mail</span>
                <input class="form-control" type="email" id="email" name="email" placeholder="Correo electronico">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Banco</span>
                <input class="form-control" type="text" id="banco" name="banco" placeholder="Banco">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Cuenta</span>
                <input class="form-control" type="text" id="cuenta" name="cuenta" placeholder="# Cuenta">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Celular</span>
                <input class="form-control" type="text" id="celular" name="celular" placeholder="# Celular">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Aporte</span>
                <input class="form-control" type="text" id="aporte" name="aporte" placeholder="$0">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group mt-3">
                <span class="form-label mt-5">Numero Polla</span>
                <input class="form-control" type="text" id="numero" name="numero" Placeholder="0">
            </div>
        </div>
    </div>
    <div class="d-grid mt-5">
        <button class="btn btn-primary btn-sm" id="submitButton" type="submit">Submit</button>
    </div>
</form>