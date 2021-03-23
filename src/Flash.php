<?php


namespace PcWeb\LaravelFlashMessages;


use Illuminate\Support\Facades\Facade;

/**
 * Class Flash
 * @package PcWeb\LaravelFlashMessages
 *
 * @method static void message(string $message, ?string $title = null, string $type = 'info')
 * @method static void success(string $message, ?string $title = null)
 * @method static void warning(string $message, ?string $title = null)
 * @method static void warn(string $message, ?string $title = null)
 * @method static void danger(string $message, ?string $title = null)
 * @method static void error(string $message, ?string $title = null)
 * @method static void info(string $message, ?string $title = null)
 * @see FlashMessageFactory
 */
class Flash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }

}
