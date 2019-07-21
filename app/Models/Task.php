<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * 置操作表
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * 字段可写名单
     *
     * @var array
     */
    protected $fillable = [
        'id', //主键Id
        'phone', //unique 受害者手机号码
        'count', //default(0) 发送短信次数,
        'is_end', //default(0) 是否结束对他的短信发送 0是没有  1是已经结束
    ];

    /**
     * 未结束发送短信
     *
     * @var int
     */
    const NOT=0;

    /**
     * 结束发送短信
     *
     * @var int
     */
    const YES = 1;
}
