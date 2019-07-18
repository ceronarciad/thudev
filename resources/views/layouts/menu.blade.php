<li class="nav-item {{ Request::is('addresses*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('addresses.index') !!}"><i class="nav-icon icon-location-pin"></i><span>Direcciones</span></a>
</li>
<li class="nav-item {{ Request::is('banks*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('banks.index') !!}"><i class="nav-icon icon-credit-card"></i><span>Bancos</span></a>
</li>
<li class="nav-item {{ Request::is('sellers*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('sellers.index') !!}"><i class="nav-icon icon-people"></i><span>Proveedores</span></a>
</li>
<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('categories.index') !!}"><i class="nav-icon icon-puzzle"></i><span>Categorias</span></a>
</li>
<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('products.index') !!}"><i class="nav-icon icon-briefcase"></i><span>Productos</span></a>
</li>
<li class="nav-item {{ Request::is('booklets*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('booklets.index') !!}"><i class="nav-icon icon-basket-loaded"></i><span>Catalogos</span></a>
</li>
