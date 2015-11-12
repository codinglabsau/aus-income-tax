<?php
namespace ABWeb\IncomeTax\Source;

interface TaxTableSource
{
    public function coefficients(
        $amountBeforeTax = null,
        $type = 'standard',
        $scale = 2
    );

    public function determineScale(
        $tfnProvided = true,
        $foreignResident = false,
        $taxFreeThreshold = true,
        $seniorsOffset = false,
        $seniorOffsetType = null,
        $medicareLevyExemption = 'none',
        $helpDebt = false,
        $sfssDebt = false
    );
}
