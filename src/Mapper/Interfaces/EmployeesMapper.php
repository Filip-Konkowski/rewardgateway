<?php
declare(strict_types=1);

namespace App\Mapper\Interfaces;

use Tightenco\Collect\Support\Collection;

interface EmployeesMapper
{
    /**
     * @param array $data
     * @return Collection
     */
    public static function mapToCollection(array $data): Collection;
}