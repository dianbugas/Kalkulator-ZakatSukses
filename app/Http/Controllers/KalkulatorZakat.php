<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorZakat extends Controller
{
    public function form()
    {
        $method = request()->method();
        $querystr = request()->query('zakat');

        if ($method == "GET" && $querystr) {
            return redirect('/');
        }

        return view('form', compact('method'));
    }

    public function formDonasi()
    {
        $data = request()->all();
        $method = request()->method();
        return view('form', compact('data', 'method'));
    }

    public function sendWhatsapp()
    {
        $nama = request('nama_lengkap');
        $email = request('email');
        $akad = request('akad');
        $nominal = request('nominal');
        $bank = request('bank');

        return redirect("https://wa.me/6282211627700?text=Assalamu%27alaikum%20Warahmatullahi%20Wabarakatuh.%0A%0APerkenalkan%20saya%20"
            . $nama . "%20" . $email . "%2C%20mau%20mentransfer%20" . $akad . "%20senilai%20Rp.%20" . $nominal . "%20melalui%20rekening%20" . $bank . ".%0A%0ATerima%20Kasih.");
    }
}
