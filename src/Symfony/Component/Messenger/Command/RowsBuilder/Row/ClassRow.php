<?php

namespace Symfony\Component\Messenger\Command\RowsBuilder\Row;

use Symfony\Component\Messenger\Command\RowsBuilder\RowInterface;
use Symfony\Component\Messenger\Envelope;

final class ClassRow implements RowInterface
{
    public function buildRow(Envelope $envelope): array
    {
        return ['Class', \get_class($envelope->getMessage())];
    }

    public function supports(Envelope $envelope): bool
    {
        return true;
    }
}
