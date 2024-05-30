<?php

class KPICalculator
{
    public  function SavingsRate($TMincome, $TMsavings)
    {
        return ($TMsavings/$TMincome)*100;
    }
    public  function DTI($TMdebtpay, $TMincome)
    {
        return ($TMdebtpay/$TMincome)*100;
    } //debt to income ratio
    public  function netWorth($Tassets, $Tliabilities)
    {
        return (($Tassets - $Tliabilities) / $Tassets) * 100;    }
    public  function emergencyFundAdequacy($TMlivingExpenses, $AmountSavedEmrg)
    {
        return ($AmountSavedEmrg/$TMlivingExpenses)*100;
    }
    public  function Retirement($TAcontributions, $TAincome)
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