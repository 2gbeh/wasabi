<?php
class User extends Main
{
    public function getLedgers($user_id)
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $sql = 'SELECT * FROM `' . $tb . '` WHERE user_id="' . $user_id . '" ORDER BY ID DESC';
        $res = sql_query($conn, $sql);

        if (is_array($res)) {
            $arr['size'] = count($res);
            $arr['size_buf'] = money_f($arr['size']);

            foreach ($res as $e) {
                $arr['rows'][] = $this->getLedger($e['ID']);
            }

            return $arr;
        }
    }

    public function getDeposits($user_id)
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $sql = 'SELECT * FROM `' . $tb . '` WHERE type="CR" AND user_id="' . $user_id . '" ORDER BY ID DESC';
        $res = sql_query($conn, $sql);

        if (is_array($res)) {
            $arr['size'] = count($res);
            $arr['size_buf'] = money_f($arr['size']);

            foreach ($res as $e) {
                $arr['rows'][] = $this->getLedger($e['ID']);
            }

            return $arr;
        }
    }

    public function getWithdrawals($user_id)
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $sql = 'SELECT * FROM `' . $tb . '` WHERE type="DR" AND user_id="' . $user_id . '" ORDER BY ID DESC';
        $res = sql_query($conn, $sql);

        if (is_array($res)) {
            $arr['size'] = count($res);
            $arr['size_buf'] = money_f($arr['size']);

            foreach ($res as $e) {
                $arr['rows'][] = $this->getLedger($e['ID']);
            }

            return $arr;
        }
    }

}
