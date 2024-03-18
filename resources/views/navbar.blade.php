<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link btn btn-light border border-dark {{ request()->routeIs('index') ? ' active ' : '' }}" href="{{route('index')}}">Step 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light border border-dark {{ request()->routeIs('step2') ? ' active ' : '' }}" href="{{route('step2')}}">Step 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light border border-dark {{ request()->routeIs('step3') ? ' active ' : '' }}" href="{{route('step3')}}">Step 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light border border-dark {{ request()->routeIs('step4') ? ' active ' : '' }}" href="{{route('step4')}}">Review</a>
            </li>
        </ul>
    </div>
</nav>
