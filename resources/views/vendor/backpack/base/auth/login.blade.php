@extends('layouts.back')

@section('main')
    <div class="flex h-screen">
        <div class="hidden w-1/2 mybackground md:flex">
        </div>
        <div class="flex flex-col w-full py-24 lg:w-1/2">
            <div class="mx-16">
              
                    <img class="w-1/3 h-auto pb-8 mx-auto" src="../assets/computer1.gif">
                  <h1 class="text-3xl font-bold text-center text-gray-800"><a href="/" class="text-[#7C69EF]">Billun</a> Dashboard</h1>
                <div class="flex flex-col items-center justify-center p-4">
                    <form class="" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                        {!! csrf_field() !!}

                        <div class="relative flex mb-8 form-group">
                            <i class="absolute py-3 pl-2 las la-envelope text-[#7C69EF] la-2x"></i>
                            <div>
                                <input type="text"
                                    class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }} w-full bg-white border border-transparent focus:border-[#6002E9] focus:ring-2 pl-12  placeholder:text-gray-900 placeholder:font-bold focus:ring-blue-200 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 rounded-xl ease-in-out"
                                    name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">

                                @if ($errors->has($username))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first($username) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="relative flex mb-4 form-group">
                            <i class="absolute py-3 pl-2 las la-lock text-[#7C69EF] la-2x"></i>
                            <div>
                                <input type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} w-full bg-white border border-transparent focus:border-[#6002E9] focus:ring-2 pl-12 placeholder:text-gray-900 placeholder:font-bold focus:ring-blue-200 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 rounded-xl ease-in-out"
                                    name="password" id="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                    
                                <div class="relative flex justify-between py-4 mx-4 mb-4 checkbox">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="remember">
                                        <span class="ml-2 mr-2 font-bold text-gray-900">
                                            {{ trans('backpack::base.remember_me') }}</span>
                                    </label>
                                </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="text-white bg-[#7C69EF] border-0 py-3 px-8 focus:outline-none hover:bg-[#6002E9] rounded-lg text-lg w-full">
                                    {{ trans('backpack::base.login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))
                <div class="py-2 font-semibold text-center text-gray-500 hover:text-[#7C69EF]"><a
                        href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>
                </div>
            @endif
            @if (config('backpack.base.registration_open'))
                <div class="py-2 font-semibold text-center text-gray-500 hover:text-[#7C69EF]"><a href="{{ route('backpack.auth.register') }}">Inscription</a></div>
            @endif
        </div>
    </div>

@endsection
