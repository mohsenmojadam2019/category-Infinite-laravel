@extends('panel.layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ایجاد دسته بندی</div>

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

                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">نام دسته بندی</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="parent_id">والد دسته بندی</label>
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="">None</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">ایجاد</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
