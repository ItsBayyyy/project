<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function __construct(Request $request)
    {
        if(!isLogin($request)) abort(redirect()->route('auth.login'));
    }
    public function getData(Request $request)
    {
        $client = new Client();

        $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/kerabat/get_all', [
            'headers' => [
                'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                'seed' => Session::get('seed'),
                'userIp' => $request->getClientIp(),
                'paramId' => Session::get('paramId'),
            ],
            'form_params' => [
                'user_id' => Session::get('user_id'),
            ]
        ]);
        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);
        if ($data['status'] == 200) {
            if (isset($data['data']) && is_array($data['data'])) {
                return view('dashboard.setting_profile', ['data' => $data['data']]);
            }
            // dd($data);
        }
        return response()->json(['error' => 'Tidak dapat mengambil data'], 500);
    }

    public function changePassword(Request $request){
        if($request->ajax()){
            $messages = [
                'old_password.required' => 'Kata sandi lama harus diisi.',
                'new_password.required' => 'Kata sandi harus diisi.',
                'new_password.regex' => 'Kata sandi harus berisi minimal 8 Karakter, 1 Huruf Besar, 1 Huruf Kecil, 1 Angka, dan 1 Karakter Khusus.',
                'new_password.string' => 'Kata sandi harus berupa string.',
                'new_password.different' => 'Kata sandi baru tidak boleh sama dengan kata sandi lama.',
                'confirm_password.required' => 'Konfirmasi kata sandi harus diisi.',
                'confirm_password.same' => 'Konfirmasi kata sandi tidak cocok dengan kata sandi.',
            ];
            $rules = [
                'old_password' => 'required|string',
                'new_password' => 'required|regex:/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/|string|different:old_password',
                'confirm_password' => 'required|same:new_password',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);

            if($validator->fails()){
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(),
                ]);
            }

            $client = new Client();
            $cleanOldPassword = strip_tags($request->input('old_password'));
            $cleanNewPassword = strip_tags($request->input('new_password'));
            $cleanConfirmPassword = strip_tags($request->input('confirm_password'));

            $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/user/change_password', [
               'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId'),
                ],
                'form_params' => [
                    'user_id' => Session::get('user_id'),
                    'old_password' =>  $cleanOldPassword,
                    'new_password' =>  $cleanNewPassword,
                    'confirm_password' =>  $cleanConfirmPassword,
                ]
            ]);
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);
            if ($data['status'] == 200) {
                return response()->json([
                    'error' => false,
                    'message' => [
                        'returned' => '<div class="alert alert-success alert-dismissible fade show" role="alert">Kata sandi kamu berhasil diubah.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => [
                        'returned' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">Kata sandi lama Anda tidak cocok.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                ]);
            }
            return response()->json([
                'error' => true,
                'message' => [
                    'returned' => '<div class="alert alert-warning alert-dismissible fade show" role="alert">Terjadi kesalahan. Jika kesalahan masih berlanjut, silahkan hubungi kami.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                ],
            ]);
        }
    }

    public function getAllKerabat(){
        // $client = new Client();

        // $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/get_all_kerabat', [
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . Session::get('jwt_token'),
        //     ],
        //     'form_params' => [
        //         'user_id' => Session::get('user_id'),
        //     ]
        // ]);
        // $body = $response->getBody()->getContents();
        // $data = json_decode($body, true);
        // if ($data['status'] == 200) {
        //     if (isset($data['data']) && is_array($data['data'])) {
        //         return view('dashboard.setting_profile', ['data' => $data['data']]);
        //     } else {
        //         return response()->json(['error' => 'Data tidak ditemukan'], 404);
        //     }
        //     // dd($data);
        // }
        // return response()->json(['error' => 'Tidak dapat mengambil data'], 500);
    }

}
