<?php
//var_dump($_SESSION);
$json = file_get_contents('./data/markets.json');
$data = json_decode($json)->data;

// var_dump($data);

$usd = 459.81;
$tbody = $cards = '';
$captions = ['24h Hot','24h Highest Change','New Listing'];

shuffle($data);
foreach ($data as $i => $d) {

    $p = abs($d->rate * 10);
    $perc = $p > 100 ? 100 : $p;
    $hex = $d->rate < 0 ? '#e11' : '#090';
    $ngn = $d->price * $usd;
    $ngn = $d->price * $usd;
    $rate_f = $d->rate > 0 ? '+' . $d->rate : $d->rate;

    if ($i < 3) {
        $cards .= '<div class="markets-card-item">
          <table border="0">
            <caption>'.$captions[$i].'</caption>
            <tr>
              <td>
                <p>
                  <div class="avatar" title="' . ucwords($d->name) . '" style="background-image:url(\'../img/coins/' . strtolower($d->abbr) . '.png\')"></div>
                  <abbr>' . strtoupper($d->abbr) . '/USDT</abbr>
                </p>
                <p style="margin:0;">
                  <b>$ ' . number_format($d->price, 2) . '</b>
                  <var>' . number_format($ngn, 2) . ' NGN</var>
                </p>
              </td>
              <th style="color:' . $hex . ';">
                ' . $rate_f . '%
              </th>
            </tr>
          </table>
      </div>';
    }

    $tbody .= '<tr>
    <td>
      <div class="avatar" style="background-image:url(\'../img/coins/' . strtolower($d->abbr) . '.png\')"></div>
      ' . ucwords($d->name) . '
      <abbr>' . strtoupper($d->abbr) . '</abbr>
    </td>
    <td>
      <ul class="tube" title="' . $perc . '%">
        <li style="width:' . $perc . '%;background-color:' . $hex . ';">&nbsp;</li>
      </ul>
    </td>
    <td>
      $ ' . number_format($d->price, 2) . '
      <var>' . number_format($ngn, 2) . ' NGN</var>
    </td>
    <td style="color:' . $hex . ';">
      ' . $rate_f . '%
    </td>
    <td>
      $ ' . number_format($d->gross, 2) . 'b
    </td>
    <td>
      <a class="btn btn-pri" href="https://accounts.binance.com/en/login" target="_new">
        <img src="../img/fab_binance.png" alt="" />
        Pay with <br/>
        Binance
      </a> &nbsp;
      <a class="btn btn-sec" href="deposit_next.php#pay-target">
        Direct <br/>
        Deposit
      </a>
    </td>
  </tr>';
}
