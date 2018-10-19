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

        $users = $this->ldap->search()->users()->get();

        return view('users.index', ['users' => $users]);

    }

    public function show() {

        //

    }

    public function create() {

        //

    }

    public function store() {

        //

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
