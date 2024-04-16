<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $testimonial = $this->route('testimonial');

        return $testimonial && $this->user()->can('delete', $testimonial);
    }
}
