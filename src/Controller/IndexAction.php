<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexAction extends AbstractController
{
    public function __invoke()
    {
        $html = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tourn 3</title>
</head>
<body>
Tourn 3
</body>
</html>
EOT;

        return new Response($html);
    }
}