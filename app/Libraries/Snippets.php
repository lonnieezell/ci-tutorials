<?php

namespace App\Libraries;

use CodeIgniter\View\ViewDecoratorInterface;

class Snippets implements ViewDecoratorInterface
{
    public static function decorate(string $html): string
    {
        $snippets = [
            '{{ adjective }}' => 'daily',
            '{{ foods-1 }}' => 'jelly beans',
            '{{ verb }}' => 'comment',
            '{{ saying }}' => 'Do not eat yellow snow',
            '{{ noun }}' => 'ladder',
            '{{ foods-2 }}' => 'tamales',
            '{{ color }}' => 'teal',
            '{{ ride-in }}' => 'submarine',
            '{{ animal }}' => 'ant-eater',
            '{{ person }}' => 'Mr Magoo'
        ];

        return strtr($html, $snippets);
    }
}
