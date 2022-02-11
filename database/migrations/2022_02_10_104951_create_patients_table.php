<?php

use App\Models\User;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('referral')->nullable()->comment('1 = Yes, 2 = No');
            $table->string('referred_by')->nullable();
            $table->integer('patient_type')->nullable()->comment('1 = Inpatient, 2 = Outpatient');
            $table->integer('title')->nullable()->comment('Mr. Mrs. Sir. Etc.');
            $table->string('name')->nullable()->fulltext()->comment('full name of the patient');
            $table->date('dob')->nullable()->comment('numbers only');
            $table->integer('age')->nullable()->comment('numbers only');
            $table->string('gender')->nullable()->comment('M = Male, F = Female');
            $table->string('marital_status')->nullable()->comment('S = Single, D = Divorce, M = Married');
            $table->string('blood_group')->nullable();
            $table->string('email')->nullable()->comment('because one email can be use for multiple patient from the same house');
            $table->string('phone')->nullable()->comment('because one phone number can be use for multiple patient from the same house');
            $table->integer('religion')->nullable();
            $table->integer('occupation')->nullable()->comment('student, farmer, etc.');
            $table->string('country')->nullable();

            $table->string('home_phone')->nullable();
            $table->text('home_address')->nullable();
            $table->string('father_name')->nullable();
            $table->text('father_address')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('mother_address')->nullable();
            $table->string('mother_phone')->nullable();

            // Next of kin

            $table->tinyInteger('same_a_patient')->default(0)->comment('if same as patient all the address will copy from the patient to the next of kin box');
            $table->string('next_of_kin_phone')->nullable();
            $table->string('next_of_kin_email')->nullable();
            $table->text('next_of_kin_address')->nullable();

            // Payment Method
            $table->string('payment_method')->default(1)->comment('1 = Cash');

            $table->text('symptoms')->nullable();
            $table->string('image')->nullable();

            $table->foreignIdFor(User::class)->nullable()->constrained()->comment('the user_id is the Doctor id in this table');
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
        Schema::dropIfExists('patients');
    }
};
