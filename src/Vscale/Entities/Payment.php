<?php

namespace Vscale\Entities;

class Payment extends Entity
{
    /**
     * Дата совершения платежа в формате Unix timestamp
     * @var  string
     */
    protected $created;

    /**
     * Описание платежа
     * @var  string
     */
    protected $desc;

    /**
     * Идентификационный номер платежа
     * @var  int
     */
    protected $id;

    /**
     * Указывает, является ли платеж бонусным (1 — да, 2 — нет)
     * @var  int
     */
    protected $is_bonus;

    /**
     * Сумма платежа в копейках
     * @var  int
     */
    protected $price;

    /**
     * Статус оплаты (0 — не оплачен, 1 — условно оплачен, 2 — оплачен)
     * @var  int */
    protected $state;

    /**
     * Способ оплаты (170 — банковская карта, 200 — PayPal)
     * @var int
     */
    protected $type;
}