<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('idProduto');
            $table->integer('codigo');
            $table->string('descricao', 150);
            $table->string('tipo', 1);
            $table->string('situacao', 10);
            $table->string('unidade', 2);
            $table->float('preco', 8, 2);
            $table->float('precoCusto', 8, 2);
            $table->string('descricaoCurta', 100);
            $table->string('descricaoComplementar', 100);
            $table->date('dataInclusao');
            $table->date('dataAlteracao');
            $table->string('imageThumbnail');
            $table->string('nomeFornecedor');
            $table->string('marca');
            $table->string('class_fiscal');
            $table->string('cest');
            $table->integer('idFabricante');
            $table->float('estoqueMinimo', 8, 2);
            $table->float('estoqueMaximo', 8, 2);
            $table->integer('larguraProduto');
            $table->integer('alturaProduto');
            $table->integer('profundidadeProduto');
            $table->string('condicao');
            $table->string('freteGratis', 1);
            $table->string('producao', 1);
            $table->integer('estoqueAtual');
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
        Schema::dropIfExists('produtos');
    }
}
