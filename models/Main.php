<?php
class Main
{
    protected $conn;

    const
    PLANS = array(
        null,
        'BRONZE PLAN  $500 ROI',
        'SILVER PLAN - $600 ROI',
        'GOLD PLAN - $1000 ROI',
    ),
    TR_TYPE = array(
        'CR' => 'Deposit',
        'DR' => 'Withdrawal',
    ),
    TR_STATUS = array(
        'Pending',
        'Approved',
        'Declined',
    ),
    TR_STATUS_HEX = array(
        '#F39C12',
        '#00A65A',
        '#DD4B39',
    );

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function getAdmin($id, $p = null)
    {
        $conn = $this->conn;
        $tb = 'admin';
        $res = sql_select_id($conn, $tb, $id);

        if (is_array($res)) {
            $res['username_buf'] = ucfirst($res['username']);
            $res['email_buf'] = mailto_f($res['email']);
            $res['phone_buf'] = null_f($res['phone']);
            $res['password_buf'] = mask_f($res['password']);
            $res['status_buf'] = enum_f(Lists::ADMIN, $res['STATUS']);
            $res['date_buf'] = date_t($res['DATE']);
            $res['time_buf'] = time_t($res['DATE']);
            $res['IP'] = get_ip();
            $res['bio'] = $res['username'] . ' - ' . $res['phone'] . '<br/>' . $res['email_buf'];

            return array_key_exists($p, $res) ? $res[$p] : $res;
        }
    }

    function getContact($id, $p = null)
    {
        $conn = $this->conn;
        $tb = 'contact';
        $res = sql_select_id($conn, $tb, $id);

        if (is_array($res)) {
            $res['names_buf'] = ucwords($res['names']);
            $res['email_buf'] = mailto_f($res['email']);
            $res['message_buf'] = crop_f($res['message'], 160);
            $res['status_buf'] = enum_f(Lists::TICKET, $res['STATUS']);
            $res['date_buf'] = date_t($res['DATE']);
            $res['time_buf'] = time_t($res['DATE']);
            $res['id_buf'] = proxy_t($res['DATE'], $res['ID']);
            $res['bio'] = $res['names_buf'] . '<br/>' . $res['email_buf'];

            return array_key_exists($p, $res) ? $res[$p] : $res;
        }
    }

    function getLedger($id, $p = null)
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $res = sql_select_id($conn, $tb, $id);

