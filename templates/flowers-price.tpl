{*
books-page.tpl: display book listed by pages
*}
{extends file="layout.tpl"}

{block name="localstyle"}
<link href="css/table-display.css" rel="stylesheet" />
<style type="text/css">
  #nav_bar {
    background: #000;
    color: #fff;
    margin-bottom: 15px;
    line-height: 25px;
    height: 25px;
    padding-left: 5px;
    cursor: pointer;
    border-radius: 6px;
  }
  #nav_bar a {
    color: #fff;
    font-weight: bold;
    padding: 0 5px;
    outline: none;
  }
  #nav_bar a:nth-child({$page}) {
    color: magenta;
  }
</style>
{/block}

{block name="content"}
<h2>Flowers - price</h2>

<div id="nav_bar">
Pages:
{foreach range(1,$price) as $num}
  <a href="?price={$num}">{$num}</a>
{/foreach}
</div>

<table>
  <tr>
    <th><a href="setOrderField.php?field=name">name</a></th>
    <th><a href="setOrderField.php?field=price">price</a></th>
    <th><a href="setOrderField.php?field=description">description</a></th>
  </tr>
  {foreach $flowers as $flower}
  <tr>
    <td>
      <a href="showFlower.php?flower_id={$flower->id}">{$flower->name|escape: 'html'}</a>
    </td>
    <td>{$flower->price}</td>
    <td>{$flower->description}</td>
  </tr>
  {/foreach}
</table>
{/block}
