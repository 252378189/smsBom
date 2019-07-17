<?php
/**
 * Created by PhpStorm.
 * User: ALG
 * Date: 2019/7/17
 * Time: 16:33
 */

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('index');
    }
}