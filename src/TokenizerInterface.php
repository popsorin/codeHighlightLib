<?php

declare(strict_types=1);

interface TokenizerInterface {
    public function tokenize(string $in): array;
}
