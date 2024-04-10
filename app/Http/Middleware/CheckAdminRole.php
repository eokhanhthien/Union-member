<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập và có vai trò là 1 hoặc 2 không
        if (Auth::guard('union_member')->check() && Auth::guard('union_member')->user()->role == 1) {
            // Nếu có, cho phép truy cập vào route tiếp theo
            return $next($request);
        }

        // Nếu không, chuyển hướng người dùng hoặc trả về lỗi tùy thuộc vào yêu cầu của bạn
        // Ví dụ chuyển hướng đến trang đăng nhập:
        return redirect()->back()->with('error','Bạn không có quyền truy cập vào trang này');

    }
}
