<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEventTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('eventos');
        $table->addColumn('evento', 'string')
            ->addColumn('descricao', 'string')
            ->addColumn('local', 'string')
            ->addColumn('data', 'date')
            ->addColumn('horario', 'time')
            ->addColumn('imagem', 'string')
            ->create();
    }
}
