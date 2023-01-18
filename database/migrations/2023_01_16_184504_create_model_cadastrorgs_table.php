<?php

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
        Schema::create('cadastrorg', function (Blueprint $table) {
            $table->id();
            $table->string('rg',55)->nullable()->default(NULL);
            $table->string('datai',10)->nullable()->default(NULL);
            $table->string('posto',20)->nullable()->default(NULL);
            $table->string('usuariologin',10)->nullable()->default(NULL);
            $table->string('usuarionome',30)->nullable()->default(NULL);
            $table->string('nomereq',50)->nullable()->default(NULL);
            $table->string('pai',50)->nullable()->default(NULL); 
            $table->string('mae',50)->nullable()->default(NULL); 
            $table->string('dtnasci',10)->nullable()->default(NULL); 
            $table->string('sexo',10)->nullable()->default(NULL); 
            $table->string('via',20)->nullable()->default(NULL); 
            $table->string('graui',20)->nullable()->default(NULL);
            $table->string('profissao',50)->nullable()->default(NULL); 
            $table->string('estadonatu',30)->nullable()->default(NULL); 
            $table->string('cidadenatu',30)->nullable()->default(NULL); 
            $table->string('pis',20)->nullable()->default(NULL); 
            $table->string('cpf',20)->nullable()->default(NULL); 
            $table->string('tipocert',50)->nullable()->default(NULL);
            $table->string('comarca',30)->nullable()->default(NULL);
            $table->string('livro',10)->nullable()->default(NULL);
            $table->string('folha',10)->nullable()->default(NULL);
            $table->string('termo',10)->nullable()->default(NULL);
            $table->string('dtreg',20)->nullable()->default(NULL);
            $table->string('dtcert',20)->nullable()->default(NULL); 
            $table->string('cutis',20)->nullable()->default(NULL);
            $table->string('cordocabelo',20)->nullable()->default(NULL);
            $table->string('barba',20)->nullable()->default(NULL);
            $table->string('bigode',20)->nullable()->default(NULL);
            $table->string('corolho',20)->nullable()->default(NULL); 
            $table->string('tipodolho',20)->nullable()->default(NULL); 
            $table->string('obs',20)->nullable()->default(NULL);
            $table->string('anomalias',20)->nullable()->default(NULL);
            $table->string('endereco',40)->nullable()->default(NULL);
            $table->string('complementoendereco',20)->nullable()->default(NULL);
            $table->string('numeroendereco',20)->nullable()->default(NULL);
            $table->string('bairro',20)->nullable()->default(NULL);
            $table->string('cidaderes',25)->nullable()->default(NULL);
            $table->string('estadores',25)->nullable()->default(NULL);
            $table->string('distrito',25)->nullable()->default(NULL);
            $table->string('estadocivil',10)->nullable()->default(NULL);
            $table->string('altura',4)->nullable()->default(NULL);
            $table->string('cep',10)->nullable()->default(NULL);
            $table->string('telefone',14)->nullable()->default(NULL);

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
        Schema::dropIfExists('model_cadastrorgs');
    }
};
