<?php
/**
 * Created by PhpStorm.
 * User: ALG
 * Date: 2019/7/17
 * Time: 16:33
 */

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * 首页
 *
 * Class IndexController
 *
 * @category IndexController
 * @package  App\Http\Controllers
 * @author   ALG <513051043@qq.com>
 * @license  四川猪太帅科技公司 http://www.51zts.com
 * @link     接口文档链接
 */
class IndexController
{
    /**
     * 首页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Task::query()
            ->limit(10)
            ->orderByDesc('created_at')
            ->get()
            ->toArray();
        return view('index', compact('tasks'));
    }

    /**
     * 投递最新任务
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'phone'=>'required|numeric|regex:/^1[345789][0-9]{9}$/',
        ],[
            'phone.required'=>'电话不能为空',
            'phone.numeric'=>'电话需要为全数字',
            'phone.regex'=>'电话格式不正确',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        //认证后的字段值数组
        $fieldArray = $validator->validated();
        Task::query()->create($fieldArray);
        return redirect('/')->with('success', '投递成功');
    }
}