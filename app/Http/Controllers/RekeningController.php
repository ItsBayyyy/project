<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
class RekeningController extends Controller
{
    public function __construct(Request $request)
    {
        if(!isLogin($request)) abort(redirect()->route('auth.login'));
    }
    public function combinedPage(Request $request)
    {
        $client = new Client();
        $dataKerabat = [];
        $dataRekening = [];
        $dataAhliWaris = [];
    
            $responseKerabat = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/kerabat/get_all', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId')
                ],
                'form_params' => [
                    'user_id' => Session::get('paramId')
                ]
            ]);
            $dataKerabat = json_decode($responseKerabat->getBody()->getContents(), true)['data'];
    
            $responseRekening = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/rekening/get_all', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId')
                ],
                'form_params' => [
                    'user_id' => Session::get('paramId')
                ]
            ]);
            $dataRekening = json_decode($responseRekening->getBody()->getContents(), true)['data'];
    
            $responseAhliWaris = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/ahli_waris/get_all', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId')
                ],
                'form_params' => [
                    'user_id' => Session::get('paramId')
                ]
            ]);
            $dataAhliWaris = json_decode($responseAhliWaris->getBody()->getContents(), true)['data'];

        return view('dashboard.testing_rekening', [
            'dataKerabat' => $dataKerabat,
            'dataRekening' => $dataRekening,
            'dataAhliWaris' => $dataAhliWaris
        ]);
    }
    

    public function addRekening(Request $request) {
        $client = new Client();
        try {
            $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/rekening/add', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId')
                ],
                'form_params' => [
                    'user_id' => Session::get('paramId'),
                    'rekening' => $request->input('rekening'), 
                    'bank' => $request->input('bank')
                ]
            ]);
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            return redirect()->route('rekening.page')->with('success', 'Rekening berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tangani error
            return back()->withErrors('Terjadi kesalahan saat menambahkan rekening.');
        }
    }

    public function deleteRekening($id) {
        $client = new Client();
        try {
            $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/rekening/delete', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => request()->getClientIp(),
                    'paramId' => Session::get('paramId')
                ],
                'form_params' => [
                    'user_id' => Session::get('paramId'),
                    'rekening_id' => $id 
                ]
            ]);

            return redirect()->route('rekening.page')->with('success', 'Rekening berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->withErrors('Terjadi kesalahan saat menghapus rekening.');
        }
    }
}
