<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    //
    public function list()
    {
        $data['pegawai'] = Pegawai::all();
        return view('Content.list-karyawan', $data);
    }
    public function index($id)
    {
        //
        $response = Http::get('https://reqres.in/api/users/' . $id);
        $data['users'] = $response->json()['data'];
        return view('Content.dashboard-karyawan', $data);
    }

    public function create()
    {
        //
        return view('Content.login-page');
    }

    public function store(Request $request)
    {
        $rules = [
            'nip' => 'required|max:18|min:2',
            'g-recaptcha-response' => 'required'
        ];
        $this->validate($request, $rules, [
            'nip.required' => 'NIP is required',
            'nip.min' => 'NIP should be minimum 5 length',
            'g-recaptcha-response.required' => 'Please complete reCaptcha',
        ]);
        $input = $request->all();
        Pegawai::create($input);
        return redirect('list');
    }
}
