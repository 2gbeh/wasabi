<?PHP
$pages = '';
for ($i = 1; $i <= 3; $i++) {
    if (!isset($_GET['page'])) {
        $is_active = $i == 1 ? 'active' : '';
    } else {
        $is_active = $_GET['page'] == $i ? 'active' : '';
    }

    $pages .= '<li>
      <a href="?page=' . $i . '" class="' . $is_active . '" title="Page ' . $i . '">
        ' . $i . '
      </a>
    </li>';
}
?>
<style type="text/css">
.wx-ledger {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 3px 3px #ccc;
  margin-bottom: 10px;
  padding: 25px 15px;
}
.wx-ledger table {
  width: 100%;
  text-align: left;
}
.wx-ledger table tr td {
  padding: 0 10px;
}
.wx-ledger .wx-ledger-label {
  font-weight: bold;
  margin-bottom: 6px;
}
.wx-ledger .wx-ledger-input {
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 12px 15px
}
.wx-ledger .wx-ledger-input b {
  float:right;
}

</style>
<div class="wx-ledger" id="wx-ledger">
  <table border="0">
    <tr>
      <td>
        <div class="wx-ledger-label">
          Signal Purchase
        </div>
        <div class="wx-ledger-input">
          <?=number_format($getUser['spx']) ?? '0.00' ?> 
          <b>USD</b>
        </div>
      </td>
      <td>
        <div class="wx-ledger-label">
          Trading Interest
        </div>
        <div class="wx-ledger-input">
          <?=number_format($getUser['tix']) ?? '0.00' ?> 
          <b>USD</b>
        </div>
      </td>
      <td>
        <div class="wx-ledger-label">
          Trading Deposit
        </div>
        <div class="wx-ledger-input">
          <?=number_format($getUser['tdx']) ?? '0.00' ?> 
          <b>USD</b>
        </div>
      </td>
      <td>
        <div class="wx-ledger-label">
          Investment Deposit
        </div>
        <div class="wx-ledger-input">
          <?=number_format($getUser['idx']) ?? '0.00' ?> 
          <b>USD</b>
        </div>
      </td>
      <td>
        <div class="wx-ledger-label">
          Automation Deposit
        </div>
        <div class="wx-ledger-input">
          <?=number_format($getUser['adx']) ?? '0.00' ?> 
          <b>USD</b>
        </div>
      </td>
    </tr>
  </table>
</div>