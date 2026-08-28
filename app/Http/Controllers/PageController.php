<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function presentation(): View
    {
        return view('presentation');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom'       => ['required', 'string', 'max:100'],
            'email'     => ['required', 'email', 'max:150'],
            'telephone' => ['nullable', 'string', 'max:20'],
            'sujet'     => ['required', 'in:inscription,benevolat,partenariat,presse,autre'],
            'message'   => ['required', 'string', 'max:3000'],
            // le champ "site_web" doit rester vide (honeypot anti-spam)
            'site_web'  => ['prohibited'],
        ], [
            'nom.required'     => 'Merci de renseigner votre nom.',
            'email.required'   => 'Merci de renseigner votre email.',
            'email.email'      => 'Cet email ne semble pas valide.',
            'sujet.required'   => 'Merci de choisir un sujet.',
            'message.required' => 'Merci de rédiger un message.',
            'message.max'      => 'Votre message est trop long (3000 caractères maximum).',
        ]);

        // TODO : adapter l'envoi à ta configuration mail (config/mail.php)
        // Mail::to('contact@aol-rugby.fr')->send(new \App\Mail\ContactMessage($validated));

        return redirect()
            ->route('contact')
            ->with('success', 'Merci ' . $validated['nom'] . ', votre message a bien été envoyé. Le club vous répondra rapidement.');
    }
}
