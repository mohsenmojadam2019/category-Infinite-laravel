@extends('panel.layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ویرایش دسته بندی</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">نام دسته بندی</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="parent_id">والد دسته بندی</label>
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="">بدون والد</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">بروز رسانی</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
