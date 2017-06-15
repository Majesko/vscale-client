<?php

namespace Vscale;

trait Helpers
{
    public function array_get(string $el, array $arr)
    {
        return array_key_exists($el, $arr) ? $arr[$el] : null;
    }
}