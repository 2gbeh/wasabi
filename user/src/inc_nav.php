<?PHP
function isActive($page)
{
    if (strpos($_SERVER['PHP_SELF'], $page) !== false) {
        return 'href="' . $page . '" class="active"';
    } else {
        return 'href="' . $page . '"';
    }
}
?>
<style type="text/css">
.wx-nav table {
  width: 100%;
}
.wx-nav table tr td {
  padding: 20px 10px;
  color: #555;
  font-size: 24px;
  font-weight: normal;
}
.wx-nav table tr th {
  padding: 20px 10px;
  white-space: nowrap;
  text-align: right;
}
.wx-nav ul li {
  margin:0 5px;
  display: inline-block;
}
.wx-nav ul li a {
  color: #555;
  padding: 0 10px 12px;
}
.wx-nav ul li a.active {
  color: #0093dd;
  border-bottom: 2px solid #0093dd;
}
</style>
<div class="wx-nav">
  <table border="0">
  <tr>
    <td>
        <i class="<?=$nav_icon ?? 'fa fa-home'?>" style="margin-right:4px;"></i>
        <?=$ctx_title ?? 'Home'?>
    </td>
    <th>
      <ul>
        <li>
          <a <?=isActive("markets.php")?>">
            Markets
          </a>
        </li>
        <li>
          <a <?=isActive("copy_trading.php")?>">
            Copy Trading
          </a>
        </li>
      </ul>
    </th>
  </tr>
  </table>
</div>