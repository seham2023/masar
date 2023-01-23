@extends('FrontEnd.layouts.master')


@section('title')
blog
@endsection

{{-- ////////////////////////// --}}
@section('css')

@endsection
{{-- //////////////////// --}}

@section('content')

<main class="main-content">
    <!-- Start Breadcrumb -->
    <section class="breadcrumb">
        <div id="tsparticles"></div>
        <div class="container">
            <div class="row">
                <!-- Col -->
                <div class="col-md-12">
                    <div class="text-bread">
                        <h1>المدونة</h1>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i> الرئيسية
                                </a>
                            </li>
                            <li>
                                <span>المدونة</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Start Blogs-page -->
    <section class="blogs-page body-inner">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog )

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{ asset($blog->image_path) }}" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">{{$blog->title}}</a>
                            <p>
                {{$blog->description}}
                     </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- /Col -->

                {{-- <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/2.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/3.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/1.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/2.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/3.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/1.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/2.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-4">
                    <div class="blog-block">
                        <div class="img-block">
                            <a href="#" class="img">
                                <img src="{{asset('FontEnd')}}/assets/images/3.png" alt="#" />
                            </a>
                        </div>
                        <div class="details">
                            <a href="#" class="name">زيادة ترتيب موقعك في نتائج البحث</a>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                            </p>
                            <span class="date-h">2022.11.11</span>
                        </div>
                    </div>
                </div>
                <!-- /Col --> --}}
            </div>
        </div>
    </section>
    <!-- End Blogs-page -->

</main>


@endsection
{{-- ////////////////// --}}
@section('script')

@endsection
