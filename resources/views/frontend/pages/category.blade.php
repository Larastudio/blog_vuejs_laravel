@extends('frontend.index')
@section('title', 'Category')
@section('content')
		
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<ul class="page-header-breadcrumb">
					<li><a href="index.html">Trang chủ</a></li>
					<li></li>
				</ul>
				<h1></h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<!-- post -->
					<div class="col-md-12">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs Class</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
								
					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					
					<div class="clearfix visible-md visible-lg"></div>
					
					<!-- ad -->
					<div class="col-md-12">
						<div class="section-row">
							<a href="#">
								<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
					</div>
					@foreach($posts as $post)
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="{{route('detail', $post->id)}}"><img src="{{URL('/upload/'. $post->image )}}" style="height: 200px"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">{{$post->name}}</a>
									<span class="post-date">{{$post->created_at}}</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h3>
								<p>{{$post->description}}</p>
							</div>
						</div>
					</div>
					@endforeach
			
				</div>
			</div>
			
			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-1.jpg" alt="">
					</a>
				</div>
				<!-- /ad -->
				
				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Most Read</h2>
					</div>

					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
						<div class="post-body">
							<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
						</div>
					</div>

					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
						<div class="post-body">
							<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
						</div>
					</div>

					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
						<div class="post-body">
							<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
						</div>
					</div>

					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
						<div class="post-body">
							<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
						</div>
					</div>
				</div>
				<!-- /post widget -->
				
				<!-- catagories -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Catagories</h2>
					</div>
					<div class="category-widget">
						<ul>
							<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
							<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
							<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
							<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /catagories -->
				
				<!-- tags -->
				<div class="aside-widget">
					<div class="tags-widget">
						<ul>
							<li><a href="#">Chrome</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Tutorial</a></li>
							<li><a href="#">Backend</a></li>
							<li><a href="#">JQuery</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Development</a></li>
							<li><a href="#">JavaScript</a></li>
							<li><a href="#">Website</a></li>
						</ul>
					</div>
				</div>
				<!-- /tags -->
				
				<!-- archive -->
				<div class="aside-widget">
					<div class="section-title">
						<h2>Archive</h2>
					</div>
					<div class="archive-widget">
						<ul>
							<li><a href="#">Jan 2018</a></li>
							<li><a href="#">Feb 2018</a></li>
							<li><a href="#">Mar 2018</a></li>
						</ul>
					</div>
				</div>
				<!-- /archive -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@endsection