<div class="flex justify-center items-center gap-5 mx-10 mt-5 flex-wrap lg:mx-0">
  @foreach($data as $v)
    <div class="card w-full bg-white shadow-xl mb-5 lg:w-96" style="height: 500px;">
        <figure><img src="https://placeimg.com/400/225/arch" class="w-full bg-center bg-no-repeat" alt="Shoes" /></figure>
        <div class="card-body text-gray-600">
          <h2 class="card-title">
            {{ $v->title }}
            <div class="badge badge-secondary">NEW</div>
          </h2>
          <p>{{ $v->description }}</p>
          <div class="card-actions justify-end mb-5">
            @php
              $idr_format = number_format($v->price, 2, ',', '.');
            @endphp
            <p class="text-secondary">Rp. {{ $idr_format }}</p>
            <div class="badge badge-outline">{{ $v->kategori }}</div> 
          </div>
          <a href="" class="btn btn-block btn-ghost btn-outline">Masukan Keranjang</a>
        </div>
    </div>
    @endforeach
</div>