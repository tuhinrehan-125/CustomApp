@extends('layouts.master-layouts')

@section('title') Article @endsection

@section('css')
@endsection

@section('content')

	

	<!-- home section starts  -->

	<section class="home" id="home">

	    <div class="content">
	        <!-- <h3>Fresh coffee in the morning</h3> -->
	        <a href="{{route('article.create')}}" class="btn btn-edit">Add Article</a>
	        <div style="overflow-x: auto;">
			  <table>
			  	<thead>
	                <tr>
	                    <th>Category</th>
	                    <th>Article Name</th>
				      	<th>Article Slug</th>
				      	<th>Description</th>
				      	<th>Edit</th>
				      	<th>Delete</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($articles as $article)
                    <tr>
                        <td>{{$article->category->category_name}}</td>
                        <td>{{$article->article_name}}</td>
                        <td>{{$article->article_slug}}</td>
                        <td>{{$article->description}}</td>
                        <td><a href="{{route('article.edit', $article->id)}}" class="btn btn-edit">Edit</a></td>

                        <td>
                            <form method="post" action="{{route('article.destroy', $article->id)}}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Delete</button>
                            </form>
                        </td> 
               
                    </tr>
                    @endforeach
	            	
	            </tbody>
			    
			  </table>
			</div>
	    </div>

	</section>

	@endsection

@section('script')
@endsection