@extends('layouts.admin')

@section('title', 'Portfolio Items')

@section('content')
<div class="card">
    <h2>Portfolio Items</h2>
    <a href="{{ route('portfolio.create') }}" class="btn">Add New</a>

    <div class="portfolio-grid">
        @forelse($items as $item)
        <div class="portfolio-item">
            @if($item->image)
            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}">
            @else
            <img src="https://via.placeholder.com/400x160/1c1c1c/FF8BA0?text=No+Image" alt="No Image">
            @endif
            <div class="content">
                <h3>{{ $item->title }}</h3>
                <p>{{ Str::limit($item->description, 80) }}</p>
                <div class="actions">
                    <a href="{{ route('portfolio.edit', $item) }}" class="btn">Edit</a>
                    <form action="{{ route('portfolio.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No portfolio items yet. Click "Add New" to create one!</p>
        @endforelse
    </div>
</div>
@endsection
