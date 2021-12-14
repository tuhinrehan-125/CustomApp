@extends('layouts.master-layouts')

@section('title') Create Article @endsection

@section('css')
@endsection

@section('content')

	

	<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
        	@csrf
            <h3>Create Article</h3>
            <div class="inputBox">
                <div class="select">
                   <select name="category_id" id="category">
                        <option selected disabled>Choose a book format</option>
                        @foreach($categories as $category)

                            <option value="{{$category->id}}">{{$category->category_name}}</option>

                        @endforeach
                   </select>
                </div>
            </div>
            
            <div class="inputBox">
                <input type="text" name="article_name" placeholder="Enter Article Name">
            </div>
            <div class="inputBox">
                <input type="text" name="description" placeholder="Enter Description">
            </div>
            <input type="submit" value="Add Article" class="btn">

        </form>

    </div>

</section>

	@endsection

@section('script')
@endsection