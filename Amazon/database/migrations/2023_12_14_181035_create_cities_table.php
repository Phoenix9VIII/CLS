<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //php artisan migrate
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); //-name->id -BigInteger -Primarykey -AutoIncrement -Unsigned
            $table->string('name', 50);
            $table->timestamps(); // created_at / updated_at - timestamp - default->null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //php artisan migrate:rollback //if you need to run it type rollback
    {
        Schema::dropIfExists('cities');
    }
};
