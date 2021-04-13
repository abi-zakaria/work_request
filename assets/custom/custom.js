
$(document).ready( function () {
	$('#data_mesin').DataTable(); 
} );

$(document).ready( function () {
	$('#myTable').DataTable();
} );

$(document).ready( function () {
	$('#data_mesin_2').DataTable(); 
} );

$('#datepicker').datepicker({
	autoclose: true
});

$('#timepicker').timepicker({
	showMeridian: false,
	showInputs: false,
});

$('.select2').select2({

});

const flashData = $('.flash-data').data('flashdata');

if(flashData){
	Swal.fire({
		title: 'Berhasil',
		text: 'Data ' + flashData,
		type: 'success'
	});
}

const flashData2 = $('.flash-data').data('flash_cek');

if(flashData2){
	Swal.fire({
		title: 'Gagal',
		text: 'Data ' + flashData2,
		type: 'warning'
	});
}

$('.tombol-hapus').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Mesin Akan Di Hapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.tombol-hapus-kry').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Karyawan MTN Akan Di Hapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.tombol-hapus-prod').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Karyawan PROD Akan Di Hapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.tombol-hapus-sect').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Section Akan Di Hapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.btn-logout').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Ingin Logout?',
		text: "Pesan Logout",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Logout!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.tombol-logout').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Ingin Logout?',
		text: "Pesan Logout",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Logout!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.hapus-user').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data User Akan Di Hapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});

$('.tombol-wr').on('click',function(e){
	e.preventDefault();
	const href = $(this).attr('href'); 

	Swal.fire({
		title: 'Pesan',
		text: "Apakah Anda Ingin Membuat Work Request",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});






