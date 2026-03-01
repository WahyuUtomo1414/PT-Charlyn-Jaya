<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OrganizationController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.organization');
    }
}
