<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Position;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', [
            'title' => 'ABEC - Register',
            'officer_positions' => Position::select('id', 'officer_type', 'position')->get(),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'lowercase', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'position_id' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'position_id' => $request->position_id,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME_USER);
    }
}
