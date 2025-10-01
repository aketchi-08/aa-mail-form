<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $forms = Form::where('user_id', Auth::id())->get();
        return view('user.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('user.forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Form::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('forms.index')->with('success', 'フォームを作成しました');
    }

    public function edit(Form $form)
    {
        $this->authorize('update', $form);
        return view('user.forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        $this->authorize('update', $form);

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $form->update(['title' => $request->title]);

        return redirect()->route('forms.index')->with('success', 'フォームを更新しました');
    }

    public function destroy(Form $form)
    {
        $this->authorize('delete', $form);
        $form->delete();

        return redirect()->route('forms.index')->with('success', 'フォームを削除しました');
    }
}
