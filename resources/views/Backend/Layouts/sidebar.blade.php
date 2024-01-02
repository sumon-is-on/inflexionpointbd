<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo">
                    <a href="#">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Admin Panel</span>
                    </a>
                </div>
                <li><a href="{{ route('backend.dashboard') }}"><i class="fas fa-home"></i> Dashboard </a></li>
                {{-- <li class="active">
                    <a class="sidebar-sub-toggle" href="{{ route('backend.dashboard') }}">
                        <i class="ti-home"></i>
                         Dashboard
                    <span class="sidebar-collapse-icon ti-angle-down"></span>
                </a>
                    <ul> <li><a href="#">Dashboard </a></li> </ul>
                </li> --}}
                @if (auth()->user() && auth()->user()->role_id ==1 )
                <li><a href="{{ route('user.index') }}"><i class="fas fa-user"></i> User </a></li>
                <li><a href="{{ route('category.index') }}"><i class="fa-solid fa-layer-group"></i> Category </a></li>
                <li><a href="{{ route('product.index') }}"><i class="fa-solid fa-cubes-stacked"></i> Product </a></li>
                <li><a href="{{ route('product.purchase') }}"><i class="fa-solid fa-cart-shopping"></i>Purchase Product </a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
