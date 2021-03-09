@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <!-- START: Page Content -->
    <div class="page-content page-home">
      <!-- START: icon dan title Trend Categories -->
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
            @php $incrementCategory = 0 @endphp
            @forelse ($categories as $category)
            <!-- START: Icon -->
              <div
                class="col-6 col-md-3 col-lg-2"
                data-aos="fade-up"
                data-aos-delay="{{ $incrementCategory+= 100 }}"
              >
                <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                  <div class="categories-image">
                    <img
                      src="{{ Storage::url($category->photo) }}"
                      alt="Icon Gadgets"
                      class="w-100"
                    />
                    <p class="categories-text">{{ $category->name }}</p>
                  </div>
                </a>
              </div>
            <!-- END: Icon -->
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up"
                data-aos-delay="100">
                No Categories Found
                </div>
            @endforelse
          </div>
        </div>
      </section>
      <!-- END: icon dan title Trend Categories -->
      <!-- START: gambar dan title New Product -->
      <section class="store-new-product">
        <div class="container">
          <!-- START: Title -->
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Product</h5>
            </div>
          </div>
          <!-- END: Title -->
          <div class="row">
            @php $incrementProduct = 0 @endphp
            @forelse ($products as $product)
                <!-- START: Gambar dan detail Apple Watch -->
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProduct+= 100 }}"
            >
              <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      @if($product->galleries->count())
                        background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                      @else
                        background-color: #eee
                      @endif
                    "
                  ></div>
                </div>
                <div class="products-text">{{ $product->name }}</div>
                <div class="products-price">${{ $product->price }}</div>
              </a>
            </div>
            <!-- END: Gambar dan detail Apple Watch -->
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up"
                data-aos-delay="100">
                No Product Found
                </div>
            @endforelse
          </div>
          <div class="row">
            <div class="col-12 mt-4">
              {{ $product->links() }}
            </div>
          </div>
        </div>
      </section>
      <!-- END: gambar dan title  New Product -->
    </div>
    <!-- END: Page Content -->
@endsection