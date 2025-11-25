@extends('layouts.admin')

@section('title', 'Add Portfolio Item')

@section('content')
<div class="card">
    <h2>Add Portfolio Item</h2>

    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group" style="margin-bottom:15px;">
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required style="width:100%; padding:10px; border-radius:6px; border:none; background:#1c1c1c; color:#fff;">
        </div>

        <div class="input-group" style="margin-bottom:15px;">
            <label>Description</label>
            <textarea name="description" style="width:100%; padding:10px; border-radius:6px; border:none; background:#1c1c1c; color:#fff;" rows="4">{{ old('description') }}</textarea>
        </div>

        <div class="input-group" style="margin-bottom:15px;">
            <label>Image</label>
            <input type="file" name="image" style="color:#fff;">
        </div>

        <button class="btn" type="submit">Add Item</button>
    </form>
</div>
@endsection
