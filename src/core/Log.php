<?php
namespace Core;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Log Class
 *
 * @author JasyDong <jasydong@qq.com>
 */
class Log {
    /**
     * 添加日志记录
     */
    public static function info($message) {
        if (!empty($message)) {
            $log = new Logger('log');
            $date = date("Y-m-d", time());
            $log->pushHandler(new StreamHandler("data/logs/{$date}.log", Logger::INFO));

            // 添加日志记录
            $log->addRecord(Logger::INFO, $message);
        }
    }
}
