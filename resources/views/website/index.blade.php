@extends('website\template\master')


@section('content')
      <!-- Page Header -->
      <header class="masthead" style="background-image: url({{ asset('website/img/home-bg.jpg') }})">    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019
          <span class="post-category">
            category : <a href="">laravel</a>
          </span>
          </p>
        </div>
        <hr>

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
              <div class="category">
                <h2 class="category-title">category</h2>
                <ul class="category-list">
                  <li><a href="">laravel</a></li>
                </ul>
              </div>
      </div>
    </div>
  </div>
  
@endsection



