<?php

declare(strict_types=1);

interface AssemblerInterface {
    public function assemble(array $tokens): string;
}
