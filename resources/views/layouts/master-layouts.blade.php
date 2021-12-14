<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>


<body>

	<!-- header section starts  -->

	<header class="header">

	    <a href="{{route('dashboard')}}" class="logo">
	        <!-- <img src="images/logo.png" alt=""> -->
	        <h2 style="color: #FFF">CustomApp</h2>
	    </a>

	    <nav class="navbar">
	        <a href="{{route('category.index')}}">Category</a>
	        <a href="{{route('article.index')}}">Article</a>
	        <a href="{{route('author.index')}}">Author</a>
	    </nav>

	    <div class="icons">
	        <div class="fas fa-search" id="search-btn"></div>
	        <div class="user-name" id="cart-btn"></div>
	        <div>
	        	<a href="{{route('auth.logout')}}" class="btn">Logout</a>
	        </div>
	        <div class="fas fa-bars" id="menu-btn"></div>
	    </div>

	    <div class="search-form">
	        <input type="search" id="search-box" placeholder="search here...">
	        <label for="search-box" class="fas fa-search"></label>
	    </div>

	</header>

	<!-- header section ends -->

	@yield('content')

	<!-- footer section starts  -->

	<section class="footer">

	    <div class="share">
	        <a href="#" class="fab fa-facebook-f"></a>
	        <a href="#" class="fab fa-twitter"></a>
	        <a href="#" class="fab fa-instagram"></a>
	        <a href="#" class="fab fa-linkedin"></a>
	        <a href="#" class="fab fa-pinterest"></a>
	    </div>

	    <div class="links">
	        <a href="#">home</a>
	        <a href="#">category</a>
	        <a href="#">article</a>
	        <a href="#">author</a>
	        <a href="#">contact</a>
	    </div>

	    <div class="credit">created by <span>mr. tuhin rehan</span> | all rights reserved</div>

	</section>

	<!-- footer section ends -->

	<!-- custom js file link  -->
	<script src="{{asset('assets/js/script.js')}}"></script>

    
</body>

</html>
