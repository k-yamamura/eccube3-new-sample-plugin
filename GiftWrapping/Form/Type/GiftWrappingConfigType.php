<?php

/*
 * This file is part of the GiftWrapping
 *
 * Copyright (C) 2016 k-yamamura
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GiftWrapping\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class GiftWrappingConfigType extends AbstractType
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user_id', 'text', array(
                'label' => 'ユーザID',
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ))
            ->add('user_password', 'text', array(
                'label' => 'パスワード',
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ))
            ->add('is_wrapping', 'checkbox', array(
                'label' => 'ラッピング項目の使用',
                'required' => false,
            ))
            ->add('element', 'text', array(
                'label' => '追加要素',
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Plugin\GiftWrapping\Entity\Wrapping',
        ));
    }

    public function getName()
    {
        return 'giftwrapping_config';
    }
}

