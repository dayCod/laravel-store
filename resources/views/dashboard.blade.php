@extends('layouts.app')

@section('content')
    <x-products-card :data='$data'/>
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
