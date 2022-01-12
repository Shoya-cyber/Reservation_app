<x-app-layout>
  <x-slot name="header">
  

  <div class="w-3/4 h-96 mt-36 mx-auto">
    <h2 class="text-2xl font-bold mb-8">collection</h2>
    <div class="flex justify-between">
      <div class="w-1/4 ">
        <a href="{{ route('hotelDetail')}}">
          <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
          <h3 class="text-lg text-center mt-6">hotel name</h3>
        </a>
      </div>
      <div class="w-1/4 ">
        <a href="{{ route('hotelDetail')}}">
          <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
          <h3 class="text-lg text-center mt-6">hotel name</h3>
        </a>
      </div>
      <div class="w-1/4 ">
        <a href="{{ route('hotelDetail')}}">
          <img src="css/img/hotel1.jpg" alt="" class="rounded-md">
          <h3 class="text-lg text-center mt-6">hotel name</h3>
        </a>
      </div>
    </div>
  </div>
</x-app-layout>