<?php namespace addons\Forms;

class AddPermissionFormRequest extends PermissionFormRequest {

    public function rules()
    {
        return $this->rules;
    }

    public function messages()
    {
        return $this->messages;
    }
}