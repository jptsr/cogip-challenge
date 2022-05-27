<?php
namespace app\src\core\show;

class UpdateLink
{
    public static function update(string $page_name, int $id)
    {
        echo <<<HTML
            <a href="/modification-$page_name-id=$id">Modifier facture</a>
        HTML;
    }
}