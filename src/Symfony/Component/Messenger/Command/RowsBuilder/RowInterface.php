<?php

namespace Symfony\Component\Messenger\Command\RowsBuilder;

use Symfony\Component\Messenger\Envelope;

interface RowInterface
{
    public function buildRow(Envelope $envelope): array;

    public function supports(Envelope $envelope): bool;
}
