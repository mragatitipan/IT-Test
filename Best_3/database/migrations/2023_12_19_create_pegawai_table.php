Schema::create('pegawai', function (Blueprint $table) {
    $table->id('pegawai_id');
    $table->string('pegawai_nama', 50);
    $table->tinyInteger('pegawai_umur');
    $table->longText('pegawai_alamat');
    $table->string('foto', 255)->nullable();
    $table->timestamps();
});
