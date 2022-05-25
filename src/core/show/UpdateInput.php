<?php
namespace app\src\core\show;

class UpdateInput
{
    public static function update()
    {
        echo <<<HTML
            <form action="" method="get">
                <input type="text">
            </form>
        HTML;
    }
}