<?php

declare(strict_types=1);

namespace Test;

use Throwable;

class ClassRepresentation
{
    public function returnTypeSpacing(): int
    {
        return (int) 1;
    }

    public const TEST_VISIBILITY = 'public?';

    private function typeHintChecks(int $param, ?string $test = null): string
    {
        $a = (int) 1;
        $b = (int) $a;

        return (string) $b;
    }

    /**
     * @return int[]
     */
    public function arraySpacingAndComma(): array
    {
        $a = [ 1, 2 ];

        return [
            1,
            2,
            3,
            4,
            $a,
        ];
    }

    protected function handleException(Throwable $exception): void
    {
        $a = is_array($exception);
        $b = null;

        while ($a && $b) {
            echo 1;
        }
    }

    /**
     * Something?
     */
    protected function something(): void
    {
        $this->typeHintChecks(1, null);

        is_array(strtolower('string'), []);

        if (1 and 2 or 3) {
            return;
        }

        $a=1;
        $test = ("$a");
        echo 'a';

        return;

        echo 'hello' . 'we' . 'two';
    }
}
