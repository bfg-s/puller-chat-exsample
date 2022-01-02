<?php

namespace App\Http\Requests;

use Bfg\Request\FormRequest;

class ChatMessageRequest extends FormRequest
{
    public function authorize()
    {
        return \Auth::check();
    }

    public function rules()
    {
        return [
            'message' => 'required|min:2'
        ];
    }

    protected function transformation(array $validated): array {
        $validated['user_id'] = \Auth::id();
        return $validated;
    }
}
