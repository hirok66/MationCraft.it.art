<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        // ১. ইউজার অলরেডি ভেরিফাইড কি না চেক করা
        if ($request->user()->hasVerifiedEmail()) {
            return $this->redirectUser($request->user());
        }

        // ২. ইমেইল ভেরিফাইড হিসেবে মার্ক করা
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return $this->redirectUser($request->user());
    }

    /**
     * রোল অনুযায়ী রিডাইরেক্ট করার জন্য আলাদা মেথড
     */
    protected function redirectUser($user): RedirectResponse
    {
        if ($user->role == 'admin' || $user->role == 'superadmin') {
            $path = route('admin.dashboard', absolute: false);
        }
        else if ($user->role == 'editor') {
            $path = route('editor.dashboard', absolute: false);
        }
        else if ($user->role == 'moderator') {
            $path = route('moderator.dashboard', absolute: false);
        }
        else {
            $path = route('user.dashboard', absolute: false);
        }

        return redirect()->intended($path . '?verified=1');
    }
}
