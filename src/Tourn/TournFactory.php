<?php

namespace App\Tourn;

use Symfony\Component\HttpFoundation\RequestStack;

class TournFactory
{
    /** @var  Tourn */
    private $tourn;

    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    public function get() : Tourn
    {
        if ($this->tourn)
            return $this->tourn;

        $request = $this->requestStack->getMasterRequest();
        $slug = $request->attributes->get('tournSlug');

        $tourn = null;

        switch($slug) {
            case 'noc2017':
                $tourn = new \App\Tourn\tourns\nocs\noc2017\Tourn;
                break;
            case 'noc2018':
                $tourn = new \App\Tourn\tourns\nocs\noc2018\Tourn;
                break;

            default:
                $tourn = new Tourn();
        }
        return $this->tourn = $tourn;
    }
}