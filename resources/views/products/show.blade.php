<x-layout>
    <x-slot:title>
        Show a product
    </x-slot>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>{{ $product->name }}</h1>
    <h4>Quantity: {{ $product->quantity }}</h4>
    <p>{{ $product->description }}</p>

    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
    <form  action="{{route('products.decrese',$product)}}" method="post">
        @csrf
        @method('PUT')
        <input style="display:none" name="amount" type="number" value="1">
      <input type="submit" value="Decrese">
    </form>
      
    <form  action="{{route('products.increse',$product)}}" method="post">
          @csrf
        @method('PUT')
        <input style="display:none" name="amount" type="number" value="1">
      <input type="submit" value="Increse">
    </form>
</x-layout>