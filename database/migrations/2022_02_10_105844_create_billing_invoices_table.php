<?php

use App\Models\Patient;
use App\Models\PatientVisit;
use App\Models\DoctorOrder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->integer('total')->default(0);
            $table->integer('pending_amount')->default(0);
            $table->integer('payment_amount')->default(0);
            $table->tinyInteger('mood')->default(0);
            $table->string('discount_type')->nullable();
            $table->integer('discount_amount')->default(0);
            $table->string('discount_note')->nullable();
            $table->string('note')->nullable();
            $table->integer('tax')->default(0);
            $table->integer('additional_fee')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(PatientVisit::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(DoctorOrder::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('billing_invoices');
    }
};
