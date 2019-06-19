<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $role)
       {
           echo 'Vai trò:' . $role;
           if ($role == 'admin') {
             return $next($request);
           }
           else {
             echo "Xin lỗi bạn không có quyền truy cập";
             return response()->view('404');
           }

           return $next($request);
       }

     public function terminate($request, $response)
      {
          echo '<br>3. Terminable Middleware';
          echo '<br>Thực hiện sau khi HTTP response gửi đến trình duyệt';
      }
}
