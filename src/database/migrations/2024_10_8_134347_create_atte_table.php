<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAtteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE OR REPLACE VIEW atte_table AS SELECT
                u.id,
                u.name,
                t.start-time,
                t.end-time,
                SEC_TO_TIME(COALESCE(SUM(TIME_TO_SEC(TIMEDIFF(r.end-time,r.start-time))),0)) AS total_rest,
                TIMEDIFF(t.end,t.start) AS total_work,
                u.status
            FROM
                time u
            JOIN
                time t ON u.id = t.user_id
            LEFT JOIN
                rest r ON t.id = r.time_id
            GROUP BY
                u.id,
                u.name,
                t.start-time,
                t.end-time,
                u.status
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS atte_table');
    }
}
