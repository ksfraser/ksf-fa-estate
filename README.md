# ksf_fa_estate

FrontAccounting **UI/hooks** for estate planning. Part of the `ksf_estate` /
`ksf_FA_estate` / `ksf_WP_estate` triple.

- Business logic lives in [`ksfraser/ksf-estate`](https://github.com/ksfraser/ksf_estate)
  (namespace `Ksfraser\Estate`).
- Shared calculation framework lives in `ksfraser/ksf-modules-common`.
- This repo provides the FA module hooks (`hooks.php`), the estate-planning
  admin page, and the FA-specific BABOK requirements (data capture form, summary
  report).

## Requirements (BABOK)

- `Requirements/FR-001-003 InventoryCapture.md` — Estate inventory & beneficiary data capture form
- `Requirements/FR-001-004 SummaryReport.md` — Estate plan summary & gap report

## Status

Scaffold. The estate engines exist and are tested in `ksf-estate`; this FA module
wires them into FrontAccounting (currently not deployed — see ksf-estate README).
