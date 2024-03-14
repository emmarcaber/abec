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
        Schema::table('evaluations', function (Blueprint $table) {
            $table->unsignedTinyInteger('knowledge_expertise')->after('user_id');
            $table->unsignedTinyInteger('leadership_abilities')->after('knowledge_expertise');
            $table->unsignedTinyInteger('teamwork_collaboration')->after('leadership_abilities');
            $table->unsignedTinyInteger('work_ethic_dedication')->after('teamwork_collaboration');
            $table->unsignedTinyInteger('overall_contribution_to_team')->after('work_ethic_dedication');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
