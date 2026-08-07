<?php

/**
 * ksf_fa_estate — FrontAccounting hooks for the Estate Planning module.
 *
 * Wires the shared business logic (Ksfraser\Estate) into FrontAccounting:
 * installs the estate-plan table, registers the menu, and exposes the
 * calculation entry point. The calculation math itself lives in the
 * ksfraser/ksf-estate package — this repo only provides the FA integration.
 *
 * @package Ksfraser\FA\Estate
 */

class KSF_FA_Estate_Hooks
{
    /** @var string Module directory name */
    private string $module = 'ksf_fa_estate';

    public function install(): bool
    {
        $this->create_database_tables();
        $this->set_default_preferences();
        return true;
    }

    public function activate(): bool
    {
        $this->register_hooks();
        return true;
    }

    public function deactivate(): bool
    {
        // FA has no built-in unregister; hooks are re-registered on activate.
        return true;
    }

    private function create_database_tables(): void
    {
        $company = get_company_coy();
        $table = '0_ksfii_estate_plan';
        $sql = "CREATE TABLE IF NOT EXISTS `{$table}` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `debtor_no` INT(11) NOT NULL,
            `plan_name` VARCHAR(120) NOT NULL DEFAULT 'Estate Plan',
            `has_will` TINYINT(1) NOT NULL DEFAULT 0,
            `has_poa` TINYINT(1) NOT NULL DEFAULT 0,
            `province` VARCHAR(2) NOT NULL DEFAULT 'ON',
            `total_assets` DECIMAL(14,2) DEFAULT 0,
            `total_liabilities` DECIMAL(14,2) DEFAULT 0,
            `estate_tax_estimate` DECIMAL(14,2) DEFAULT 0,
            `probate_fee_estimate` DECIMAL(14,2) DEFAULT 0,
            `notes` TEXT,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `debtor_no` (`debtor_no`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        db_query($sql, "Failed to create estate plan table");
    }

    private function set_default_preferences(): void
    {
        // Reserved for future module preferences.
    }

    private function register_hooks(): void
    {
        // Menu registration is handled by FA's module installer via
        // $this->module/menu entries; see estate_planning.php for the page.
        add_access_extensions();
    }
}

// Instantiate so FA's module loader can call install()/activate().
$ksf_fa_estate_hooks = new KSF_FA_Estate_Hooks();
