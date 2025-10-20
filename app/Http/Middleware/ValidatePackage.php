<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\WPUsers;

class ValidatePackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  mixed  ...$allowedPackages
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$allowedPackages)
    {
        $userId = session('user_id');

   
        $user_package = WPUsers::where('user_id', $userId)->value('package');

        // 🔹 Case 1: No package found locally → check from external API
        if (!$user_package) {
            // $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/wp-json/yith-subscription/v1/list/' . $userId;

            // $ch = curl_init();
            // curl_setopt_array($ch, [
            //     CURLOPT_URL => $url,
            //     CURLOPT_RETURNTRANSFER => true,
            //     CURLOPT_TIMEOUT => 10,
            // ]);

            // $response = curl_exec($ch);
            // curl_close($ch);

            // $data = json_decode($response, true);

            // if (isset($data['code']) && $data['code'] === 'No active subscriptions') {
            //     return redirect('/billing')->with('fail', 'Please upgrade your package.');
            // }

            // if (!is_array($data) || empty($data)) {
            //     return redirect('/billing')->with('fail', 'Unexpected response from subscription server. Please try again later.');
            // }

            // // You can extract actual package info from $data if available
            // // For now, assume API validated successfully
            $wp_user = WPUsers::where('user_id', $userId)->first();
            $wp_user->package = 'free';
            $wp_user->update();
            return $next($request);
        }

        // 🔹 Case 2: Validate package against allowed list
       $normalizedAllowed = array_map(function ($p) {
            return strtolower(trim($p, " \t\n\r\0\x0B\"'"));
        }, $allowedPackages);

        $normalizedUserPackage = strtolower(trim($user_package));

        if (in_array($normalizedUserPackage, $normalizedAllowed)) {
            return $next($request);
        }


        return redirect('/billing')->with('fail', 'Please upgrade your package.');
    }
}
