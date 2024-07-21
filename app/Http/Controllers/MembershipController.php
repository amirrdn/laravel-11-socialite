<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function delete(Request $request)
    {
        $user = auth()->user();
        $user->delete();

        return redirect('/')->with('status', 'Akun Anda telah dihapus.');
    }
}
