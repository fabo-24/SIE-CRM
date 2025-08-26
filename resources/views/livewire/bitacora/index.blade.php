@extends('layouts.app') {{-- O el layout que estés usando --}}

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Bitácora del sistema</h1>
    @livewire('bitacora-view')
</div>
@endsection
