{{-- Menu bar admin --}}
<a href="{{ route('ProductAdmin') }}" id="{{ $opt === 'Produk'? 'active-menu' : '' }}" class=" uten rounded w-25 text-center fs-3"><i class="fas fa-boxes"></i></a>
<a href="{{ route('UserAdmin') }}" id="{{ $opt === 'User'? 'active-menu' : '' }}" class="uten rounded w-25 text-center fs-3"><i class="fas fa-users"></i></a>
<a href="{{ route('CartAdmin') }}" id="{{ $opt === 'Pesanan'? 'active-menu' : '' }}" class="uten rounded w-25 text-center fs-3"><i class="fas fa-scroll"></i></a>