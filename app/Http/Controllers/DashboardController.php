<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Data untuk dashboard
        $data = [
            'title' => 'Dashboard',
            'user' => $user,
            'total_izin' => 0, // Implementasikan perhitungan total izin
            'total_kunjungan' => 0, // Implementasikan perhitungan total kunjungan
            'total_lembur' => 0, // Implementasikan perhitungan total lembur
        ];

        return view('dashboard', $data);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function settings()
    {
        $user = Auth::user();
        return view('settings', compact('user'));
    }
} 