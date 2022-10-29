<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Session;

class Helper
{
    public static function title($value)
    {
        return Str::remove(' ', ucwords(Str::of($value)->replace('_', ' ')));
    }

    // get head title tabel
    public static function head($param)
    {
        return ucwords(str_replace('-', ' ', $param));
    }

    // replace spasi
    public static function replace($param)
    {
        return str_replace(' ', '', $param);
    }

    public static function get_data($param)
    {
        $data = DB::table($param)->get();
        return isset($data) ? $data : null;
    }

    public static function get_data_count($param)
    {
        $data = DB::table($param)->count();
        return isset($data) ? $data : null;
    }

    public static function get_count_darah($blood)
    {
        $masuk = DB::table("stocks")->where("blood", $blood)->sum('total');
        $keluar = DB::table("transactions")->where("blood", $blood)->where("status", "accepted")->sum('total');
        return  isset($masuk) ? $masuk - $keluar : null;
    }

    public static function get_data_count_blood($param, $where, $in, $con)
    {
        $data = DB::table($param)->where($where, $in, $con)->sum('total');
        return isset($data) ? $data : null;
    }

    public static function get_data_month($param, $where, $in, $con)
    {
        if ($param != "users")
            $data = DB::table($param)->select(DB::raw("MONTH(`updated_at`) AS bulan, SUM(`total`) AS jumlah"))->where($where, $in, $con)->groupBy(DB::raw("MONTH(`updated_at`)"))->get();
        else
            $data = DB::table($param)->select(DB::raw("MONTH(`updated_at`) AS bulan, COUNT(`id`) AS jumlah"))->where($where, $in, $con)->groupBy(DB::raw("MONTH(`updated_at`)"))->get();
        if (isset($data)) {
            $datas = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
            foreach ($data as $v) {
                $datas[$v->bulan - 1] = $v->jumlah;
            }
            return Helper::arrayToString2($datas);
        } else
            return Helper::arrayToString([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
    }

    // get hari
    public static function getHari($hari)
    {
        switch ($hari) {
            case "Sun":
                $hari = "Minggu";
                break;
            case "Mon":
                $hari = "Senin";
                break;
            case "Tue":
                $hari = "Selasa";
                break;
            case "Wed":
                $hari = "Rabu";
                break;
            case "Thu":
                $hari = "Kamis";
                break;
            case "Fri":
                $hari = "Jumat";
                break;
            case "Sat":
                $hari = "Sabtu";
                break;
        }
        return isset($hari) ? $hari : null;
    }

    public static function getDateIndo($tgl)
    {
        $tanggal = substr($tgl, 8, 2);
        $bulan = Helper::getBulan((int)substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        $tgl = $tanggal . " " . $bulan . " " . $tahun;
        if ($tgl != "--") {
            return $tanggal . " " . $bulan . " " . $tahun;
        }
    }
    public static function getDateIndo2($tgl)
    {
        $tanggal = substr($tgl, 8, 2);
        $bulan = Helper::getBulan((int)substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        $tgl = $tanggal . " " . $bulan . " " . $tahun;
        if ($tgl != "--") {
            return $bulan . " " . $tanggal . ", " . $tahun;
        }
    }

    public static function getBulan($bln)
    {
        if ($bln == 1)
            return "Januari";
        elseif ($bln == 2)
            return "Februari";
        elseif ($bln == 3)
            return "Maret";
        elseif ($bln == 4)
            return "April";
        elseif ($bln == 5)
            return "Mei";
        elseif ($bln == 6)
            return "Juni";
        elseif ($bln == 7)
            return "Juli";
        elseif ($bln == 8)
            return "Agustus";
        elseif ($bln == 9)
            return "September";
        elseif ($bln == 10)
            return "Oktober";
        elseif ($bln == 11)
            return "November";
        elseif ($bln == 12)
            return "Desember";
    }

    public static function arrayToString($param)
    {
        $data = null;
        foreach ($param as $v) {
            if ($data == null) {
                $data = $v;
            } else {
                $data = $data . "," . $v;
            }
        }
        return $data;
    }

    public static function arrayToString2($param)
    {
        $params = implode(", ", $param);
        return $params;
    }

    public static function sisa_darah($blood, $total)
    {
        $data = [];
        $darah = DB::table("sisas")->where("blood", $blood)->get();
        foreach ($darah as $v) {
            if ($v->total > 0) {
                array_push($data, $v->id);
                if (($v->total - $total) >= 0) {
                    array_push($data, $v->total - $total);
                    array_push($data, $total);
                    break;
                }
                array_push($data, 0);
                $total =  $total - $v->total;
                array_push($data, $v->total);
            }
        }
        return $data;
    }
}
