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
use Plugin\GiftWrapping\Entity\Wrapping;
use Symfony\Component\HttpFoundation\Request;

class ConfigController
{

    /**
     * GiftWrapping用設定画面
     *
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Application $app, Request $request)
    {

        $Wrapping = $app['eccube.plugin.repository.wrapping']->find(1);

        if (!$Wrapping) {
            $Wrapping = new Wrapping();
        }

        $form = $app['form.factory']->createBuilder('giftwrapping_config', $Wrapping)->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $Wrapping = $form->getData();
            // IDは1固定
            $Wrapping->setId(1);
            $app['orm.em']->persist($Wrapping);
            $app['orm.em']->flush();
            $app->addSuccess('admin.gift_wrapping.save.complete', 'admin');
        }

        return $app->render('GiftWrapping/Resource/template/admin/config.twig', array(
            'form' => $form->createView(),
            'Wrapping' => $Wrapping,
        ));
    }


}
