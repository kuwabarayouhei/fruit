<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.model' => 'required|string|max:50',
            'post.number' => 'required|string|max:50',
            'post.color' => 'required|string|max:50',
            'post.location' => 'required|string|max:50',
            'post.time' => 'required|string|max:50',
            'post.situation' => 'required|string|max:50',
            'post.information' => 'required|string|max:50',
        ];
    }
}