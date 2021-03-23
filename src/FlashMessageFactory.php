<?php


namespace PcWeb\LaravelFlashMessages;


use Illuminate\Session\Store;
use Illuminate\Support\Facades\Lang;

class FlashMessageFactory
{
    const SUCCESS = "success";
    const WARNING = "warning";
    const ERROR = "danger";
    const DANGER = "danger";
    const INFO = "info";
    private static $sessionKey = "flashMessages";
    protected Store $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }


    protected function submit($message, $title, $type)
    {
        $messages = $this->session->has(self::$sessionKey) ? json_decode($this->session->get(self::$sessionKey)) : [];
        $messages[] = [
            'message' => $message,
            'title' => $title,
            'type' => $type
        ];

        $this->session->flash(self::$sessionKey, json_encode($messages));
    }

    protected static function getDefaultTitle(string $type)
    {
        switch ($type) {
            case self::SUCCESS:
                return Lang::get('Erfolg');
            case self::DANGER:
                return Lang::get("Fehler");
            case self::WARNING:
                return Lang::get("Achtung");
            case self::INFO:
            default:
                return Lang::get("Info");
        }
    }

    public function message(string $message, ?string $title = null, $type = "info")
    {
        $this->submit(
            $message,
            $title ?? self::getDefaultTitle($type),
            $type
        );
    }

    public function success(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::SUCCESS);
    }


    public function warning(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::WARNING);
    }

    public function warn(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::WARNING);
    }

    public function error(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::ERROR);
    }


    public function danger(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::DANGER);
    }

    public function info(string $message, ?string $title = null)
    {
        $this->message($message, $title, self::INFO);
    }

}
