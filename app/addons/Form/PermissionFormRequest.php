<?php namespace addons\Forms;

use Illuminate\Support\Facades\Request;

class PermissionFormRequest extends Request {

    protected $rules = [
        'name' => ['required', 'unique:permissions,name'],
        'display_name' => ['required'],
        'description' => ['max:100'],
    ];

    protected $messages = [
        'name.unique' => '“权限名称”已存在。',
        'name.required' => '必须填写“权限名称”',
        'display_name.required' => '必须填写“权限显示名称”。',
        'description.max' => '“权限说明”不能大于100个字。',
    ];

    public function authorize()
    {
        return true;
    }
}