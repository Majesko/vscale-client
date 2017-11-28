<?php

namespace Vscale\Entities;

class Balance extends Entity
{
    /**
     * @var int
     */
    protected $balance;

    /**
     * @var int
     */
    protected $bonus;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $summ;

    /**
     * @var int
     */
    protected $unpaid;

    /**
     * @var int
     */
    protected $user_id;
}