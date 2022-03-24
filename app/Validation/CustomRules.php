<?php

namespace App\Validation;

class CustomRules
{
    public function hari(string $str, string &$error = null): bool
    {
        // $fields = explode(',', $fields);
        if ((int)$str > 365) {
            // $error = lang('customerrors.jamError');
            return false;
        }
        return true;
    }
    public function jam(string $str, string &$error = null): bool
    {
        // $fields = explode(',', $fields);
        if ((int)$str > 24) {
            // $error = lang('customerrors.jamError');
            return false;
        }
        return true;
    }

    public function menit(string $str, string &$error = null): bool
    {
        // $fields = explode(',', $fields);
        if ((int)$str > 60) {
            // $error = lang('customerrors.menitError');
            return false;
        }
        return true;
    }

    public function detik(string $str, string &$error = null): bool
    {
        // $fields = explode(',', $fields);
        if ((int)$str > 60) {
            // $error = lang('customerrors.menitError');
            return false;
        }
        return true;
    }

    public function status1(string $str, string &$error = null): bool
    {
        $on = "on1";
        $off = "off1";
        if ($str == $on or $str == $off) {
            return true;
        } else {
            return false;
        }
    }
    public function status2(string $str, string &$error = null): bool
    {
        $on = "on2";
        $off = "off2";
        if ($str == $on or $str == $off) {
            return true;
        } else {
            return false;
        }
    }
    public function status3(string $str, string &$error = null): bool
    {
        $on = "on3";
        $off = "off3";
        if ($str == $on or $str == $off) {
            return true;
        } else {
            return false;
        }
    }
    public function status4(string $str, string &$error = null): bool
    {
        $on = "on4";
        $off = "off4";
        if ($str == $on or $str == $off) {
            return true;
        } else {
            return false;
        }
    }
}
