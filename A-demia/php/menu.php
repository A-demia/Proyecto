<input type="checkbox" id="menu" />
<label for="menu" class="menu">
  <span></span>
  <span></span>
  <span></span>
</label>
<nav class="nav">
  <ul>
    <li><a href="">Inicio</a></li>
    <li><a class="ini">Iniciar sesion</a></li>
    <li><a href="#">Asesorias</a></li>
    <li><a href="#">Más Info</a></li>
  </ul>
</nav>
<div class="modal">
  <div class="cerrar"></div>
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Iniciar Sesión</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="username">No. Control</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Recuerdame
          </label><a class="form-recovery" href="#">¿Olvidaste la contraseña?</a>
        </div>
        <div class="form-group">
          <button type="submit">Iniciar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Registrate</h1>
    </div>
    <div class="form-content">
      <form>
        <div class="form-group">
          <label for="username">No. Control</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" required="required"/>
        </div>
        <div class="form-group">
          <label for="cpassword">Confirmar contraseña</label>
          <input type="password" id="cpassword" name="cpassword" required="required"/>
        </div>
        <div class="form-group">
          <label for="email">Correo</label>
          <input type="email" id="email" name="email" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>