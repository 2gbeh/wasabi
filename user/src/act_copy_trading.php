<?php
//var_dump($_SESSION);
$json = file_get_contents('./data/copy-tradings.json');
$data = json_decode($json)->data;

// var_dump($data);

$tbody = $cards = '';
$futures = ['BingX Standard Futures', 'Binance-1 Futures', 'BingX Perpetual Futures'];
$charts = [0, 25, 50, 75, 100];
$risks = [null, '#ffd700', '#c0c0c0', '#cd7f32'];

shuffle($data);
foreach ($data as $i => $d) {

    $hex = $d->rate < 0 ? '#e11' : '#090';
    $rate_f = $d->rate > 0 ? '+' . $d->rate : $d->rate;

    $future = mt_rand(0, 2);
    $chart = mt_rand(0, 4);
    $risk = mt_rand(1, 3);

    $tbody .= '<li>
      <table border="0">
        <thead>
          <tr>
            <td colspan="2">
              <div class="avatar" style="background-image:url(\'../img/users/' . strtolower($d->name) . '.png\')"></div>
              <div class="username" id="l-username">' . $d->name . '</div>
              <div class="platform" id="l-platform">' . $futures[$future] . '</div>
            </td>
            <th>
              <a href="#!" onclick="showModal(' . $i . ')">Copy</a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="3">
              <img class="chart" src="../img/charts/' . $charts[$chart] . '.png" alt="" />
            </td>
          </tr>
          <tr>
            <td>
                <div class="rate" id="l-rate" style="color:' . $hex . ';">' . $rate_f . '%</div>
                <div class="subtitle" id="l-roi">
                  <abbr title="Returns On Investment">ROI</abbr> (' . $d->roi . 'D)
                </div>
            </td>
            <td>
              <div class="copies" id="l-copies">' . number_format($d->copies, 2) . '</div>
              <div class="subtitle">Copies</div>
            </td>
            <td>
              <div class="risk" id="l-risk" style="background-color:' . $risks[$risk] . ';">' . $d->risk . '</div>
              <div class="subtitle">Risk</div>
            </td>
          </tr>
        </tbody>
      </table>
    </li>';
}
