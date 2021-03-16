<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'posts' => $user->posts,
            'following' => $user->following
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('edit', $user);

        $attr = $request->validate([
            'username' => ['required', 'string', 'max:15', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)]
        ]);

        $user->update($attr);

        return redirect("/profiles/$user->id/edit")->with('message', 'Datos actualizados.');
    }
}
