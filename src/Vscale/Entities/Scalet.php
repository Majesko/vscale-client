<?php

namespace Vscale\Entities;

use Vscale\Entities\Address;

class Scalet extends Entity
{
    /**
     * Имя хоста
     * @var string
     */
    protected $hostname;

    /**
     * Показывает, заблокирован сервер или нет
     * (true — заблокирован; false — не заблокирован, и с ним можно производить действия)
     * @var boolean
     */
    protected $locked;

    /**
     * Дата-центр, в котором установлен сервер
     * @var string
     */
    protected $location;

    /**
     * Установленный тарифный план
     * @var string
     */
    protected $rplan;

    /**
     * Имя сервера
     * @var string
     */
    protected $name;
    /**
     * Состояние сервера (true — работает, false — не работает)
     * @var boolean
     */
    protected $active;

    /**
     * Подключенные к серверу SSH-ключи
     * @var array
     */
    protected $keys;

    /**
     * Адрес, по которому сервер доступен из внешней сети
     * @var Address
     */
    protected $public_address;

    /**
     * Статус сервера (started — запущен, stopped — остановлен, billing — заблокирован (недостаточно средств))
     * @var string
     */
    protected $status;

    /**
     * Образ ОС на сервере
     * @var string
     */
    protected $made_from;

    /**
     * Идентификационный номер сервера
     * @var int
     */
    protected $ctid;

    /**
     * Адрес сервера в приватной сети
     * @var Address
     */
    protected $private_address;

    public function __construct(array $params)
    {
        $params['public_address'] = new Address($params['public_address']);
        $params['private_address'] = new Address($params['private_address']);
        parent::__construct($params);
    }
}