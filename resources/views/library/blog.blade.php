<!DOCTYPE html>
<html lang="zxx">
    

@include('library.header_inc')

    <body>

@include('library.topbar')

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Blog Posts</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        
        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-main-list">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page grid">
                                    @foreach ($all_blog_data as $single_blog_data)
                                    <article>
                                        <div class="grid-item blog-item">
                                            <div class="post-thumbnail">
                                                <div class="post-date-box">
                                                    <div class="post-date">
                                                        <a class="date" href="#.">{{$single_blog_data->created_at->format('d')}}</a>
                                                    </div>
                                                    <div class="post-date-month">
                                                        <a class="month" href="#.">{{$single_blog_data->created_at->format('M')}}</a>
                                                    </div>
                                                </div>
                                                <a href="{{route('blog-detail',['num'=>$single_blog_data->id])}}"><img alt="blog" src="{{'images/blog/blog-0'.$single_blog_data->id.'.jpg'}}" /></a>
                                                <div class="post-share">
                                                    <a href="#."><i class="fa fa-comment"></i> {{$single_blog_data->comments}}</a>
                                                    <a href="#."><i class="fa fa-thumbs-o-up"></i> {{$single_blog_data->likes}}</a>
                                                    <a href="#."><i class="fa fa-eye"></i> {{$single_blog_data->views}}</a>
                                                    <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                                </div>
                                            </div>
                                            <div class="post-detail">
                                                <header class="entry-header">
                                                    <div class="blog_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag">{{$single_blog_data->theme}}</a>, 
                                                    </div>
                                                    <h3 class="entry-title"><a href="{{route('blog-detail',['num'=>$single_blog_data->id])}}">{{$single_blog_data->title}}</a></h3>
                                                    <div class="entry-meta">
                                                        <span><i class="fa fa-user"></i> <a href="#">{{$single_blog_data->author}}</a></span>
                                                        <span><i class="fa fa-comment"></i> <a href="#">{{$single_blog_data->comments}} Comments</a></span>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p>{{$single_blog_data->content}}</p>
                                                </div>
                                                <footer class="entry-footer">
                                                    <a class="btn btn-default" href="{{route('blog-detail',['num'=>$single_blog_data->id])}}">Read More</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                       @endforeach
                                </div>
                                <a href="#" id="loadmore">Load More Posts</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Blog Section -->

    @include('library.social')

       @include('library.footerbar')

        @include('library.footer_inc')

    </body>


</html>