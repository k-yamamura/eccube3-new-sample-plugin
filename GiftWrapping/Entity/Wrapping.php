<?php

/*
 * This file is part of the GiftWrapping
 *
 * Copyright (C) 2016 k-yamamura
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\GiftWrapping\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wrapping
 */
class Wrapping extends \Eccube\Entity\AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user_id;

    /**
     * @var string
     */
    private $user_password;

    /**
     * @var boolean
     */
    private $is_wrapping;

    /**
     * @var string
     */
    private $element;

    /**
     * Set id
     *
     * @param integer $id
     * @return Wrapping
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user_id
     *
     * @param string $userId
     * @return Wrapping
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set user_password
     *
     * @param string $userPassword
     * @return Wrapping
     */
    public function setUserPassword($userPassword)
    {
        $this->user_password = $userPassword;

        return $this;
    }

    /**
     * Get user_password
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * Set is_wrapping
     *
     * @param boolean $isWrapping
     * @return Wrapping
     */
    public function setIsWrapping($isWrapping)
    {
        $this->is_wrapping = $isWrapping;

        return $this;
    }

    /**
     * Get is_wrapping
     *
     * @return boolean
     */
    public function getIsWrapping()
    {
        return $this->is_wrapping;
    }

    /**
     * Set element
     *
     * @param string $element
     * @return Wrapping
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

}
