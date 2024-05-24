@extends("layouts.frontend")
@section("content")
<!-- START: HERO -->
<section class="flex items-center hero">
      <div
        class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
      >
        <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
        Blend Of <br class="" />Fragrance
        </h1>
        <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
        Pada akhirnya ini bukan hanya soal aroma, tapi juga soal mengingatkan akan sumber kekuatan 
        dalam diri sendiri mengajak untuk
          <br class="hidden lg:block" />percaya pada naluri bawaan dan lebih bebas berekspresi tanpa ragu
        </h2>
        <div>
          <a
            href="#browse-the-room"
            class="bg-pink-400 text-black hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
            >Explore Now</a
          >
        </div>
      </div>
      <div class="w-full inset-0 md:relative md:w-1/2">
        <div class="relative hero-image">
      
          <img
            src="{{url("/frontend/images/content/background2.jpg")}}"
            alt="hero 1"
            class="absolute inset-0 md:relative w-full h-full object-cover object-center"
          />
        </div>
      </div>
</section>
<!-- END: HERO -->


<!-- END: BROWSE THE ROOM -->


<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Parfum For You</h1>
 
</div>

</section>

<!-- 🛑 Grid Section - Ends Here -->


<!-- END: CLIENTS -->
@endsection