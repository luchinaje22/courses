@extends('layouts.web')

@section('content')
<div class="text-center">
    <h1 class="text-3xl text-green-700 mb-2 uppercase">Últimos Cursos</h1>
    <h2 class="text-xl text-gray-600">Fórmate online como profesional en tecnología</h2>
    <h3 class="text-lg text-gray-600">70% de los graduados duplica sus ingresos</h3>

</div>

<!-- component -->
<!-- component -->
<div class=" flex  flex-col  md:flex-row justify-center  flex-wrap gap-3 mt-10  ">
    <div class="">
  <div class="bg-white max-w-xs shadow-lg   mx-auto border-b-4 border-indigo-500 rounded-2xl overflow-hidden  hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer" >
  <div class="bg-indigo-500  flex h-20  items-center">
  <h1 class="text-white ml-4 border-2 py-2 px-4 rounded-full">1</h1>
  <p class="ml-4 text-white uppercase">Title</p>
  </div>
    <p class="py-6 px-6 text-lg tracking-wide text-center">Description Goes here</p>
                          <!-- <hr > -->
      <div class="flex justify-center px-5 mb-2 text-sm ">
        <button type="button" class="border border-indigo-500 text-indigo-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Details
        </button>
      </div>
  </div>
  </div>
  
  <div class="">
   <div class="bg-white max-w-xs mx-auto rounded-2xl  border-b-4 border-green-500 overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">
      <div class="h-20 bg-green-500 flex items-center ">
        <h1 class="text-white ml-4 border-2 py-2 px-4 rounded-full">2</h1>
        <p class=" text-white text-base ml-4 uppercase"> 
          Title
        </p>
      </div>
        <p class="py-6 px-6 text-lg tracking-wide text-center">Description Goes Here</p>
                          <!-- <hr > -->
                          <div class="flex justify-center px-5 mb-2 text-sm ">
                              <button type="button"
                                  class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">
                                   Details
                              </button>
                          </div>
   </div>
   </div>
  
   <div class="">
   <div class="bg-white max-w-xs mx-auto rounded-2xl  border-b-4 border-red-500 overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">
      <div class="h-20 bg-red-500 flex items-center ">
        <h1 class="text-white ml-4 border-2 py-2 px-4 rounded-full">3</h1>
        <p class=" text-white text-base ml-4 uppercase">
          Title
        </p>
      </div>
        <p class="py-6  px-6 text-lg tracking-wide text-center">Description Goes Here</p>
                          <!-- <hr > -->
          <div class="flex justify-center px-5 mb-2 text-sm ">
            <button type="button"class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
                 Details
              </button>
                          </div>
   </div>
   </div>
  </div>
@endsection