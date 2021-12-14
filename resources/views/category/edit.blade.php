@extends('layouts.master-layouts')

@section('title') Category @endsection

@section('css')
@endsection

@section('content')

	

	<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <form action="{{route('category.update', $category)}}" method="POST" enctype="multipart/form-data">
        	{{ csrf_field() }}
            {{ method_field('PUT') }}
            <h3>Category Edit</h3>
            <div class="inputBox">
                <input type="text" value="{{$category->category_name}}" name="category_name" placeholder="Enter Category Name">
            </div>
            <div class="inputBox">
                <input type="text" value="{{$category->description}}" name="description" placeholder="Enter Description">
            </div>
            <input type="submit" value="Update Category" class="btn">

        </form>

    </div>

</section>

	@endsection

@section('script')
@endsection