<?php

namespace App\Tourn;


class Tourn
{
    public $title = 'base';

    public function render()
    {
        $pageTemplate = new TournPageTemplate();

        return $pageTemplate->render($this);
    }
}
