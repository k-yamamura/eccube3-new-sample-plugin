<?php

/*
 * This file is part of the GiftWrapping
 *
 * Copyright (C) 2016 k-yamamura
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GiftWrapping;

use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;

class GiftWrappingEvent
{

    /** @var  \Eccube\Application $app */
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function onShoppingIndexInitialize(EventArgs $event)
    {

        // フォームの追加
        // FormBuilderの取得
        $builder = $event->getArgument('builder');
        // 項目の追加
        $builder->add('gift_wrapping', 'choice', array(
            'choices' => array(
                '1' => 'のしのようなもの',
                '2' => 'リボン',
                '3' => '紙包み',
            ),
            'expanded' => false,
            'multiple' => false,
            'required' => false,
            'empty_value' => 'ラッピングなし',
            'mapped' => false,
        ));
    }

    public function onShoppingIndexRender(TemplateEvent $event)
    {

        $Wrapping = $this->app['eccube.plugin.repository.wrapping']->find(1);

        if (!$Wrapping || !$Wrapping->getIsWrapping()) {
            return;
        }

        $parameters = $event->getParameters();

        $form = $parameters['form'];

        $parts = $this->app->renderView('GiftWrapping/Resource/template/wrapping_parts.twig', array(
            'form' => $form,
        ));

        // twigコードに挿入
        // 要素箇所の取得
        $search = $Wrapping->getElement();
        $replace = $parts.$search;
        $source = str_replace($search, $replace, $event->getSource());
        $event->setSource($source);

    }

}
