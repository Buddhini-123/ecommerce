@extends('layouts.app')

@section('content')
    <div id="cart">
        <cart :cart-list="{{ $carts }}"></cart>
    </div>
@endsection
