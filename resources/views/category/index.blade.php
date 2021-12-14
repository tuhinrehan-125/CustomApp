@extends('layouts.master-layouts')

@section('title') Category @endsection

@section('css')
@endsection

@section('content')

	

	<!-- home section starts  -->

	<section class="home" id="home">

	    <div class="content">
	        <!-- <h3>Fresh coffee in the morning</h3> -->
	        <a href="{{route('category.create')}}" class="btn btn-edit">Add Category</a>
	        <div style="overflow-x: auto;">
			  <table>
			  	<thead>
	                <tr>
	                    <th>Category Name</th>
				      	<th>Category Slug</th>
				      	<th>Category Description</th>
				      	<th>Edit</th>
				      	<th>Delete</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@foreach($categories as $category)
                    <tr>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->category_slug}}</td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-edit">Edit</a></td>

                        <td>
                            <form method="post" action="{{route('category.destroy', $category->id)}}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Delete</button>
                            	<!-- <input type="submit" value="Delete" class="btn"> -->
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