@extends('layouts.app')

@section('content')
<h1>Seller Dashboard</h1>
@endsection

@section('scripts')
@if(session('message'))
<script>
    iziToast.success({
        title: 'Berhasil',
        message: "{{ session('message') }}",
        position: 'topRight',
    });
</script>
@elseif(session('error'))
<script>
    iziToast.error({
        title: 'Gagal',
        message: "{{ session('message') }}",
        position: 'topRight'
    });
</script>
@endif
@endsection