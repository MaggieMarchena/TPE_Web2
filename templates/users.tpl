<!DOCTYPE html>
<!-- {include file="header.tpl"}
{include file="nav.tpl"} -->

<section class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Nombre</th>
        <th scope="col">Admin</th>
        <th class="alert alert-danger" role="alert" scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$users item=user}
        {if $user['username'] != $username}
          <tr>
            <td>{$user['username']}</td>
            <td>{$user['name']}</td>
            {if $user['admin'] == 0}
              <td>No <button class="mx-auto" type="button" name="changeAdmin">Nombrar administrador</button></td>
            {else}
              <td>Sí <button class="mx-auto" type="button" name="changeAdmin">Quitar administrador</button></td>
            {/if}
            <td><a href="deleteUser/{$user['username']}"><i class="fas fa-trash"></i></a></td>
          </tr>
        {/if}
      {/foreach}
    </tbody>
  </table>
</section>

{include file="footer.tpl"}
