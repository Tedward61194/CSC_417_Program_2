{*
login.tpl: login form
*}

{extends file="layout.tpl"}

{block name="localstyle"}
<link href="css/table-display.css" rel="stylesheet" />
{/block}

{block name="content"}
<h2>Login</h2>

<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table>
    <tr>
      <th>user:</th>
      <td><input type="text" name="username" autofocus="on"
                 value="{{flash_get key='username'}|escape:'html'}" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">Access</button></td>
    </tr>
  </table>
  
  <h3>{{flash_get key='message'}}</h3>
</form>
{/block}
