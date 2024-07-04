@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ویرایش دسته‌بندی</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">نام دسته‌بندی</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            </div>
            <div class="mb-3">
                <label for="parent_id" class="form-label">دسته‌بندی والد (اختیاری)</label>
                <select class="form-control" id="parent_id" name="parent_id">
                    <option value="">بدون والد</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </form>
    </div>
@endsection
