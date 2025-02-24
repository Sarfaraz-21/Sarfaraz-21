<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <h1>List of all Images</h1>
    @foreach ($images as $image)
        <img src="{{ url('storage/' . $image->path) }}" alt="{{ $image->image }}" style="width: 100px; height: 100px;">
    @endforeach
</div>
