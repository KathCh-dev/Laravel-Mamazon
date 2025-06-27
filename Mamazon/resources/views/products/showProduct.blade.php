@extends('layouts.app')



@section('content')
    <div class="container mt-4">

        <div class="row">

            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p class="text-muted">
                    Catégorie : {{ $product->category->name ?? 'Non classé' }}
                </p>
                <h4 class="text-success">
                    {{ number_format($product->price, 2, ',', ' ') }} €
                </h4>

                @if($product->description)
                    <div class="mt-3">
                        <p>{{ $product->description }}</p>
                    </div>
                @endif

                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4">
                    @csrf
                    <button class="btn btn-primary">
                        <i class="fas fa-cart-plus me-1"></i> Ajouter au panier
                    </button>
                </form>
            </div>
        </div>
    </div>


@endsection