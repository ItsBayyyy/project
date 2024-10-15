<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if($request->ajax()){
            $messages = [
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email harus berformat email',
                'username.required' => 'Username harus diisi',
                'phone.required' => 'Nomor telepon harus diisi',
                'phone.numberic' => 'Telepon harus berformat nomor',
                'password.required' => 'Kata sandi harus diisi.',
                'password.regex' => 'Kata sandi harus berisi minimal 8 Karakter, 1 Huruf Besar, 1 Huruf Kecil, 1 Angka, dan 1 Karakter Khusus.',
                'password.string' => 'Kata sandi harus berupa string.',
                'termCon.required' => 'Anda harus menyetujui ketentuan.',
                'g-recaptcha-response.required' => 'Captcha harus diisi.',
                'g-recaptcha-response.captcha' => 'Verifikasi captcha gagal, coba lagi.',
            ];

            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users,email',
                'username' => 'required|string|max:50',
                'phone' => 'required|numeric',
                'password' => 'required|regex:/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/|string',
                'termCon' => 'required|accepted',
                'g-recaptcha-response' => 'required|captcha',
            ], $messages);

            if ($validator->fails()) {
                // Return validation errors as JSON response
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(), // Return the errors object directly
                ]);
            }

            $cleanEmail = strip_tags($request->input('email'));
            $cleanUsername = strip_tags($request->input('username'));
            $cleanPhone = strip_tags($request->input('phone'));
            $cleanPassword = strip_tags($request->input('password'));
            $countryId = strip_tags($request->input('country_id'));
            $termCon = $request->input('termCon') ? 1 : 0;
            $ipAddress = $request->getClientIp();


            $client = new Client();
            $response = $client->request('POST', env('API_BASE_URL') . ':' . env('API_PORT') . '/' . env('API_VERSION') . '/auth/register', [
                'form_params' => [
                    'email' => $cleanEmail,
                    'username' => $cleanUsername,
                    'country_id' => $countryId,
                    'phone' => $cleanPhone,
                    'password' => $cleanPassword,
                    'termCon' => $termCon,
                    'ip_address' => $ipAddress,
                ]
            ]);

            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);
            if($data['status'] == 200 OR $data['status'] == 404){
                // $data['data']['message'] << to show success from backend
                return response()->json([
                    'error'     => false,
                    'message'   => [
                        'returned'	=> '<div class="alert alert-success alert-dismissible fade show" role="alert">Kamu sudah berhasil mendaftar akun, Silakan cek email untuk aktivasi akun.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                ]);
            }

            // $data['data']['error'] << to show error from backend
            return response()->json([
                'error'     => true,
                'message'   => [
                    'returned'	=> '<div class="alert alert-warning alert-dismissible fade show" role="alert">Ada yang tidak beres. Jika kesalahan masih berlanjut, silakan hubungi dukungan kami.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                ],
            ]);
        }
    }

    public function login(Request $request)
    {
        if($request->ajax()){
            $messages = [
                'username.required' => 'Username/email/phone harus diisi.',
                'username.string' => 'Username/email/telepon harus berupa string.',
                'username.max' => 'Username/email/telepon tidak boleh lebih dari :maks 50 karakter.',
                'password.required' => 'Kata sandi harus diisi.',
                'password.string' => 'Kata sandi harus berupa string.',
                'g-recaptcha-response.required' => 'Captcha harus diisi.',
                'g-recaptcha-response.captcha' => 'Verifikasi captcha gagal, coba lagi.',
            ];
            $rules = [
                'username' => 'required|string|max:50',
                'password' => 'required|string',
                'g-recaptcha-response' => 'required|captcha',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if($validator->fails()){
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(),
                ]);
            }

            $client = new Client();
            $cleanUsername = strip_tags($request->input('username'));
            $cleanPassword = strip_tags($request->input('password'));
            $ipAddress = $request->getClientIp();

            // if($ipAddress == ""){

            // }

            $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/auth/login', [
                'form_params' => [
                    'username' => $cleanUsername,
                    'password' => $cleanPassword,
                    'ip_address' => $ipAddress,
                ]
            ]);

            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);
            if($data['status'] == 200){
                if ($data['data']['is_active'] == "0") {
                    return response()->json([
                        'error' => true,
                        'message' => [
                            'returned' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">Akun Anda belum aktif. Silakan aktivasi akun Anda terlebih dahulu.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                        ],
                    ]);
                }
                // menyimpan token dengan session
                session()->put('jwt_token', $data['data']['token']);
                session()->put('paramId', $data['data']['paramId']);
                session()->put('seed', $data['data']['seed']);

                // centang ingat saya
                if ($request->has('rememberme')) {
                    // perpanjang waktu berakhirnya sesi untuk 'ingat saya' 3 hari
                    $lifetime = 60 * 24 * 3;
                    config(['session.lifetime' => $lifetime]);
                }
                return response()->json([
                    'error' => false,
                    'message'   => [
                        'returned'	=> '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Masuk SIKI.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                    'token' => $data['data']['token'],
                ]);
            } else if ($data['status'] == 403) {
                // menangani status 403 dari backend
                return response()->json([
                    'error'     => true,
                    'message'   => [
                        'returned'	=> '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $data['data']['error'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                ]);
            }
            return response()->json([
                'error'     => true,
                'message'   => [
                    'returned'	=> '<div class="alert alert-warning alert-dismissible fade show" role="alert">Gagal Masuk SIKI, Data tidak Valid.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                ],
            ]);
        }
    }


    public function logout()
    {
        // Hapus semua data sesi
        session()->flush();

        // Mengarahkan pengguna kembali ke halaman login
        return response()->json([
            'error' => false,
            'message' => [
                'returned' => 'Anda telah berhasil keluar.'
            ],
        ]);
    }
    public function forgotPassword(Request $request){
        //MEMAKSA SETIAP FORM UNTUK MENGEKSEKUSINYA JIKA PERMINTAAN ADALAH AJAX
        if($request->ajax()){
            // TRANSLATE DEFAULT ERROR LARAVEL KE BAHASA CUSTOM
            $messages = [
                'credit.required' => 'Username/email/phone harus diisi.',
                'credit.string' => 'Username/email/telepon harus berupa string.',
                'credit.max' => 'Username/email/telepon tidak boleh lebih dari :max karakter.',
                'g-recaptcha-response.required' => 'Captcha harus diisi.',
                'g-recaptcha-response.captcha' => 'Verifikasi captcha gagal, coba lagi.',
            ];

            // TENTUKAN RULES / APA SAJA YANG PERLU DI CEK OLEH VALIDASI LARAV
            $rules = [
                'credit' => 'required|string|max:50',
                'g-recaptcha-response' => 'required|captcha',
            ];

            // LAKUKAN VALIDASI
            $validator = Validator::make($request->all(), $rules, $messages);

            // CHECK APAKAH VALIDASINYA GAGAL
            if($validator->fails()){
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(),
                ]);
            }

            // JIKA VALIDASI BERHASIL
            // REQUEST DATA KE BACKEND
            $client = new Client();
            // REMOVE ALL HTML ENTITES FROM INPUT
            $cleanCredit = strip_tags($request->input('credit'));

            // mengirimkan sebuah permintaan POST ke API yang ditentukan dengan URL
            $response = $client->request('POST', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/auth/forgot_password', [
                'form_params' => [
                    'credit' => $cleanCredit ,
                ]
            ]);

            // mengambil data dari sebuah API dan mengubahnya menjadi format yang mudah di pahami
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            // kondisi jika statusnya 200(ok) dan 404(mengelabuhi user yang mencoba input data sembarang)
            if($data['status'] == 200 OR $data['status'] == 404){
                // $data['data']['message'] << to show success from backend
                return response()->json([
                    'error'     => false,
                    'message'   => [
                        'returned'	=> '<div class="alert alert-success alert-dismissible fade show" role="alert">Kami telah mengirimkan email untuk perubahan password anda.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                    ],
                ]);
            }

             // jika ada kesalahan
            // $data['data']['error'] << to show error from backend
            return response()->json([
                'error'     => true,
                'message'   => [
                    'returned'	=> '<div class="alert alert-warning alert-dismissible fade show" role="alert">Terjadi kesalahan. Jika kesalahan masih berlanjut, silahkan hubungi kami.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
                ],
            ]);
        }
    }

    public function showResetPasswordForm($param_id, $activation_key)
    {
        return view('auth.reset_password', compact('param_id', 'activation_key'));
    }

    public function resetPassword(Request $request)
    {
        if($request->ajax()){
            $messages = [
                'password.required' => 'Kata sandi harus diisi.',
                'password.regex' => 'Kata sandi harus berisi minimal 8 Karakter, 1 Huruf Besar, 1 Huruf Kecil, 1 Angka, dan 1 Karakter Khusus.',
                'password.string' => 'Kata sandi harus berupa string.',
                'confirm_password.required' => 'Konfirmasi kata sandi harus diisi.',
                'confirm_password.same' => 'Konfirmasi kata sandi tidak cocok dengan kata sandi.',
                'g-recaptcha-response.required' => 'Captcha harus diisi.',
                'g-recaptcha-response.captcha' => 'Verifikasi captcha gagal, coba lagi.',
            ];

            $validator = Validator::make($request->all(), [
                'password' => 'required|regex:/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/|string',
                'confirm_password' => 'required|same:password',
                'g-recaptcha-response' => 'required|captcha',
            ], $messages);

            if ($validator->fails()) {
                // Return validation errors as JSON response
                return response()->json([
                    'error' => true,
                    'message' => $validator->errors(), // Return the errors object directly
                ]);
            }

            // Continue with clean inputs
            $cleanUserId = strip_tags($request->input('param_id'));
            $cleanActivationKey = strip_tags($request->input('activation_key'));
            $cleanPassword = strip_tags($request->input('password'));

            $client = new Client();
            $response = $client->request('POST', env('API_BASE_URL') . ':' . env('API_PORT') . '/' . env('API_VERSION') . '/auth/reset_password', [
                'form_params' => [
                    'user_id' => $cleanUserId,
                    'activation_key' => $cleanActivationKey,
                    'password' => $cleanPassword,
                    'confirm_password' => $cleanPassword,
                ]
            ]);

            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);

            if ($data['status'] == 200 OR $data['status'] == 404) {
                return response()->json([
                    'error' => false,
                    'message' => [
                        'returned' => '<div class="alert alert-success alert-dismissible fade show" role="alert">Kata sandi kamu berhasil diubah.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
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

        // // Jika status tidak 200 atau 404, kirimkan pesan error
        // session()->flash('message', 'Aktivasi akun sudah tidak berlaku lagi, jika terdapat kendala bisa menghubungi kami.');
        // session()->flash('message_type', 'danger'); // Tipe pesan (error)

        // return view('auth.activate', [
        //     'param_id' => $param_id,
        //     'activation_key' => $activation_key,
        // ]);



    public function activate($param_id, $activation_key)
    {
        $cleanParamId = strip_tags($param_id);
        $cleanActivationKey = strip_tags($activation_key);

        $client = new Client();
        $response = $client->request('GET', env('API_BASE_URL') . ':' . env('API_PORT') . '/' . env('API_VERSION') . '/auth/activate' .'/' . $cleanParamId . '/' . $cleanActivationKey, [
        ]);

        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);

        // Status 200 atau 404, kirimkan pesan sukses
        if ($data['status'] == 200) {
            session()->flash('message', $data['data']['message']); // Flash message
            session()->flash('message_type', 'success'); // Tipe pesan (success)

            return view('auth.activate', [
                'param_id' => $param_id,
                'activation_key' => $activation_key,
            ]);
        }

        // Jika status tidak 200 atau 404, kirimkan pesan error
        session()->flash('message', 'Aktivasi akun sudah tidak berlaku lagi, jika terdapat kendala bisa menghubungi kami.');
        session()->flash('message_type', 'danger'); // Tipe pesan (error)

        return view('auth.activate', [
            'param_id' => $param_id,
            'activation_key' => $activation_key,
        ]);
    }

}
