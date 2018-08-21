<!DOCTYPE html>
<!-- {include file="header.tpl"}
{include file="nav.tpl"} -->
<section class="container-fluid">

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Dificultad</th>
        <th scope="col">Proyecto</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$projects item=project}
        <tr>
          <td>{$project['difficulty']}</td>
          <td><a href="project/{$project['id']}">{$project['title']}</a></td>
        </tr>
      {/foreach}
    </tbody>
  </table>

</section>
<!-- {include file="footer.tpl"} -->
