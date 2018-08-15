<?php

namespace MaTrading\Containers;

use Plenty\Plugin\Templates\Twig;

class MaTradingContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('MaTrading::Stylesheet');
    }
}