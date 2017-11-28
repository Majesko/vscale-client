<?php

namespace Vscale\Entities;

class Location extends Entity
{
    /** @var  bool */
    protected $active;

    /** @var  bool */
    protected $private_networking;

    /** @var  array */
    protected $image;

    /** @var  string */
    protected $id;

    /** @var  string */
    protected $description;

    /** @var  array */
    protected $rplans;
}