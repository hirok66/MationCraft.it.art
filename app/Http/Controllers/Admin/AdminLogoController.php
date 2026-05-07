<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\adminLogo;
use Illuminate\Http\Request;

class AdminLogoController extends Controller
{

    public function adminLogoIndex()
    {
        $logo = adminLogo::latest()->first();
        return view('admin.admin.logo.index', compact('logo'));
    }

    /**
     * Store or update admin logos.
     */
    public function adminLogoStore(Request $request)
    {
        $logo = adminLogo::latest()->first();

        $request->validate([
            'headerlogo' => ($logo ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footerlogo' => ($logo ? 'nullable' : 'required') . '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $headerLogoName = $logo?->header_logo;
        $footerLogoName = $logo?->footer_logo;

        if ($request->hasFile('headerlogo')) {
            $headerLogo = $request->file('headerlogo');
            $headerLogoName = time() . '_admin_header.' . $headerLogo->getClientOriginalExtension();
            $headerLogo->move(public_path('uploads/admin_logos'), $headerLogoName);
        }

        if ($request->hasFile('footerlogo')) {
            $footerLogo = $request->file('footerlogo');
            $footerLogoName = time() . '_admin_footer.' . $footerLogo->getClientOriginalExtension();
            $footerLogo->move(public_path('uploads/admin_logos'), $footerLogoName);
        }

        adminLogo::updateOrCreate(
            ['id' => $logo?->id ?? 0],
            [
                'header_logo' => $headerLogoName,
                'footer_logo' => $footerLogoName,
                'status' => 'active',
            ]
        );

        return back()->with('success', 'Admin Logo uploaded successfully.');
    }
}
