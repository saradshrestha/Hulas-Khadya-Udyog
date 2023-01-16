<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#dashboard" data-active="{{ (Request::routeIs('admin.dashboard*')) ? 'true' : 'false'}}" data-toggle="collapse"  aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.dashboard*')) ? 'show' : ''}}" id="dashboard" data-parent="#accordionExample">
                    <li class="{{(Request::routeIs('admin.dashboard')) ? 'active' :''}} ">
                        <a href="{{ route('admin.dashboard') }}"> Main </a>
                    </li>
                    {{-- <li class="{{(Request::routeIs('admin.analytic')) ? 'active' :''}} ">
                        <a href="{{ route('admin.analytic') }}"> Analytics </a>
                    </li> --}}
                </ul>
            </li>

            <li class="menu">
                <a href="#product_category" data-active="{{ (Request::routeIs('admin.category*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-boxes"></i>
                        <span>Categories</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.category*')) ? 'show' : ''}}" id="product_category" data-parent="#accordionExample">
                    <li class="{{(Request::routeIs('admin.category.allCategory')) ? 'active' :''}} " >
                        <a href="{{ route('admin.category.allCategory')}}"> All Categories </a>
                    </li>
                    <li class="{{(Request::routeIs('admin.category.addCategory')) ? 'active' :''}} ">
                        <a href="{{ route('admin.category.addCategory') }}"> Add New Category </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#products" data-active="{{ (Request::routeIs('admin.product*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-product-hunt"></i>
                        <span>Products</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.product*')) ? 'show' : ''}}" id="products" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.product.allProducts')) ? 'active' : ''}}">
                        <a href="{{ route('admin.product.allProducts')}}"> All Products </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.product.addProduct')) ? 'active' : ''}}">
                        <a href="{{ route('admin.product.addProduct') }}"> Add New Product </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#finalproducts" data-active="{{ (Request::routeIs('admin.finishedProduct*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-product-hunt"></i>
                        <span>Recipes</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.finishedProduct*')) ? 'show' : ''}}" id="finalproducts" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.finishedProduct.index')) ? 'active' : ''}}">
                        <a href="{{ route('admin.finishedProduct.index')}}"> All Recipes </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.product.addProduct')) ? 'active' : ''}}">
                        <a href="{{ route('admin.finishedProduct.create') }}"> Add New Recipes </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#team" data-active="{{ (Request::routeIs('admin.team*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                        {{-- <i class="fab fa-product-hunt"></i> --}}
                        <span>Teams</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.team*')) ? 'show' : ''}}" id="team" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.team.index')) ? 'active' : ''}}">
                        <a href="{{ route('admin.team.index')}}"> All Teams </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.team.create')) ? 'active' : ''}}">
                        <a href="{{ route('admin.team.create') }}"> Add New Member </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#testimonial" data-active="{{ (Request::routeIs('admin.testimonial*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                        {{-- <i class="fab fa-product-hunt"></i> --}}
                        <span>Testimonials</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.testimonial*')) ? 'show' : ''}}" id="testimonial" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.testimonial.index')) ? 'active' : ''}}">
                        <a href="{{ route('admin.testimonial.index')}}"> All Testimonials </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.testimonial.create')) ? 'active' : ''}}">
                        <a href="{{ route('admin.testimonial.create') }}"> Add New Testimonial </a>
                    </li>
                </ul>
            </li>




            @foreach(getPostTypes() as $sidePostType)
                <li class="menu">
                    <a href="#{{ $sidePostType->slug }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            {!! $sidePostType->icon !!}
                            <span>{{ $sidePostType->title }}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="{{ $sidePostType->slug }}" data-parent="#accordionExample">
                        <li>
                            <a href="{{ route('admin.post',  $sidePostType->slug) }}"> All {{ $sidePostType->title }} </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.post.create',  $sidePostType->slug) }}"> Add New  </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.post.trash',  $sidePostType->slug) }}"> Trash  </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.post.log',  $sidePostType->slug) }}"> Log  </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.post.order',  $sidePostType->slug) }}"> Order  </a>
                        </li>
                    </ul>
                </li>
            @endforeach

            <li class="menu">
                <a href="{{ route('admin.contact') }}" data-active="{{ (Request::routeIs('admin.contact*')) ? 'true' : ''}}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-envelope-open"></i>
                        <span>Contact Message</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ route('admin.career') }}" data-active="{{ (Request::routeIs('admin.career*')) ? 'true' : ''}}" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-envelope-open"></i>
                        <span>Career</span>
                    </div>
                </a>
            </li>

            {{-- <li class="menu">
                <a href="{{ route('admin.enquiry') }}" data-active="{{ (Request::routeIs('admin.enquiry*')) ? 'true' : ''}}" class="dropdown-toggle">
                    <div class="">
                        <i class="fa fa-quora" aria-hidden="true"></i>
                        <span>Enquiry</span>
                    </div>
                </a>
            </li> --}}

            <li class="menu">
                <a href="#postType"  data-active="{{ (Request::routeIs('admin.post_type*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-blog"></i>
                        <span>Post Type</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.post_type*')) ? 'show' : ''}} " id="postType" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.post_type')) ? 'active' : ''}}">
                        <a href="{{ route('admin.post_type') }}"> All Post Types </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.post_type.create')) ? 'active' : ''}}">
                        <a href="{{ route('admin.post_type.create') }}"> Add New  </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.post_type.order')) ? 'active' : ''}}">
                        <a href="{{ route('admin.post_type.order') }}"> Post Type Position  </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#customField" data-active="{{ (Request::routeIs('admin.custom_field*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-intercom"></i>
                        <span>Custom Field</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.custom_field*')) ? 'show' : ''}}" id="customField" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.custom_field')) ? 'active' : ''}}">
                        <a href="{{ route('admin.custom_field') }}"> All Custom Field </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.custom_field.create')) ? 'active' : ''}}">
                        <a href="{{ route('admin.custom_field.create') }}"> Add New  </a>
                    </li>
                    {{-- <li class="{{ (Request::routeIs('admin.post_type.order')) ? 'active' : ''}}">
                        <a href="{{ route('admin.post_type.order') }}"> Post Type Position  </a>
                    </li> --}}
                </ul>
            </li>

            {{-- <li class="menu">
                <a href="#static-content"  data-active="{{ (Request::routeIs('admin.static.content*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                        <span>Static Content</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.static.content*')) ? 'show' : ''}}" id="static-content" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.post_type.order')) ? 'active' : ''}}">
                        <a href="{{ route('admin.static.content') }}"> All Content </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.post_type.order')) ? 'active' : ''}}">
                        <a href="{{ route('admin.static.content.create') }}"> Add New  </a>
                    </li>
                   
                </ul>
            </li> --}}
            

            <li class="menu">
                <a href="#user"  data-active="{{ (Request::routeIs('admin.user*')) ? 'true' : ''}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ (Request::routeIs('admin.user*')) ? 'show' : ''}}" id="user" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.user')) ? 'active' : ''}}">
                        <a href="{{ route('admin.user') }}"> All Users </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.user.create')) ? 'active' : ''}}">
                        <a href="{{ route('admin.user.create') }}"> Add New  </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="{{ route('admin.site') }}" data-active="{{ (Request::routeIs('admin.site')) ? 'true' : ''}}" class="dropdown-toggle">
                    <div class="">
                        <i class="fab fa-internet-explorer"></i>
                        <span>Site Setting</span>
                    </div>
                </a>
            </li>

            {{-- <li class="menu">
                <a href="#cache" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-eye"></i>
                        <span>System Cache</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="cache" data-parent="#accordionExample">
                    <li class="{{ (Request::routeIs('admin.clearview')) ? 'active' : ''}}">
                        <a href="{{ route('admin.clearview') }}"> Clear View </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.clearconfig')) ? 'active' : ''}}"> 
                        <a href="{{ route('admin.clearconfig') }}"> Clear Config  </a>
                    </li>
                    <li class="{{ (Request::routeIs('admin.clearcache')) ? 'active' : ''}}">
                        <a href="{{ route('admin.clearcache') }}"> Clear Cache  </a>
                    </li>
                </ul>
            </li> --}}



        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
<!--  END SIDEBAR  -->
