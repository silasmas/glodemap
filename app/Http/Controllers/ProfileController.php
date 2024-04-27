<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function home(): View
    {

        return view('pages.home');
    }
    public function download()
    {
        return Redirect::to(asset('assets/doc/chPromedi.pdf'));
    }
    public function contact(): View
    {
        $banniere = asset('assets/img/sante/ban2.jpg');
        return view('pages.contact', compact('banniere'));
    }
    public function about(): View
    {
        $banniere = asset('assets/img/sante/ban2.jpg');
        return view('pages.about', compact('banniere'));
    }
    public function services(): View
    {
        $banniere = asset('assets/img/sante/ban2.jpg');
        return view('pages.services', compact('banniere'));
    }
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
            'message' => ['required', 'string'],
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
        $banniere = "";
        $img1 = "";
        $contenu = "";
        switch ($i) {
            case ("1"):
                $banniere = asset('assets/img/sante/ban2.jpg');
                $img1 = asset('assets/img/sante/3.jpg');
                break;
            case ("2"):
                $banniere = asset('assets/img/sante/ban2.jpg');
                $img1 = asset('assets/img/sante/douane.jpg');
                break;
            case ("3"):
                $img1 = asset('assets/img/sante/banniere.JPG');
                $banniere = asset('assets/img/sante/baniere.JPG');
                // $contenu = $json_result->sante;
                break;

            default:
                $banniere = asset('assets/img/sante/ban2.jpg');
                break;

        }
        return view('pages.detailservice', compact('i', "img1", "banniere", 'contenu'));
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
