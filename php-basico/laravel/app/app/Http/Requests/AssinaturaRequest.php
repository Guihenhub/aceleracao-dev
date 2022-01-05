<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssinaturaRequest extends FormRequest
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
            'qtdCaracteres' => ['required','min:1','max:200'],
            'AssinaturaPadrao' => ['required','min:10','max:200'],
            'qtdAssinaturas' => ['required','min:1','max:2']
        ];
    }

    public function messages()
    {
        return [
            'qtdCaracteres.required' => "Campo quantidade de caracteres é obrigatório",
            'qtdCaracteres.min' => "Campo quantidade deve possuir mais de 1 caracter",
            'qtdCaracteres.max' => "Campo quantidade de caracteres deve possuir menos de 200 caracteres",

            'AssinaturaPadrao.required' => "Campo assinatura padrão  é obrigatório",
            'AssinaturaPadrao.min' => "Campo assinatura padrão deve possuir mais de 10 caracter",
            'AssinaturaPadrao.max' => "Campo assinatura padrão de caracteres deve possuir menos de 200 caracteres",

            'qtdAssinaturas.required' => "Campo quantidade de assinaturas é obrigatório",
            'qtdAssinaturas.min' => "Campo quantidade de assinaturas deve possuir mais de 10 caracter",
            'qtdAssinaturas.max' => "Campo quantidade de assinaturas de caracteres deve possuir menos de 200 caracteres",
        ];
    }
}
