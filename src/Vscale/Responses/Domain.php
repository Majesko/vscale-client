<?php

/**
 * Class Domain
 *
 */

class Domain
{
    /**
     * ID домена
     * @var integer id
     */
    protected $id;

    /**
     * Имя домена
     * @var string name
     */
    protected $name;

    /**
     * Список тегов домена
     * @var array tags
     */
    protected $tags;

    /**
     * Время создания домена (unix timestamp)
     * @var integer create_date
     */
    protected $create_date;

    /**
     * Время последнего обновления записей домена (unix timestamp)
     * @var integer change_date
     */
    protected $change_date;

    /**
     * ID пользователя
     * @var integer user_id
     */
    protected $user_id;

    public function __construct(array $params)
    {
        foreach ($params as $key => $param) {
            if (property_exists($this, $key)) {
                $this->$key = $param;
            }
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}