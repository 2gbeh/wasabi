<?PHP
$getWithdrawals = $newUser->getWithdrawals($ID);
$total_dr = 0;
$tbody_dr = '';

if ($getWithdrawals['size'] > 0) {
    //var_dump($getWithdrawals);
    $size = $getWithdrawals['size'];
    $rows = $getWithdrawals['rows'];
    $caption_dr = caption_f($size);

    foreach ($rows as $row) {
        $tbody_dr .= '<tr>
            <td class=item width=1 style="color:#069; text-decoration:underline; cursor:pointer;">' . $row['id_buf'] . '</td>
            <td class=item align=right nowrap>' . $row['amt_buf'] . '.00</td>
            <td class=item>' . $row['why_buf'] . '</td>
            <td class=item width=1>' . $row['date_buf'] . '</td>
            <td class=item width=1>' . $row['time_buf'] . '</td>
            <td class=item width=1 style="color:' . $row['status_hex'] . ';">' . $row['status_buf'] . '</td>
        </tr>';
    }
} else {
    $tbody_dr = '<tr><td colspan="7" align="center">No transaction records found</td></tr>';
}
