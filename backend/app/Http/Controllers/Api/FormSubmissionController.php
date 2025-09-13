<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function store(Request $request, $slug)
    {
        $form = Form::where('slug', $slug)->firstOrFail();

        $data = $request->all();

        // 保存
        FormSubmission::create([
            'form_id' => $form->id,
            'data' => json_encode($data),
        ]);

        // 必要ならメール送信
        // Mail::to($form->user->email)->send(new FormSubmitted($form, $data));

        return response()->json([
            'status' => 'success',
            'message' => '送信が完了しました',
        ]);
    }
}
