<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnouncementsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'departments_id' => 'required',
            'semester' => 'required',
            'title' => 'required|string|max:255',
            'slug' => 'required|string',
            'content' => 'required|string',
            'category' => 'nullable|string',
            'attachment_path' => 'nullable',
            'published_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after_or_equal:published_at',
            'status' => 'nullable|string|in:draft,published,archived',
            'users_id' => 'nullable',
        ];
    }
}
