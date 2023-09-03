<?PHP
$tb = 'user';

if ($_GET['e'] == true) {
    goto_page('add_direct_cr.php?e=true&q=' . $_GET['q']);
}

$size = sql_count($conn, $tb);
$pager = new Pager($size, 25);
$sql_stmt = 'SELECT ID FROM `' . $tb . '` ORDER BY ID DESC ' . $pager->clause;
$db_res = sql_query($conn, $sql_stmt);

if (is_array($db_res)) {
    $sn = $pager->off;
    $row = '';
    $rows = '';

    $newMain = new Main($conn);
    foreach ($db_res as $key => $value) {
        $sn += 1;
        $e = $newMain->getUser($value['ID']);
        $f = $newMain->getDashboard($value['ID']);

        $row = '<tr>
			<td width="1">
				<button class="btn btn-pri" onClick="onEdit(' . $value['ID'] . ')" title="Add">&#10010;</button>
			</td>
			<td>' . $sn . '</td>
			<td>' . $e['names_buf'] . '<br/>' . $e['email_buf'] . '</td>
			<td>' . $e['bal_buf'] . '</td>
            <td>' . $f['gross_deposit_active_buf'] . '</td>
            <td>' . $e['bonus_buf'] . '</td>
			<td nw>' . $f['last_cr_date_buf'] . '<br/> ' . $f['last_cr_time_buf'] . '</td>
		</tr>';

        $rows .= $row;
    }
}

$enum_email = sql_column_distinct($conn, $tb, 'email');
$hint_email = Enums::datalist($enum_email, 'hint_email');
