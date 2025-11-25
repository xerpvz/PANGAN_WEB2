@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <h2>Welcome, {{ auth()->user()->name }}!</h2>
    <p>This is your CMS dashboard. From here you can manage your portfolio items.</p>
    <a href="{{ route('portfolio.create') }}" class="btn">Add New Portfolio Item</a>
</div>
@endsection
