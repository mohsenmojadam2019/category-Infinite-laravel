@extends('panel.layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <a href="{{ route('categories.create') }}" class="btn btn-success">ایجاد دسته بندی جدید</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">دسته بندی</div>

                    <div class="card-body">
                        <div id="accordion">
                            @foreach($categories as $category)
                                <div class="card">
                                    <div class="card-header" id="heading{{ $category->id }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse{{ $category->id }}" aria-expanded="true"
                                                    aria-controls="collapse{{ $category->id }}">
                                                {{ $category->name }}
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse{{ $category->id }}" class="collapse"
                                         aria-labelledby="heading{{ $category->id }}" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><strong>ID:</strong> {{ $category->id }}</p>
                                            <p><strong>نام:</strong> {{ $category->name }}</p>
                                            <p><strong>والد دسته بندی:</strong>
                                                @if ($category->parent_id)
                                                    {{ $category->parent ? $category->parent->name : 'موجود نیست' }}
                                                @else
                                                    موجود نیست
                                                @endif
                                            </p>
                                            <p><strong>شمارش دسته بندی:</strong> {{ $category->subcategories_count }}</p>
                                            <hr>
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                               class="btn btn-primary">ویرایش</a>
                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                  method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('ایا می خواهید حذف شود؟')">حذف
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
