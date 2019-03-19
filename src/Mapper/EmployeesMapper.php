<?php
declare(strict_types=1);

namespace App\Mapper;

use App\Mapper\Interfaces\EmployeesMapper as EmployeesFormatterInterface;
use App\Model\Employee\Avatar;
use App\Model\Employee\Bio;
use App\Model\Employee\Company;
use App\Model\Employee\Employee;
use App\Model\Employee\EmployeeId;
use App\Model\Employee\Name;
use App\Model\Employee\Title;
use Tightenco\Collect\Support\Collection;

class EmployeesMapper implements EmployeesFormatterInterface
{
    /**
     * @param array $data
     * @return Collection
     */
    public static function mapToCollection(array $data): Collection
    {
        return collect($data)->map(function ($item) {

            //todo implement AvatarChecker and filter out "http://httpstat.us/503" or "0" items

            return Employee::create(
                EmployeeId::fromString($item["uuid"]),
                Company::fromString($item["company"]),
                Bio::fromString(strip_tags($item["bio"])),
                Name::fromString($item["name"]),
                Title::fromString($item["title"]),
                Avatar::fromString($item["avatar"])
            );
        });
    }
}