<?PHP
$getDeposits = $newUser->getDeposits($ID);
$total_cr = 0;
$tbody_cr = '';

if ($getDeposits['size'] > 0) {
    //var_dump($getDeposits);
    $size = $getDeposits['size'];
    $rows = $getDeposits['rows'];
    $caption_cr = caption_f($size);

    foreach ($rows as $row) {
        $tbody_cr .= '<tr>
            <td class=item width=1 style="color:#069; text-decoration:underline; cursor:pointer;">' . $row['id_buf'] . '</td>
            <td class=item align=right nowrap>' . $row['amt_buf'] . '.00</td>
            <td class=item>' . $row['plan_buf'] . '</td>
            <td class=item width=1>' . $row['date_buf'] . '</td>
            <td class=item width=1>' . $row['time_buf'] . '</td>
            <td class=item width=1 style="color:' . $row['status_hex'] . ';">' . $row['status_buf'] . '</td>
        </tr>';
    }
} else {
    $tbody_cr = '<tr><td colspan="7" align="center">No transaction records found</td></tr>';
}
