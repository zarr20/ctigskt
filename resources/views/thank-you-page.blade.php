@extends('layout.front')

@section('content')
    <div class="relative">
        <div class="absolute w-full h-full bg-white">
            <img src="{{ asset('images/container_bg_1.png') }}" class="object-cover w-full h-full">
        </div>
        <div class="relative container">
            <div class="py-[100px]">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/thank_you.png') }}" class="max-w-[400px]">

                    <div class="text-center mt-[40px]">
                        <h1 class="text-[#293660] text-[46px] font-bold">
                            Thank You for Your Interest
                        </h1>
                        <p>
                            Our team will contact you within 5 working days
                        </p>

                        <div class="flex justify-center mt-5">
                            <a href="{{ url('/') }}"
                                class=" bg-[#04BE02] text-white py-3 px-5 font-bold text-[17px] shadow-lg">
                                BACK TO HOMEPAGE
                        </a>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
