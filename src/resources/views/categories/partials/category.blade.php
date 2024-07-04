<div class="accordion-item">
    <h2 class="accordion-header" id="heading{{ $category->id }}">
        <button class="accordion-button {{ $level > 1 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="{{ $level == 1 ? 'true' : 'false' }}" aria-controls="collapse{{ $category->id }}">
            {{ $category->name }}
        </button>
    </h2>
    <div id="collapse{{ $category->id }}" class="accordion-collapse collapse {{ $level == 1 ? 'show' : '' }}" aria-labelledby="heading{{ $category->id }}" data-bs-parent="#categoryAccordion">
        <div class="accordion-body">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">ویرایش</a>
            <button onclick="deleteCategory({{ $category->id }})" class="btn btn-danger btn-sm">حذف</button>
            <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>

            @if($category->childrenRecursive->isNotEmpty())
                @foreach($category->childrenRecursive as $child)
                    @include('categories.partials.category', ['category' => $child, 'level' => $level + 1])
                @endforeach
            @else
                <p>بدون زیر دسته</p>
            @endif
        </div>
    </div>
</div>
