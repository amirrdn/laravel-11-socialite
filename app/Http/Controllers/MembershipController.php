<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function delete(Request $request)
    {
        // Logika untuk menghapus data pengguna
        // Misalnya, hapus akun pengguna yang sedang masuk
        $user = auth()->user();
        $user->delete();

        return redirect('/')->with('status', 'Akun Anda telah dihapus.');
    }
}
