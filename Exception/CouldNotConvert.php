<?php

namespace Spatie\Image\Exceptions;

class CouldNotConvert extends \Exception
{
    public static function unknownOperation(string $operationName)
    {
        return new static("Can not convert image. Unknown operation `{$operationName}` used");
    }
}
