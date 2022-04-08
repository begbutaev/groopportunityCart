<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <h3>{{ $product->name }}</h3>
                <a href="{{route('productShow', $product->code)}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
        </div>
    </div>
</div>

