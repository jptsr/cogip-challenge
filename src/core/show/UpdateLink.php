<?php
namespace app\src\core\show;

class UpdateLink
{
    public static function update(string $page_name, int $id, string $to_modify)
    {
        echo <<<HTML
            <a href="/modification-$page_name-id=$id">Modifier $to_modify</a>
        HTML;
    }
}