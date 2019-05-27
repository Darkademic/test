<?php
namespace Darkademic\Test;

/**
 * A nonsensical class for testing.
 */
class Greetings
{
    /**
     * Say hello to someone.
     *
     * @param  string  $name  Name.
     * @param  string  $lang  Language code.
     */
    public function hello($name, $lang = 'en')
    {
        switch ($lang) {

            case 'ru':
                $hello = 'Привет';
                break;

            case 'cn':
                $hello = '你好';
                break;

            default:
                $hello = 'Hello';
        }

        echo $hello . ' ' . $name . '!';
    }
}
