$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/latihan-mvc-php/public/mahasiswa/ubah');

        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'http://localhost/latihan-mvc-php/public/mahasiswa/getubah',
            data: {id : id},
            type: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});