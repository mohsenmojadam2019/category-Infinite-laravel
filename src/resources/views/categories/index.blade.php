@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>دسته‌بندی‌ها</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">ایجاد دسته‌بندی جدید</a>
        <div class="accordion" id="categoryAccordion">
            @foreach($categories as $category)
                @include('categories.partials.category', ['category' => $category, 'level' => 1])
            @endforeach
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.accordion .btn-link').click(function () {
                $(this).closest('.card').find('.collapse').collapse('toggle');
            });
        });
@endsection
