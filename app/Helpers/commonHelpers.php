<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

// mendefinisikan funsi isLogin
if (!function_exists('isLogin')) {
    function isLogin($request) {
        // cek nilai session jwt_token dan user_id
        if (Session::has('jwt_token') && Session::has('paramId') && Session::has('seed')) {
            $client = new Client();

            $response = $client->request('GET', env('API_BASE_URL').':'.env('API_PORT').'/'.env('API_VERSION').'/', [
                'headers' => [
                    'Authorization' => 'Bearer ' . Session::get('jwt_token'),
                    'seed' => Session::get('seed'),
                    'userIp' => $request->getClientIp(),
                    'paramId' => Session::get('paramId'),
                ],
            ]);
            if ($response->getStatusCode() === 200) {
                return true;
            }
        }
        return false;
    }
}


// kalau jwt token dan session user id ada
// lakukan pengecekan ulang apakah jwt token valid
// if (!function_exists('isLogin')) {
//     function isLogin() {
//         if (Session::has('jwt_token') && Session::has('user_id')) {
//             //cek ke api http://localhost/v1/
//             // cek dengan guzzle get dimana headers adalah bearer token
//             // jika nilai return 200 maka return true
//             //
//             return true;
//         }
//         return false;
//     }
// }
 // function sac_get($url){
	// 	$ch = curl_init();
	// 	curl_setopt($ch, CURLOPT_URL, $url);
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 	$headers = array();
	// 	$headers[] = "Accept: application/json";
	// 	$headers[] = "Authorization: Bearer APIKEY";
	// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// 	$result = curl_exec($ch);
	// 	if (curl_errno($ch)) {
	// 		echo 'Error:' . curl_error($ch);
	// 	}
	// 	curl_close ($ch);
	// 	return json_decode($result);
	// }
