{{-- Menu Bar User --}}
<a href="{{ route('Product') }}" id="{{ $opt === 'Produk'? 'active-menu' : '' }}" class=" uten rounded w-25 text-center fs-3"><i class="fas fa-faucet"></i></a>
<a href="{{ route('Cart') }}" id="{{ $opt === 'Cart'? 'active-menu' : '' }}" class="uten rounded w-25 text-center fs-3"><i class="fas fa-cart-arrow-down"></i></a>
<a href="{{ route('History') }}" id="{{ $opt === 'History'? 'active-menu' : '' }}" class="uten rounded w-25 text-center fs-3"><i class="fas fa-clock-rotate-left"></i></a>