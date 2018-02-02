<?php

namespace App\Tourn;

class TournPageTemplate
{
    public function render(Tourn $tourn)
    {
        $html = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{$tourn->title}</title>
</head>
<body>
Tourn 
</body>
</html>
EOT;
        return $html;
    }
}