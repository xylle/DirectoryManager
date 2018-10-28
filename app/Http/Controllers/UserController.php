<?php

namespace App\Http\Controllers;

use Adldap\AdldapInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(AdldapInterface $ldap) {

        $this->ldap = $ldap;

    }

    public function index() {

        $users = $this->ldap->search()->users()->sortBy('cn', 'asc')->get();

        return view('users.index', ['users' => $users]);

    }

    public function show($id) {

        $user = $this->ldap->search()->users()->find($id);

        if ($user) {
            return view('users.show', ['user' => $user]);
        } else {
            // Lire une valeur depuis le fichier env.
            // $value = env('ADLDAP_CONTROLLERS');
            // Lire une valeur depuis un fichier config special.
            $value = config('404.user');
            return view('users.404', ['value' => $value]);
        }

    }

    public function create() {

        //

    }

    public function store(Request $request) {

        //create $user
        $user = $this->ldap->user()->create($request->all());

        //store user to current group
        $group = $this->ldap->group()->find($request->group_id)->addMember($user);

        return view('users.show', ['user' => $user]);

    }

    public function edit() {

        //

    }

    public function update() {

        //

    }

    public function destroy() {

        //

    }

}
