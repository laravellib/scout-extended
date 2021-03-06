<?php

namespace Tests\Features\Fixtures;

use codicastudio\ScoutExtended\Contracts\TransformerContract;

class ConvertToFoo implements TransformerContract
{
    public function transform($searchable, array $array): array
    {
        foreach ($array as $key => $value) {
            $array[$key] = 'Foo';
        }

        return $array;
    }
}
