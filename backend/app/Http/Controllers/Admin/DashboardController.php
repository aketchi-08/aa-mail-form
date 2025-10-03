<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Form;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $formCount = Form::count();

        return view('admin.dashboard', compact('userCount', 'formCount'));
    }
}
