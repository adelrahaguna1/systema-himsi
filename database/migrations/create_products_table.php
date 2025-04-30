Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('type');
    $table->decimal('price', 10, 2);
    $table->integer('stock');
    $table->string('image')->nullable();
    $table->timestamps();
});
