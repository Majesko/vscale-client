<?php

namespace Vscale\Entities;

class Image extends Entity
{
    /** @var  int */
    protected $rplans;

    /** @var  bool */
    protected $active;

    /** @var  int */
    protected $size;

    /** @var  array */
    protected $locations;

    /** @var  string */
    protected $id;

    /** @var  string */
    protected $description;
}