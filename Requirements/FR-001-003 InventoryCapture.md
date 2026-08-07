# FR-001-003 InventoryCapture: Estate Inventory and Beneficiary Capture

## Description
The system shall provide a form to capture a client's estate inventory (assets, liabilities)
and registered-account beneficiary designations, plus will and power of attorney status.

## Acceptance Criteria
1. Form captures total estate assets broken into: registered (RRSP/RRIF, TFSA, pension),
   non-registered investments, real estate, business interests, life insurance death
   benefit, other.
2. Form captures total liabilities: mortgages, lines of credit, other debts.
3. Form captures, per registered asset, a designated beneficiary name and a boolean
   "has designated beneficiary".
4. Form captures will status (exists Y/N), will date, executor name.
5. Form captures power of attorney status (exists Y/N) and POA date.
6. Form is keyed by `debtor_no` and persisted to `ksfii_estate_plan` and
   `ksfii_estate_beneficiary`.
7. Saving updates `updated_at`; creating sets `created_at`.

## Priority
High

## Status
Draft
