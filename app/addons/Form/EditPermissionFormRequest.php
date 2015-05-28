<?php namespace addons\Forms;

class EditPermissionFormRequest extends PermissionFormRequest {

    public function rules()
    {
        $id = $this->route('id');
        $rules = $this->rules;
        $rules['name'] = ['required', 'unique:permissions,name,'.$id];

        return $rules;
    }

    public function messages()
    {
         return $this->messages;
   }
}