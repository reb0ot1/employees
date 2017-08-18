<?php

namespace Employees\Controllers;

use Employees\Services\EmployeesServiceInterface;

class EmployeesController
{

    private $employeeService;

    public function __construct(EmployeesServiceInterface $employeesService)
    {
        $this->employeeService = $employeesService;
    }

    public function list()
    {
        echo(json_encode($this->employeeService->getList()));
    }

}