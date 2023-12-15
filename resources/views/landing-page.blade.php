@extends('layout.front')

@section('content')
    <div class="relative">
        <div class="absolute w-full h-full bg-black ">
            <img src="{{ asset('images/banner_bg.png') }}" class="object-cover w-full h-full">
        </div>
        <div class="relative w-full h-screen min-h-[500px] flex items-center text-white">
            <div class="container">
                <div class="max-w-[762px] mb-4">
                    <h1 class="text-[50px] font-bold">
                        Cybersecurity Made Simple
                        with Sangfor Cyber Command
                    </h1>
                    <p class="text-[30px]">
                        Simplify your cybersecurity with Sangfor Cyber Command's
                        user-friendly interface and comprehensive threat protection.
                    </p>
                </div>
                <button>
                    <div class="bg-[#04BE02] hover:bg-[#018000] w-auto flex items-center">
                        <div class="p-[10px] px-[30px]">
                            <div class="font-bold text-[20px]">
                                FREE TRIAL
                            </div>
                        </div>
                        <div class="w-[50px] bg-[#018000]">
                            <div class="aspect-square h-full flex items-center justify-center">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.125 10.7852C0.125 11.418 0.863281 11.7344 1.32031 11.2773L5.82031 6.77734C6.10156 6.49609 6.10156 6.03906 5.82031 5.75781L1.32031 1.25781C0.863281 0.800781 0.125 1.11719 0.125 1.75V10.7852Z"
                                        fill="#F9FAFE" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div class="relative">
        <div class="absolute w-full h-full bg-white">
            <img src="{{ asset('images/container_bg_1.png') }}" class="object-cover w-full h-full">
        </div>
        <div class="relative py-[100px]">
            <div class="container">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <h2 class="font-bold text-[40px]">
                            About Sangfor <br>
                            Cyber Command
                        </h2>
                        <div>
                            <p>
                                Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a
                                comprehensive security management platform designed to protect businesses from cyber
                                threats.
                            </p>
                            <p>
                                It provides a range of security solutions such as threat detection, incident response, and
                                compliance management. With Sangfor Cyber Command, organizations can monitor their network
                                traffic, analyze security events, and respond to incidents quickly and efficiently.
                            </p>
                            <p>
                                The platform uses advanced machine learning algorithms and big data analytics to identify
                                and
                                prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard
                                that
                                enables businesses to track their security posture in real-time and make informed decisions
                                based on the insights provided.
                            </p>
                            <p>
                                Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their
                                cybersecurity defenses and safeguard their assets from modern-day threats.
                            </p>

                        </div>
                    </div>
                    <div class="bg-white p-[37px] rounded-md">
                        <div class="text-[22px] mb-[30px]">
                            <div class="font-bold text-[#293660]"> Dapatkan Free Trial selama 1 bulan,</div>
                            <div>analisa keamanan network anda dan lihat hasilnya!</div>
                        </div>

                        @if (session('success'))
                            <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('request-trial.store') }}" method="post">
                            @csrf

                            <div class="flex gap-4">
                                <div class="mb-4 w-full">
                                    <label for="firstname" class="block text-sm font-medium text-gray-600 mb-2">
                                        First Name: <span class="text-[red]">*</span>
                                    </label>
                                    <input type="text" name="firstname" id="firstname" class="input-field @error('firstname') border-[red] @enderror" value="{{ old('firstname') }}" >
                                </div>

                                <div class="mb-4 w-full">
                                    <label for="lastname" class="block text-sm font-medium text-gray-600 mb-2">Last Name: <span class="text-[red]">*</span></label>
                                    <input type="text" name="lastname" id="lastname" class="input-field @error('lastname') border-[red] @enderror" value="{{ old('lastname') }}">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="corporate_email" class="block text-sm font-medium text-gray-600 mb-2">Corporate
                                    Email: <span class="text-[red]">*</span></label>
                                <input type="email" name="corporate_email" id="corporate_email" class="input-field @error('corporate_email') border-[red] @enderror" value="{{ old('corporate_email') }}"
                                    >
                            </div>

                            <div class="mb-4">
                                <label for="job_title" class="block text-sm font-medium text-gray-600 mb-2">Job Title: <span class="text-[red]">*</span></label>
                                <input type="text" name="job_title" id="job_title" class="input-field @error('job_title') border-[red] @enderror" value="{{ old('job_title') }}" >
                            </div>

                            <div class="mb-4">
                                <label for="company_name" class="block text-sm font-medium text-gray-600 mb-2">Company
                                    Name: <span class="text-[red]">*</span></label>
                                <input type="text" name="company_name" id="company_name" class="input-field @error('company_name') border-[red] @enderror" value="{{ old('company_name') }}">
                            </div>

                            <div class="mb-4">
                                <label for="industry" class="block text-sm font-medium text-gray-600 mb-2">
                                    Industry: <span class="text-[red]">*</span>
                                </label>
                                <input type="tel" name="industry" id="industry" class="input-field @error('industry') border-[red] @enderror" value="{{ old('industry') }}">
                            </div>

                            <div class="mb-4">
                                <label for="phone_number" class="block text-sm font-medium text-gray-600 mb-2">Phone
                                    Number: <span class="text-[red]">*</span></label>
                                <input type="tel" name="phone_number" id="phone_number" class="input-field @error('phone_number') border-[red] @enderror" value="{{ old('phone_number') }}">
                            </div>

                            <div class="mb-4">
                                <label for="agree" class="flex">
                                    <input type="checkbox" name="agree" id="agree" value="{{ old('agree') }}">
                                    <span class="ml-2 text-sm">
                                        click this box to agree to be contacted by our team and
                                        get great deals on Sangfor for Helios!
                                    </span>
                                </label>
                            </div>

                            <div class="flex justify-center mt-5">
                                <button type="submit" class="w-[200px] bg-[#04BE02] text-white py-3 px-5 font-bold text-[17px] shadow-lg">
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="relative">
        <div class="bg-[#F9FAFE]">
            <div class="container py-[90px]">
                <div class="flex justify-center mt-[-130px] mb-[60px]">
                    <div class="bg-[#293660] p-4 px-6 w-fit shadow-md">
                        <h2 class="font-bold text-[30px] text-white">
                            Cyber Command Customers Reference
                        </h2>
                    </div>
                </div>
                <div class="flex justify-center flex-wrap gap-[20px]">

                    @for ($i = 1; $i <= 5; $i++)
                        <div class="w-[120px] aspect-video relative mb-4">
                            <img src="{{ asset('images/logo_customer_reference.png') }}"
                                style="w-full h-full object-cover">
                        </div>
                    @endfor

                </div>

            </div>
        </div>
    </div>

    <div class="container py-[90px]">
        <div class="text-center mb-[60px]">
            <h2 class="font-bold text-[30px] text-[#293660]">
                Explore Sangfor Cyber Command with Helios
            </h2>
            <p class="text-[#6C646A]">
                Helios Informatika Nusantara as Sangfor Distributor will provide
            </p>
        </div>
        <div class="flex justify-center flex-wrap gap-[20px]">

            @for ($i = 1; $i <= 5; $i++)
                <div class="bg-white p-[56px] max-w-[350px] w-[100%] flex flex-col items-center"
                    style="box-shadow: 0px 2px 25px 0px rgba(0, 0, 142, 0.15);">
                    <div class="w-[70px] aspect-square relative mb-4">
                        <img src="{{ asset('images/explore_icon.png') }}" style="w-full h-full object-cover">
                    </div>
                    <div class="font-bold text-[20px] text-center text-[#19456B]">
                        NDR Implementation
                    </div>

                </div>
            @endfor

        </div>
    </div>
@endsection
