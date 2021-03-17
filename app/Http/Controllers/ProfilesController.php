<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'username' => ['required', 'string', 'max:20', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'firstname' => ['required', 'string', 'max:20'],
            'lastname' => ['required', 'string', 'max:20'],
            'bio' => ['nullable', 'string', 'max:160'],
            'foundation' => ['required', 'digits_between:1,1'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'avatar' => ['image', 'dimensions:min_width=100,min_height=200', 'max:2000']
        ]);

        if ($request->avatar) {
            Storage::delete($user->avatar);
            $attr['avatar'] = $request->avatar->store('avatars');
        }

        switch ($request->foundation) {
            case 0:
                $attr['foundation'] = false;
                break;
            case 1:
                $attr['foundation'] = true;
                break;
            default:
                return redirect("/profiles/$user->id/edit")->with('foundation-error', 'Valor incorrecto.');
                break;
        }

        $user->update($attr);
        return redirect("/profiles/$user->id/edit")->with('message', 'Datos actualizados.');
    }
}
