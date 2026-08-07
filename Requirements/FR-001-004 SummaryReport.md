# FR-001-004 SummaryReport: Estate Plan Summary and Gap Reporting

## Description
The system shall produce a consolidated estate plan summary combining inventory, probate
estimate, final-return estimate, and will/POA status, and shall flag planning gaps.

## Acceptance Criteria
1. Summary shows net estate (assets − liabilities), probate fee estimate, final-return tax
   estimate, and estimated estate left to beneficiaries.
2. Gap flags include: no will, stale will (>5 years), no power of attorney, registered
   asset with no designated beneficiary, estate heavily concentrated in registered assets
   with no contingent plan.
3. Summary is printable / exportable to PDF (reuse `toPdfHtml` pattern from retirement).
4. Gaps are presented as actionable advisor checklist items.

## Priority
Medium

## Status
Draft
