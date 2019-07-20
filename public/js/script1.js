$(function() {

		$('.tampilUbah').click(function () {
			$('#modalLabel').html('Edit Data');
			$('.modal-footer button').html('Update Data');
			$('.form').attr('action','http://localhost/b11arka/public/soal7/ubah');

			const id = $(this).data('id');
			
			$.ajax({
				url		: 'http://localhost/b11arka/public/soal7/getUbah',
				data 	: {id :id},
				dataType:'json',
				method :'post',
				success:function (data) {
					$('#name').val(data.name);
					$('#id').val(data.id);
				},error:function (res) {
					console.log(res);
				}
			})
		});

		$('#tambahData').click(function () {
			$('#name').val("");

			$('#modalLabel').html('Tambah Data');
			$('.modal-footer button').html('Simpan Data');
			$('.form').attr('action','http://localhost/b11arka/public/soal7/tambah');
			});

			
})













