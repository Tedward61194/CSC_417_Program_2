{*
addFlower.tpl: Form for adding a flower, used by addFlower.php and addFlowerReentrant.php
*}
{extends file="layout.tpl"}

{block name="localstyle"}
<link href="css/table-display.css" rel="stylesheet" />
{/block}

{block name="content"}
  <h2>Add Flower</h2>

  <form action="addFlowerReentrant.php" method="post">
    <table>
      <tr>
        <td>name: </td>
        <td>
          <input type="text" name="name" size="40" value="{$name|escape:'html'}" />
        </td>
      </tr>
      <tr>
        <td>price: </td>
        <td>
          $<input type="real" name="price" size="40" value="{$price|escape:'html'}" />
        </td>
      </tr>
      <tr>
        <td>description: </td>
        <td>
            <textarea itemtype = "text" name="description" cols="40" rows="5" placeholder="{$description|escape:'html'}"></textarea>
        </td>
      </tr>
      <tr>
        <td>imagefile: </td>
        <td>
            <input type ="text" name="imagefile" size="10" value="{$imagefile|escape:'html'}" /></p>
        </td>
      </tr>
      <tr>
        <td>instock: </td>
        <td>
        <input type="text" name="instock" size="10" value="{$instock|escape:'html'}" />
        </td>
      </tr>
      <tr>
        <td></td><td>
          <button type="submit" name="doit">Add</button>
          <button type="submit" name="cancel">Cancel</button>
        </td>
      </tr>
    </table>

    <h3>{$message|default}</h3>
  </form>
{/block}
