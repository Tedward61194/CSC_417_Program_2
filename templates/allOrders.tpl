{*
allOrders.tpl: previous orders of logged-in user
*}

{extends file="layout.tpl"}

{block name="localstyle"}
<link href="css/table-display.css" rel="stylesheet" />
{/block}

{block name="content"}
<h2>All Orders</h2>
  <form action="allOrders.php" method="post">
    <table>
      <tr>
        <th>username:</th><td>{$username}</td>
      </tr>
      <tr>
        <th>email:</th>
        <td>
          <input type="text" name="email" value="{$email|escape:'html'}" />
        </td>
      </tr>
      <tr>
        <td></td><td><button type="submit" name="doit">Submit</button></td>
      </tr>
    </table>
    <h3>{$message}</h3>
  </form>
{/block}
