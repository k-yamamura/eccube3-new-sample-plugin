<?php

/*
 * This file is part of the GiftWrapping
 *
 * Copyright (C) 2016 k-yamamura
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GiftWrapping\Controller;

use Eccube\Application;
use Symfony\Component\HttpFoundation\Request;

class GiftWrappingController
{

    /**
     * GiftWrapping画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        // add code...

        return $app->render('GiftWrapping/Resource/template/index.twig', array(
            // add parameter...
        ));
    }

}
