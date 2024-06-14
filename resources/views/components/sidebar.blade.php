{{-- <div class="container">
    @foreach ($major_category_names as $major_category_name)
    <h2 class="major__category_h2">{{ $major_category_name }}</h2>

    @foreach ($categories as $category)
    @if ($category->major_category_name === $major_category_name)
    <label class="samuraimart-sidebar-category-label">
        <a href="{{ route('products.index', ['category' => $category->id]) }}">
            <p>{{ $category->name }}</p>
        </a>
    </label>

    @endif
    @endforeach
    @endforeach
</div> --}}

<div class="sidebar-container">
    @foreach ($major_category_names as $major_category_name)
    <div class="major-category">
        <h2 class="major-category-h2">{{ $major_category_name }}</h2>

        @foreach ($categories as $category)
        @if ($category->major_category_name === $major_category_name)
        <div class="category-item">
            <label class="sidebar-category-label">
                <a href="{{ route('products.index', ['category' => $category->id]) }}">
                    <p>{{ $category->name }}</p>
                </a>
            </label>
        </div>
        @endif
        @endforeach
    </div>
    @endforeach
</div>