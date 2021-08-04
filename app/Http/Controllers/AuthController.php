<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return ['NIS' => 3103119109,
        'name'      => 'Michael Agustinus Santoso',
        'gender'    => 'Male',
        'phone'     => '082324600244',
        'class'     =>  'XII RPL 4'];
    }
}
