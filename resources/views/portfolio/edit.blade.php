@extends('layouts.admin')

@section('title', 'Edit Portfolio Item')

@section('content')
<div style="max-width: 500px; margin: auto; background:#242424; padding:40px; border-radius:14px; box-shadow:0 0 20px rgba(255,139,160,0.2);">
    <h2 style="color:#FF8BA0; margin-bottom:20px;">Edit Portfolio Item</h2>

    @if ($errors->any())
        <div style="color:#FF8BA0; margin-bottom:15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portfolio.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="margin-bottom:15px;">
            <label style="display:block; margin-bottom:5px;">Title</label>
            <input type="text" name="title" value="{{ $portfolio->title }}" style="width:100%; padding:12px; border-radius:8px; border:none; background:#1c1c1c; color:#fff;" required>
        </div>

        <div style="margin-bottom:15px;">
            <label style="display:block; margin-bottom:5px;">Description</label>
            <textarea name="description" style="width:100%; padding:12px; border-radius:8px; border:none; background:#1c1c1c; color:#fff;" rows="4">{{ $portfolio->description }}</textarea>
        </div>

        <div style="margin-bottom:20px;">
            <label style="display:block; margin-bottom:5px;">Image</label>
            <input type="file" name="image" style="color:#fff;">
            @if($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}" width="120" style="margin-top:10px; border-radius:6px;">
            @endif
        </div>

        <button type="submit" style="width:100%; padding:12px; background:#FF8BA0; color:#000; border:none; border-radius:8px; font-weight:bold; cursor:pointer;">Update Item</button>
    </form>
</div>
@endsection
