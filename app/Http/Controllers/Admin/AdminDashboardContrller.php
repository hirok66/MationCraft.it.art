<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\FrontendLogo;
use Illuminate\Http\Request;

class AdminDashboardContrller extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function frontendLogoIndex()
    {
        $logo = FrontendLogo::latest()->first();
        return view('admin.frontend.logo.index', compact('logo'));
    }

    // store frontend logo
    public function store(Request $request)
    {
        $logo = FrontendLogo::latest()->first();

        // যদি ডাটাবেজে লোগো অলরেডি থাকে তবে রিকোয়ার্ড ফিল্ড ম্যান্ডেটরি হবে না
        $request->validate([
            'headerlogo' => ($logo ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footerlogo' => ($logo ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $headerLogoName = $logo?->header_logo;
        $footerLogoName = $logo?->footer_logo;

        if ($request->hasFile('headerlogo')) {
            $headerLogo = $request->file('headerlogo');
            $headerLogoName = time() . '_header.' . $headerLogo->getClientOriginalExtension();
            $headerLogo->move(public_path('uploads/frontend_logos'), $headerLogoName);
        }

        if ($request->hasFile('footerlogo')) {
            $footerLogo = $request->file('footerlogo');
            $footerLogoName = time() . '_footer.' . $footerLogo->getClientOriginalExtension();
            $footerLogo->move(public_path('uploads/frontend_logos'), $footerLogoName);
        }

        // createOrUpdate পরিবর্তন করে updateOrCreate ব্যবহার করা হয়েছে
        FrontendLogo::updateOrCreate(
            ['id' => $logo?->id ?? 0],
            [
                'header_logo' => $headerLogoName,
                'footer_logo' => $footerLogoName,
                'status' => 'active',
            ]
        );

        return back()->with('success', 'Frontend Logo uploaded successfully.');
    }

    // admin logo index

}
