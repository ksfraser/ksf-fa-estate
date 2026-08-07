<?php

/**
 * Estate Planning — FrontAccounting admin page.
 *
 * Captures a client's estate inventory + beneficiary designations, runs the
 * shared Ksfraser\Estate engines, and renders probate / estate-tax / gap results.
 * Business logic is invoked from the ksfraser/ksf-estate package.
 *
 * @package Ksfraser\FA\Estate
 */

define('KSFII_ESTATE', 1);
require_once __DIR__ . '/../../includes/syslogin.inc');
require_once __DIR__ . '/hooks.php';

page(_('Estate Planning') . ' - ' . $ SysPrefs... ); // placeholder title line

// --- Example: run a calculation using the shared business logic ---
// use Ksfraser\Estate\EstatePlanningEngine;
// use Ksfraser\Estate\EstateTaxCalculator;
// use Ksfraser\Estate\ProbateFeeLookup;
// use Ksfraser\Estate\BeneficiaryAnalysisEngine;
// use Ksfraser\Estate\WealthTransferOptimizer;
// use Ksfraser\ModulesCommon\CalculationContext;
//
// $pdo = new PDO($dsn, $user, $pass);
// $engine = new EstatePlanningEngine($pdo,
//     new WealthTransferOptimizer(new EstateTaxCalculator($pdo)),
//     new BeneficiaryAnalysisEngine(/* RelationshipAnalyzer */, /* RecommendationGenerator */));
// $result = $engine->calculate(new CalculationContext('estate_planning', $params));

start_page(_('Estate Planning'));
br();
Display::heading(_('Estate Planning'));
br();
// TODO: render the inventory capture form (FR-001-003 InventoryCapture) and summary report (FR-001-004 SummaryReport).
echo '<p>' . _('Estate planning UI — see Requirements/FR-001-003 InventoryCapture.md and FR-001-004 SummaryReport.md.') . '</p>';
end_page();
