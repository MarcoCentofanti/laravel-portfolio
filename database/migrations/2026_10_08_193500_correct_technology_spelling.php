<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('tecnologies') && ! Schema::hasTable('technologies')) {
            Schema::rename('tecnologies', 'technologies');
        }

        if (Schema::hasTable('project_tecnology') && ! Schema::hasTable('project_technology')) {
            Schema::rename('project_tecnology', 'project_technology');
        }

        if (
            Schema::hasTable('project_technology')
            && Schema::hasColumn('project_technology', 'tecnology_id')
            && ! Schema::hasColumn('project_technology', 'technology_id')
        ) {
            Schema::table('project_technology', function (Blueprint $table) {
                $table->renameColumn('tecnology_id', 'technology_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (
            Schema::hasTable('project_technology')
            && Schema::hasColumn('project_technology', 'technology_id')
            && ! Schema::hasColumn('project_technology', 'tecnology_id')
        ) {
            Schema::table('project_technology', function (Blueprint $table) {
                $table->renameColumn('technology_id', 'tecnology_id');
            });
        }

        if (Schema::hasTable('project_technology') && ! Schema::hasTable('project_tecnology')) {
            Schema::rename('project_technology', 'project_tecnology');
        }

        if (Schema::hasTable('technologies') && ! Schema::hasTable('tecnologies')) {
            Schema::rename('technologies', 'tecnologies');
        }
    }
};
