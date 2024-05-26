<?php

class KPICalculator
{

    private  function SavingsRate($TMincome, $TMsavings)
    {
        return ($TMsavings/$TMincome)*100;
    }
    private  function DTI($TMdebtpay, $TMincome)
    {
        return ($TMdebtpay/$TMincome)*100;
    } //debt to income ratio
    private  function netWorth($Tassets, $Tliabilities)
    {
        return (($Tassets - $Tliabilities) / $Tassets) * 100;    }
    private  function emergencyFundAdequacy($TMlivingExpenses, $AmountSavedEmrg)
    {
        return ($AmountSavedEmrg/$TMlivingExpenses)*100;
    }
    private  function Retirement($TAcontributions, $TAincome)
    {
        return ($TAcontributions/$TAincome) * 100;
    }


    public function OverallIndex($TMincome, $TMsavings, $TMdebtpay, $Tassets, $Tliabilities, $TMlivingExpenses, $AmountSavedEmrg, $TMcontributions) {
        
        $savingsRate = $this->SavingsRate($TMincome, $TMsavings);
        $tdi = $this->DTI($TMdebtpay, $TMincome);
        $netWorth = $this->netWorth($Tassets, $Tliabilities);
        $emergencyFundAdequacy = $this->emergencyFundAdequacy($TMlivingExpenses, $AmountSavedEmrg);
        $retirementSavingsRate = $this->Retirement($TMcontributions, $TMincome);
        
        $oi = ($savingsRate + $tdi + $emergencyFundAdequacy + $retirementSavingsRate);   
        return $oi;
    }
}

// Adjusted sample data for testing KPICalculator
$monthlyIncome = 5000; // Monthly income
$monthlySavings = 0; // Monthly savings
$monthlyDebtPayments = 4000; // Monthly debt payments
$totalAssets = 16000; // Total assets
$totalLiabilities = 50000; // Total liabilities
$monthlyLivingExpenses = 2000; // Monthly living expenses (adjusted to a more realistic value)
$emergencyFund = 2000; // Emergency fund
$annualRetirementContributions = 0; // Annual retirement contributions

$calculator = new KPICalculator();
$overallIndex = $calculator->OverallIndex(
    $monthlyIncome,
    $monthlySavings,
    $monthlyDebtPayments,
    $totalAssets,
    $totalLiabilities,
    $monthlyLivingExpenses,
    $emergencyFund,
    $annualRetirementContributions
);

echo "Overall Index: " . $overallIndex . "%";