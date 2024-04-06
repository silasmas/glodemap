<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function sendMessage(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'objet' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
        ]);
        // $valid = Validator::make($request->all(), [
        //     'nom' => ['required', 'string', 'max:255'],
        //     'objet' => ['required', 'string', 'max:255'],
        //     'phone' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        //     'message' => ['required', 'string', 'max:255'],
        // ]);
        // if (!$valid->fails()) {
        // }
        Mail::to("ir-masimango@silasmas.com")->send(new message($request->email, $request->nom, $request->objet, $request->message, $request->phone));
        return back()->with('msg', "Votre message est envoyer avec succès!");
    }
    public function detail($id): View
    {
        $i = $id;
        return view('pages.detailservice', compact('i'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
