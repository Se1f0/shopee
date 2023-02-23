<form action="{{ route('product.search') }}" class="hm-searchbox">
    <input type="text" placeholder="Enter your search key ..." name="q" value="{{ $q }}">
    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
</form>
