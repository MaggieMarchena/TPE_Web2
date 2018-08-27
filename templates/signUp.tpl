<!DOCTYPE html>
{include file="header.tpl"}
{include file="nav.tpl"}

<section class="container-fluid">
  <form action="createUser" method="post">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationServer01">Email (este será tu username!)</label>
        <input type="email" class="form-control is-valid" id="validationServer01" name="username" placeholder="pirulo@zaraza.com" required>
        <!-- <div class="valid-feedback">
          Genial!
        </div> -->
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServer02">Password</label>
        <input type="password" class="form-control is-valid" id="validationServer02" name="password" placeholder="123456" required>
        <!-- <div class="valid-feedback">
          Genial!
        </div> -->
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServerUsername">Name</label>
        <div class="input-group">
          <input type="text" class="form-control is-valid" id="validationServer03" name="name" placeholder="Pirulo" aria-describedby="inputGroupPrepend3" required>
          <!-- <div class="invalid-feedback">
            Por favor indicá tu nombre.
          </div> -->
        </div>
      </div>
    </div>
    {if $error != ''}
      <div class="form-row">
        <div class="mx-auto">
          <div class="alert alert-danger" role="alert">
            {$error}
          </div>
        </div>
      </div>
    {/if}
    <div class="form-row">
      <div class="mx-auto">
        <button class="btn btn-primary" type="submit">Sign Up!</button>
      </div>
    </div>
  </form>
</section>

{include file="footer.tpl"}
