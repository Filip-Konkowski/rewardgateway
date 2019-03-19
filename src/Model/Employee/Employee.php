<?php
declare(strict_types=1);

namespace App\Model\Employee;

use App\Model\AutoSerializable;
use App\Model\Employee\Interfaces\Employee as EmployeeInterface;

class Employee implements EmployeeInterface
{
    use AutoSerializable;

    /**
     * @var EmployeeId
     */
    protected $id;

    /**
     * @var Company
     */
    protected $company;

    /**
     * @var Bio
     */
    protected $bio;

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var Avatar
     */
    protected $avatar;

    /**
     * Employee constructor.
     * @param EmployeeId $id
     * @param Company    $company
     * @param Bio        $bio
     * @param Name       $name
     * @param Title      $title
     * @param Avatar     $avatar
     */
    public function __construct(
        EmployeeId $id,
        Company $company,
        Bio $bio,
        Name $name,
        Title $title,
        Avatar $avatar
    ) {
        $this->id = $id;
        $this->company = $company;
        $this->bio = $bio;
        $this->name = $name;
        $this->title = $title;
        $this->avatar = $avatar;
    }

    /**
     * @param EmployeeId $id
     * @param Company    $company
     * @param Bio        $bio
     * @param Name       $name
     * @param Title      $title
     * @param Avatar     $avatar
     * @return Employee
     */
    public static function create(
        EmployeeId $id,
        Company $company,
        Bio $bio,
        Name $name,
        Title $title,
        Avatar $avatar
    ): Employee {
        return new self($id , $company, $bio, $name, $title, $avatar);
    }

    /**
     * @return EmployeeId
     */
    public function id(): EmployeeId
    {
        return $this->id;
    }

    /**
     * @return Company
     */
    public function company(): Company
    {
        return $this->company;
    }

    /**
     * @return Bio
     */
    public function bio(): Bio
    {
        return $this->bio;
    }

    /**
     * @return Name
     */
    public function name(): Name
    {
        return $this->name;
    }

    /**
     * @return Title
     */
    public function title(): Title
    {
        return $this->title;
    }

    /**
     * @return Avatar
     */
    public function avatar(): Avatar
    {
        return $this->avatar;
    }
}