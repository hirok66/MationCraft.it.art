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
        return view('admin.frontend.logo.index');
    }

    // store frontend logo
    public function store(Request $request)
{

        $request->validate([
        'headerlogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'footerlogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $headerLogoName = null;
    $footerLogoName = null;

    if ($request->hasFile('headerlogo')) {
        $headerLogo = $request->file('headerlogo');
        $headerLogoName = time().'_header.'.$headerLogo->getClientOriginalExtension();
        $headerLogo->move(public_path('admin/frontend/logo'), $headerLogoName);
    }

    if ($request->hasFile('footerlogo')) {
        $footerLogo = $request->file('footerlogo');
        $footerLogoName = time().'_footer.'.$footerLogo->getClientOriginalExtension();
        $footerLogo->move(public_path('admin/frontend/logo'), $footerLogoName);
    }

    FrontendLogo::createOrUpdate([
        'header_logo' => $headerLogoName,
        'footer_logo' => $footerLogoName,
        'status' => 'active',
    ]);

    return back()->with('success', 'Logo uploaded successfully.');
}
}

