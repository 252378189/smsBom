<?php


namespace App\Service\SMS\Contract;

/**
 * 短信发送接口
 *
 * Interface SMSInterface
 * @package App\Service\SMS\Contract
 */
interface SMSInterface
{
    /**
     * 发送短信
     *
     * @param string $phone
     * @return mixed
     */
    public function send(string $phone);
}