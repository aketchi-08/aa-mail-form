<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with('user')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.forms.index', compact('forms'));
    }

    public function show(Form $form)
    {
        $form->load('fields', 'submissions'); // リレーションがあれば
        return view('admin.forms.show', compact('form'));
    }
}
