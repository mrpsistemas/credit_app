<?php

namespace App\Http\Controllers\Auth;

use App\Models\Tenant;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register-validation');
        //return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $isTenant = (bool) tenancy()->tenant;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:20'],
        ]);

        if (! $isTenant) {
            $request->validate([
                'company' => ['required', 'string', 'max:255'],
                'domain' => ['required', 'string', 'max:255', 'unique:domains'],
            ]); 
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        if (! $isTenant) {
            $tenant = Tenant::create([
                'id' => $request->input('company'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'domain' => $request->input('domain'),
                'tenancy_db_name' => $request->input('domain'),
                //'tenancy_db_username' => 'tenant_user',
                //'tenancy_db_password' => bcrypt('tenant_password'),
            ]);
            
            $tenant->createDomain(
                $request->input('domain') . '.' . config('tenancy.central_domains')[0],
            );   
        }   

        event(new Registered($user));

        if (! $isTenant) {
            return redirect(tenant_route($tenant->domains()->first()->domain, 'login'));
        }

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
