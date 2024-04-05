<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Foundation\Http\FormRequest;

class TasksStore extends FormRequest
{
    private $inputs;
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
            'title' => 'required', 'string',
            'description' => 'required', 'string',
            'completed' => 'required ','boolean',
        ];
    }

    public function prepareForValidation()
    {
        $this->inputs = $this->all();

        if(isset($this->inputs['completed'])) {
            $this->inputs['completed'] = (bool) $this->inputs['completed'];
        }

        $this->replace($this->inputs);
    }
}
