
<?php 
  
  use Illuminate\Support\Facades\Schema; 
  use Illuminate\Database\Schema\Blueprint; 
  use Illuminate\Database\Migrations\Migration; 
     
  class CreateChallengesTable extends Migration 
  { 
      /** 
       * Run the migrations. 
       * 
       * @return void 
       */ 
      public function up() 
      { 
          Schema::create('challenges', function (Blueprint $table) { 
            $table->integer('id')->autoIncrement();
              $table->string('title'); 
              $table->string('status'); 
              $table->text('description'); 
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
          Schema::dropIfExists('challenges'); 
      } 
  } 
  