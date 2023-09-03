<?php
class Admin extends Main
{
    public function getDeposits()
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $sql = 'SELECT * FROM `' . $tb . '` WHERE type="CR" ORDER BY ID DESC';
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

    public function getWithdrawals()
    {
        $conn = $this->conn;
        $tb = 'ledger';
        $sql = 'SELECT * FROM `' . $tb . '` WHERE type="DR" ORDER BY ID DESC';
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
