<?php

function calculateGrossSalary($basicSalary, $allowance)
{
    $gross = $basicSalary + $allowance;
    return $gross;
}


function calculateBonus($basicSalary)
{
    if ($basicSalary >= 1000) {
        $bonus = $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        $bonus = $basicSalary * 0.05;
    } else {
        $bonus = 0;
    }
    return $bonus;
}

//    Below 3 years
function calculateServiceBenefit($basicSalary, $years)
{
    if ($years >= 5) {
        $benefit = $basicSalary * 0.08;
    } elseif ($years >= 3) {
        $benefit = $basicSalary * 0.05;
    } else {
        $benefit = 0;
    }
    return $benefit;
}

function calculateEmploymentAllowance($basicSalary, $employmentType)
{
    if ($employmentType == "Full-Time") {
        $empAllowance = $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        $empAllowance = $basicSalary * 0.03;
    } else {
        $empAllowance = 0;
    }
    return $empAllowance;
}

function calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance)
{
    $total = $bonus + $serviceBenefit + $employmentAllowance;
    return $total;
}

function calculateNetSalary($grossSalary, $totalBenefits, $deduction)
{
    $net = $grossSalary + $totalBenefits - $deduction;
    return $net;
}


function checkSalaryStatus($netSalary)
{
    if ($netSalary >= 1500) {
        $status = "High Salary";
    } elseif ($netSalary >= 800) {
        $status = "Medium Salary";
    } else {
        $status = "Low Salary";
    }
    return $status;
}


function calculateAnnualSalary($netSalary, $months = 12)
{
    $annual = $netSalary * $months;
    return $annual;
}
?>