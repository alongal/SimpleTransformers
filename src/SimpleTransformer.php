<?php

namespace Alongal\SimpleTransformers;

class SimpleTransformer
{
    protected $options;

    private function __construct($options)
    {
        $this->options = $options;
    }

    static function transform($items, $options = [])
    {
        $static = new static($options);

        return $static->handleTransform($items);
    }

    protected function handleTransform($items)
    {
    }
}