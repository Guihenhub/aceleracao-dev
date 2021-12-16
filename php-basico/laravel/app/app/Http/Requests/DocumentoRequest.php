<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo' => ['required','min:10','max:200'],
            'qtdAssinantes' => ['required','min:1','max:3'],
            'assinatura'  => ['required','min:1','max:200'],
            'qtdPaginas'  => ['required','min:10','max:200']
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => "O campo titulo é obrigatório",
            'qtdAssinantes.required' => "O campo quantidade de assinantes é obrigatório",
            'assinatura.required'  => "O campo assinatura é obrigatório",
            'qtdPaginas.required'  => "O campo quantidade de páginas é obrigatório"
        ];
    }
}
