
<!-- Displaying the current category -->
<li class="ml-3" value="">
    <a href="{{ route('products.getById',$category->id) }}">{{ $category->name}}</a>
    <!-- If category has children -->
    @if (count($category->children) > 0)

        <!-- Create a nested unordered list -->
        <ul>

            <!-- Loop through this category's children -->
            @foreach ($category->children as $sub)

                <!-- Call this blade file again (recursive) and pass the current subcategory to it -->
                @include('partials.categories', ['category' => $sub])   
                
            @endforeach
        </ul>
    @endif
</li>




















</li>