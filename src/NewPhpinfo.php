<?php
namespace Vladamba\NewPhpinfo;
class NewPhpinfo{
    public static function show(): void {
        echo 'Hello Composer!';
        phpinfo();
    }
}