<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">

            @if(auth()->user()->role==='admin')
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('order')}}">
                        <span data-feather="file"></span>
                        Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product')}}">
                        <span data-feather="shopping-cart"></span>
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.list')}}">
                        <span data-feather="shopping-cart"></span>
                        Category
                    </a>
                </li>
            @endif

            @if(auth()->user()->role==='manager')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product')}}">
                        <span data-feather="shopping-cart"></span>
                        Products
                    </a>
                </li>
            @endif


        </ul>
        <span>{{auth()->user()->name}}</span>-
        <span>{{auth()->user()->role}}</span>
    </div>
</nav>
