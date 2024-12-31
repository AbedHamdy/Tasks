<?php 

    require_once ("../helpers/file_handling.php");
    function AddEmployee($filePath,$employee)
    {
        $employees = getFileContent($filePath);
        $employees[] = $employee;
        putFileContent($filePath , $employees);
        return "success add";
    }

    function listEmployees($filePath)
    {
        return getFileContent($filePath);
    }





















?>