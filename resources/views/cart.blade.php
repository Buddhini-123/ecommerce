@extends('layouts.app')

@section('content')
    <div id="cart">
        <cart :cart_list="{{ $carts }}"></cart>
    </div>
@endsection
