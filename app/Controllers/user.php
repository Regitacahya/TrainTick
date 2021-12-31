<?php

namespace App\Controllers;

class user extends BaseController
{
    public function pesan()
    {
        return view('user/pesan.php');
    }
    public function cari()
    {
        return view('user/cari.php');
    }
    public function table()
    {
        return view('user/table.php');
    }
    public function data()
    {
        return view('user/data.php');
    }
    public function ringkasan()
    {
        return view('user/ringkasan.php');
    }
    public function pembayaran()
    {
        return view('user/pembayaran.php');
    }
    public function pembayaran1()
    {
        return view('user/pembayaran1.php');
    }
}
