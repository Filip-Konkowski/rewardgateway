<?php
declare(strict_types=1);

namespace App\Model\Employee\Interfaces;


use App\Model\Employee\Avatar;
use App\Model\Employee\Bio;
use App\Model\Employee\Company;
use App\Model\Employee\EmployeeId;
use App\Model\Employee\Name;
use App\Model\Employee\Title;

interface Employee
{
    /**
     * @return EmployeeId
     */
    public function id(): EmployeeId;

    /**
     * @return Company
     */
    public function company(): Company;

    /**
     * @return Bio
     */
    public function bio(): Bio;

    /**
     * @return Name
     */
    public function name(): Name;

    /**
     * @return Title
     */
    public function title(): Title;

    /**
     * @return Avatar
     */
    public function avatar(): Avatar;
}