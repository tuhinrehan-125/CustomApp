@extends('layouts.master-layouts')

@section('title') Category @endsection

@section('css')
@endsection

@section('content')

	

	<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        	@csrf
            <h3>Category</h3>
            <div class="inputBox">
                <input type="text" name="category_name" placeholder="Enter Category Name">
            </div>
            <div class="inputBox">
                <input type="text" name="description" placeholder="Enter Description">
            </div>
            <input type="submit" value="Add Category" class="btn">

        </form>

    </div>

</section>

	@endsection

@section('script')
@endsection