        if (is_array($res)) {
            $res['type_buf'] = enum_f(self::TR_TYPE, $res['type']);
            $res['plan_buf'] = enum_f(self::PLANS, $res['plan']);
            $res['amt_buf'] = money_f($res['amt']);
            $res['bal_buf'] = money_f($res['bal']);
            $res['why_buf'] = strtoupper(null_f($res['why']));
            $res['status_buf'] = enum_f(self::TR_STATUS, $res['STATUS']);
            $res['status_hex'] = enum_f(self::TR_STATUS_HEX, $res['STATUS']);
            $res['date_buf'] = date_t($res['DATE']);
            $res['time_buf'] = time_t($res['DATE']);
            $res['id_buf'] = proxy_t($res['DATE'], $res['ID']);

            return array_key_exists($p, $res) ? $res[$p] : $res;
        }
    }

    function getTicket($id, $p = null)
    {
        $conn = $this->conn;
        $tb = 'ticket';
        $tb_2 = 'admin';
        $res = sql_select_id($conn, $tb, $id);

        if (is_array($res)) {
            $res['message_buf'] = crop_f($res['message'], 160);
            $res['status_buf'] = enum_f(Lists::TICKET, $res['STATUS']);
            $res['date_buf'] = date_t($res['DATE']);
            $res['time_buf'] = time_t($res['DATE']);
            $res['id_buf'] = proxy_t($res['DATE'], $res['ID']);

            return array_key_exists($p, $res) ? $res[$p] : $res;
        }
    }

    function getUser($id, $p = null)
    {
        $conn = $this->conn;
        $tb = 'user';
        $res = sql_select_id($conn, $tb, $id);

        if (is_array($res)) {
            $res['names_buf'] = ucwords($res['names']);
            $res['email_buf'] = mailto_f($res['email']);
            $res['phone_buf'] = null_f($res['phone']);
            $res['username_buf'] = ucfirst($res['username']);
            $res['password_buf'] = mask_f($res['password']);
            $res['question_buf'] = null_f($res['question'], 'None');
            $res['answer_buf'] = null_f($res['answer'], 'None');
            $res['wal_buf'] = null_f($res['wal']);
            $res['bal_buf'] = money_f($res['bal']);
            $res['ref_buf'] = null_f($res['ref'], 'None');
            $res['ref_isValid'] = strpos($res['ref'], '$') >= 3;
            $res['ref_code'] = strtoupper($res['username']) . '$' . $res['ID'];
            $res['refs'] = sql_select_count($conn, $tb, 'ref', $res['ref_code']);
            $res['refs_buf'] = money_f($res['refs']);
            $res['bonus_buf'] = money_f($res['bonus']);
            $res['status_buf'] = enum_f(Lists::USER, $res['STATUS']);
            $res['date_buf'] = date_t($res['DATE']);
            $res['time_buf'] = time_t($res['DATE']);
            $res['IP'] = get_ip();
            $res['bio'] = $res['names_buf'] . ' (' . $res['username'] . ')<br/>' . $res['email_buf'];

            return array_key_exists($p, $res) ? $res[$p] : $res;
        }
    }

    function getDashboard($id)
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $res = sql_select($conn, $tb, 'user_id', $id);

        $total_deposit = $total_deposit_active =
        $gross_deposit = $gross_deposit_active =
        $total_withdrawal = $total_withdrawal_active =
        $gross_withdrawal = $gross_withdrawal_active = 0;
        $last_cr_date = $last_dr_date = '';

        foreach ($res as $assoc) {
            if ($assoc['type'] == 'CR') {
                $total_deposit += 1;
                $gross_deposit += $assoc['amt'];
                if ($assoc['STATUS'] == 1) {
                    $total_deposit_active += 1;
                    $gross_deposit_active += $assoc['amt'];
                    $last_cr_date = $assoc['DATE'];
                }
            }
            if ($assoc['type'] == 'DR') {
                $total_withdrawal += 1;
                $gross_withdrawal += $assoc['amt'];
                if ($assoc['STATUS'] == 1) {
                    $total_withdrawal_active += 1;
                    $gross_withdrawal_active += $assoc['amt'];
                    $last_dr_date = $assoc['DATE'];
                }
            }
        }

        $last_cr_date_buf = date_t($last_cr_date);
        $last_cr_time_buf = time_t($last_cr_date);
        $last_dr_date_buf = date_t($last_dr_date);
        $last_dr_time_buf = time_t($last_dr_date);

        $total_deposit_buf = money_f($total_deposit);
        $total_deposit_active_buf = money_f($total_deposit_active);
        $total_deposit_offset_buf = money_f($total_deposit - $total_deposit_active);

        $gross_deposit_buf = $gross_deposit < 1 ? '0.00' : money_f($gross_deposit);
        $gross_deposit_active_buf = $gross_deposit_active < 1 ? '0.00' : money_f($gross_deposit_active);

        $total_withdrawal_buf = money_f($total_withdrawal);
        $total_withdrawal_active_buf = money_f($total_withdrawal_active);
        $total_withdrawal_offset_buf = money_f($total_withdrawal - $total_withdrawal_active);

        $gross_withdrawal_buf = $gross_withdrawal < 1 ? '0.00' : money_f($gross_withdrawal);
        $gross_withdrawal_active_buf = $gross_withdrawal_active < 1 ? '0.00' : money_f($gross_withdrawal_active);

        $gross_earned = ($gross_deposit_active * 0.5) + $gross_deposit_active;
        $gross_earned_buf = $gross_earned < 1 ? '0.00' : money_f($gross_earned);

        return compact(
            'total_deposit',
            'total_deposit_active',
            'gross_deposit',
            'gross_deposit_active',
            'total_withdrawal',
            'total_withdrawal_active',
            'gross_withdrawal',
            'gross_withdrawal_active',

            'total_deposit_buf',
            'total_deposit_active_buf',
            'total_deposit_offset_buf',
            'gross_deposit_buf',
            'gross_deposit_active_buf',
            'total_withdrawal_buf',
            'total_withdrawal_active_buf',
            'total_withdrawal_offset_buf',
            'gross_withdrawal_buf',
            'gross_withdrawal_active_buf',
            'gross_earned',
            'gross_earned_buf',

            'last_cr_date',
            'last_cr_date_buf',
            'last_cr_time_buf',
            'last_dr_date',
            'last_dr_date_buf',
            'last_dr_time_buf'
        );
    }
}
