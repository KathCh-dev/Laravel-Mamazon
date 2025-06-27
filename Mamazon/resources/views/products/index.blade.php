@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des produits</h1>

    @if ($products->isEmpty())
    <p>Aucun produit disponible pour le moment.</p>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card task-card p-3">
                        <a href=""><h5 class="card-title">{{ $product->product_title }}</h5></a>
                        <p class="card-text">{{ $product->product_desccription }}</p>
                        <p><strong>Prix : </strong>{{ number_format($product->price) }}€</p>
                        <a href="" class="task-link">Voir le produit</a>
                        <button type="submit">Ajouter au panier</button>
                    </div>
                </div>
            
            @endforeach

        </div>
    
    @endif
</div>
@endsection