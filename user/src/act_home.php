<?php
//var_dump($_SESSION);

$getDashboard = $newUser->getDashboard($ID);
extract($getDashboard);

// $tb = 'ledger';
// $row = sql_select($ctx_db_conn, $tb, 'user_id', $ID);
// $total_deposit = $total_deposit_active =
// $gross_deposit = $gross_deposit_active =
// $total_withdrawal = $total_withdrawal_active = 0;
// $gross_withdrawal = $gross_withdrawal_active = 0;
// foreach ($row as $assoc) {
//     if ($assoc['type'] == 'CR') {
//         $total_deposit += 1;
//         $gross_deposit += $assoc['amt'];
//         if ($assoc['STATUS'] == 1) {
//             $total_deposit_active += 1;
//             $gross_deposit_active += $assoc['amt'];
//         }
//     }
//     if ($assoc['type'] == 'DR') {
//         $total_withdrawal += 1;
//         $gross_withdrawal += $assoc['amt'];
//         if ($assoc['STATUS'] == 1) {
//             $total_withdrawal_active += 1;
//             $gross_withdrawal_active += $assoc['amt'];
//         }
//     }
// }

// $total_deposit_buf = money_f($total_deposit);
// $total_deposit_active_buf = money_f($total_deposit_active);
// $total_deposit_offset_buf = money_f($total_deposit - $total_deposit_active);

// $gross_deposit_buf = $gross_deposit < 1 ? '0.00' : money_f($gross_deposit);
// $gross_deposit_active_buf = $gross_deposit_active < 1 ? '0.00' : money_f($gross_deposit_active);

// $total_withdrawal_buf = money_f($total_withdrawal);
// $total_withdrawal_active_buf = money_f($total_withdrawal_active);
// $total_withdrawal_offset_buf = money_f($total_withdrawal - $total_withdrawal_active);

// $gross_withdrawal_buf = $gross_withdrawal < 1 ? '0.00' : money_f($gross_withdrawal);
// $gross_withdrawal_active_buf = $gross_withdrawal_active < 1 ? '0.00' : money_f($gross_withdrawal_active);

// $gross_earned = ($gross_deposit_active * 0.5) + $gross_deposit_active;
// $gross_earned_buf = $gross_earned < 1 ? '0.00' : money_f($gross_earned);
