<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $customers = Customer::query()
            ->orderBy('id')
            ->limit(5)
            ->get(['id', 'nama', 'logo']);

        return view('pages.home', [
            'customers' => $customers,
        ]);
    }
}
