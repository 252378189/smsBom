<?php


namespace App\Service\SMS\Driver;


use App\Service\SMS\Contract\SMSInterface;

/**
 * 盛趣游戏
 *
 * Class SQYX
 * @package App\Service\SMS\Driver
 * @registerPage http://register.sdo.com/register/index
 */
class SQYX implements SMSInterface
{
    public function send(string $phone)
    {
        // TODO: Implement send() method.
    }
}