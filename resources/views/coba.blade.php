@extends('layouts.auth')
@section('content')
    {{-- <div class="p-5">
        @foreach ($data as $item)
            <div class="border border-blue-500 p-3 mt-5 bg-red-200">
                {!! $item->content !!}
            </div>
        @endforeach
    </div> --}}
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="thing">
        <button type="submit">Upload</button>
    </form>
@endsection