<?php

namespace Symfony\Component\Messenger\Command\RowsBuilder;

use Symfony\Component\Messenger\Envelope;

final class RowsBuilder
{
    /**
     * @var RowInterface[]
     */
    private $builders;

    public function __construct(RowInterface ...$builders)
    {
        $this->builders = $builders;
    }

    public function build(Envelope $envelope): array
    {
        $rows = [];
        foreach ($this->builders as $builder) {
            if (true === $builder->supports($envelope)) {
                $rows[] = $builder->buildRow($envelope);
            }
        }

        return $rows;
    }
}
