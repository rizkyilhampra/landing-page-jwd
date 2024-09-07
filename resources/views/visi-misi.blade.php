@extends('layouts.app')
@section('title', 'Visi Misi')
@section('content')

<div class="card">
    <div class="card-body">
        {!! $visiMisi->content !!}
    </div>
</div>

@endsection
