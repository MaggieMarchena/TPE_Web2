<!DOCTYPE html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <li class="navbar-brand">Coneco</li>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home" id="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="techniques" id="techniques">Técnicas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="examples" id="examples">Ejemplos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DIY" id="DIY">DIY</a>
      </li>
    </ul>
    {if !$session}
    <form class="form-inline my-2 my-lg-0" action="verifyUser" method="post">
      <input class="form-control mr-sm-2" id="username" name="username" type="email" placeholder="Usuario@usuario.com" required>
      <input class="form-control mr-sm-2" id="password" name="password" type="password" placeholder="Contraseña" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    <form class="form-inline my-2 my-lg-0" action="signUp" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up!</button>
    </form>
    {else}
      {if $name != null}
        <h4>Hola {$name}!</h4>
      {/if}
      <form class="form-inline my-2 my-lg-0" action="logout" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
    {/if}

  </div>
</nav>
