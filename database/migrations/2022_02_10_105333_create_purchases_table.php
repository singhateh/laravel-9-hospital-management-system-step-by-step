<?php

use App\Models\MedicineCategory;
use App\Models\MedicineType;
use App\Models\Supplier;
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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->tinyInteger('type');

            // Medicines
            $table->string('medicine_generic_name')->nullable();
            $table->string('medicine_unit')->nullable();
            $table->string('medicine_strength')->nullable();
            $table->string('medicine_shelf')->nullable();

            // Quantity and Prices
            $table->unsignedBigInteger('quantity')->default(0);
            $table->string('quantity_type')->nullable();
            $table->integer('price')->nullable();
            $table->date('expiration_date')->nullable();
            $table->text('note')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);

            $table->foreignIdFor(MedicineType::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(MedicineCategory::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Supplier::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('purchases');
    }
};
