<?php

use App\Models\Investigation;
use App\Models\Laboratory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_collections', function (Blueprint $table) {
            $table->id();
            $table->string('sample_code')->nullable();
            $table->dateTime('collect_date')->nullable();
            $table->dateTime('dispatch_date')->nullable();
            $table->dateTime('cancel_dispatch_date')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreignIdFor(Investigation::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Laboratory::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('approve_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sample_collections');
    }
};
