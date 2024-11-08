<?php
// $year = '2024';
// $customDate = '2024-06-26';
// $currentDate = date('Y-m-d', strtotime($customDate));
// $currentDayOfWeek = date('W', strtotime($customDate));

//CASH ADVANCE LOGIC
$nl = '<br>';
$employee_id = 1;
$cash_amount = 2000;
$weeks_to_pay = 2;
$weekly_deduction = number_format(2000 / $weeks_to_pay, 2);
$year = '2024';
$CA_date = '2024-09-13';
$currentDate = date('Y-m-d', strtotime($CA_date));
$currentDayOfWeek = date('W', strtotime($CA_date));
$currentYear = date('Y', strtotime($CA_date));
$date = new DateTime('January 1 2024');
// Add 25 weeks (since the first week starts from 1)
$currentWeek = ($currentDayOfWeek - 1) + $weeks_to_pay;
$date->modify("+$currentWeek weeks");
// Adjust to the nearest Sunday
$date->modify('Sunday this week');
// Output the date in the desired format
$payoff_date = $date->format('Y-m-d');
$payoff_week = $date->format('W');

println("employee_id: $employee_id");
println("amount: $cash_amount");
println("date: $CA_date");
println("weeks_to_pay: $weeks_to_pay");
println("weekly_deduction: $weekly_deduction");
println("payoff_date: $payoff_date");
println("payoff_week: $payoff_week");


function println($text)
{
    echo $text . "<br>";
}