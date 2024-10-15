<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use GuzzleHttp\client;

class AhliWarisController extends Controller
{
    public function __construct(Request $request)
    {
        if(!isLogin($request)) abort(redirect()->route('auth.login'));
    }

    public function profilePage(Request $request) {
      
        return view('dashboard.pages_profile');
    }

    public function addahliwaris(Request $request) {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'hubungan_dengan' => 'nullable|string',
            'nomor_telp' => 'nullable|string'
        ]);

        $client = new Client();

        $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/ahliwaris/get_by_id', [
            'headers' => [
                'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                'seed' => Session::get('seed'),
                'userIp' => $request->getClientIp(),
                'paramId' => Session::get('paramId')
            ],
            'user_id' => Session::get('paramId'),
                'nama_lengkap' => $request->input('nama_lengkap'),
                'hubungan_dengan' => $request->input('hubungan_dengan'),
                'nomor_telp' => $request->input('nomor_telp')
            ]);
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);
            dd($data);
            
        return view('dashboard.pages_profile');
    }
}
