@extends('layouts.master-layouts')

@section('title') Create Article @endsection

@section('css')
@endsection

@section('content')

	

	<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <form action="{{route('article.update', $article)}}" method="POST" enctype="multipart/form-data">
        	{{ csrf_field() }}
            {{ method_field('PUT') }}

            <h3>Article Edit</h3>
            <div class="inputBox">
                <div class="select">
                   <select name="category_id" id="category">
                        <option selected disabled>Choose a book format</option>
                        @foreach($categories as $category)

                            
                            <option value="{{$category->id}}" {{$category->id==$article->category_id?'selected':''}}> {{$category->category_name}}</option>
                        @endforeach
                   </select>
                </div>
            </div>
            
            <div class="inputBox">
                <input type="text" value="{{$article->article_name}}" name="article_name" placeholder="Enter Article Name">
            </div>
            <div class="inputBox">
                <input type="text" value="{{$article->description}}" name="description" placeholder="Enter Description">
            </div>
            <input type="submit" value="Update Article" class="btn">

        </form>

    </div>

</section>

	@endsection

@section('script')
@endsection