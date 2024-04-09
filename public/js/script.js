$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-content form').attr('action', 'http://localhost:8080/phpmvc/public/mahasiswa/tambah');
    })

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-content form').attr('action', 'http://localhost:8080/phpmvc/public/mahasiswa/ubah');

        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:8080/phpmvc/public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                const { id, nama, nrp, email, jurusan } = data;
                $('#nama').val(nama);
                $('#nrp').val(nrp);
                $('#email').val(email);
                $('#jurusan').val(jurusan);
                $('#id').val(id);
            }
        })
    })

});