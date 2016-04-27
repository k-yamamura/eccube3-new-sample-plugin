<?php

/*
 * This file is part of the GiftWrapping
 *
 * Copyright (C) 2016 k-yamamura
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GiftWrapping\Service;

use Eccube\Application;

class GiftWrappingService
{
    /** @var \Eccube\Application */
    public $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

}
