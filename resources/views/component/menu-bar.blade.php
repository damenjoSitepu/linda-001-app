<div class="menu-bar d-flex px-5 align-items-center shadow-sm">
    <div class="left-side">
        <a href="{{ route('Home') }}"> <i class="fas fa-faucet-drip"></i>
            <span class="d-inline-block ps-4">LIRIS</span>
        </a>
    </div>

    <div class="middle-side d-flex justify-content-center">
        @if(!session()->has('login'))
            {{-- Punya User --}}
            @include('component.menu-bars.for-user')
        @else 
            @if(session()->get('login')['class'] == 1) 
                {{-- Menu Admin --}}
                @include('component.menu-bars.for-admin')
            @else 
                {{-- Menu User --}}
                @include('component.menu-bars.for-user')
            @endif
        @endif
    </div>

    <div class="right-side d-flex justify-content-center align-items-center">
        @if(session()->get('login'))
        <a href="{{ route('User') }}" id="{{ $opt === 'User'? 'active-menu' : '' }}" class="rounded info-profile fw-bold rounded text-center d-inline-block w-50 py-2">{{ session()->get('login')['nama'] }}</a>
        @else 
        <a href="{{ route('Auth') }}" id="{{ $opt === 'User'? 'active-menu' : '' }}" class="rounded info-profile fw-bold rounded text-center d-inline-block w-50 py-2">Pengguna Umum</a>
        @endif

        @if(!session()->get('login'))
        <a href="{{ route('Auth') }}" class="uten rounded w-25 fs-3 d-inline-block text-center"><i  class="fas fa-user"></i></a>
        @endif

        @if(session()->get('login'))
        <a href="{{ route('Logout') }}" class="uten rounded w-25 fs-3 d-inline-block text-center"><i style="transform: rotateY(-180deg);" class="fas fa-arrow-right-from-bracket"></i></a>
        @endif
    </div>
</div>