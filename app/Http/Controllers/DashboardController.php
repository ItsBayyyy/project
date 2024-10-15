<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct(Request $request)
    {
        if(!isLogin($request)) abort(redirect()->route('auth.login'));
    }
    public function dashboard(){

        // $client = new Client();
        //     $response = $client->request('POST', env('API_BASE_URL') . ':' . env('API_PORT') . '/' . env('API_VERSION') . '/get_all_rekening', [
        //         'headers' => [
        //             'Authorization' => 'Bearer ' . Session::get('jwt_token'),
        //         ],
        //         'form_params' => [
        //             'user_id' => Session::get('user_id'),
        //         ]
        //     ]);

        //     $body = $response->getBody()->getContents();
        //     $data = json_decode($body, true);
        //     // print_r($data);
        return view('dashboard.dashboard');
    }

}
