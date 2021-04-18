<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->id()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $rules = [

        'nombre_elemento' => 'required',
        'codigo' => 'required',
        'estado' => 'required|in:1,2'  
       ];

       if($this->estado == 2){

        $rules = array_merge($rules, [

            'fecha' => 'required',
            'valor_estimado' => 'required',
            'centro_id' => 'required',
            'condiciones' => 'required',
            'accesorios' => 'required'

        ]);
       }
       return $rules;
      
    }
}
