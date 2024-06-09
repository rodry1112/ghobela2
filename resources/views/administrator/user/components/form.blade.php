<div class="row">

    <div class="col-lg-12">
        <div class="mb-3 row">
            <label for="nombreUsuario" class="form-label col-lg-4">Nombre:</label>
            <input name="name" class="form-control col-lg-8" value="{{old('name')}}" type="text" placeholder="Nombre del usuario:" aria-label="default input example">
        </div>
        
        <div class="mb-3 row">
            <label class="form-label col-lg-4">Email:</label>
            <input name="email" value="{{old('email')}}" class="form-control col-lg-8" placeholder="Email del usuario:" type="text" aria-label="default input example">
        </div>

        <div class="mb-3 row">
            <label class="form-label col-lg-4">Contraseña:</label>
            <input name="password" value="{{old('password')}}" class="form-control col-lg-8" type="password" aria-label="default input example">
        </div>
        
        <button type="submit" class="btn_admin">Crear</button>
        <a href="{{route('user.index')}}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>