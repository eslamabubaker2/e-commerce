 <ul class="nav-coupon-category panel">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ url('/products/category/') }}/{{$category->id}}"><i class="{{$category->icon}}"></i>{{$category->name}}<span>{{countProductsByCat($category->id)}}</span></a>
                                    </li>
                                    @endforeach
                                    <li class="all-cat">
                                        <a class="font-14" href="{{url('/categories')}}">All Categories</a>
                                    </li>
                                </ul>