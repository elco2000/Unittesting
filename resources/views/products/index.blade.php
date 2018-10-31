<div class="index-container">
    <article class="index-articles">
        @foreach($products as $product)
            <article class="index-article">
                {{--<a href="#" class="show-link">--}}
                    <div class="article-name">
                        <h4>{{$product->name}}</h4>
                        <p>{{$product->description}}</p>
                    </div>
                {{--</a>--}}
            </article>
        @endforeach
    </article>
    <a href="{{URL::to('products/create')}}"><button class="tablebutton" type="submit">Create a new Product</button></a>
</div>