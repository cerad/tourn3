<?php

namespace App\Controller;

use App\Tourn\Tourn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TournAction extends AbstractController
{
    public function __invoke(Tourn $tourn)
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

        return new Response($tourn->render());
    }
}