@extends('layouts.main')

@section('content')
    <div class="container py-3 bg-white">
        {{-- <div class="row px-4 my-5 justify-content-center"> --}}
        <div class="h2 fw-bold text-center">Welcome to 'Contact App'</div>
        <div class="text-center">
            <small class="mb-3">(Contact App gives you everything you need to organize your contacts easily)</small>
        </div>
        <div class="row justify-content-center my-3">
            <div style="max-width: 250px;">
                <img class="rounded-pill img-fluid" src='{{ asset(Storage::url('img/photo_small.jpg')) }}' alt="">
            </div>
        </div>



        @guest
            <div class="row justify-content-center align-items-center mb-3">
                <div class="lead mr-3">
                    Click the button to continue in demo mode
                </div>
                <div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" name="email" value="sunprog1c@gmail.com" />
                        <input type="hidden" class="form-control" name="password" value="12345678" />
                        <button type="submit" class="btn btn-block btn-success btn-sm">Enter</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                Or register a new account
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm ml-3">Sign up</a>
            </div>
        @else
            <div class="row justify-content-center">
                <a href="{{ route('companies.index') }}" class="btn btn-primary btn-lg mr-2">Companies</a>
                <a href="{{ route('contacts.index') }}" class="btn btn-success btn-lg">Contacts</a>
            </div>
        @endguest
    </div>
    <footer class="py-3 footer">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div>
                    <a href="https://github.com/sun-php/contact_app" target="_blank"><i
                            class="icon-cont icon-github-circled"></i></a>
                    <a href="https://www.linkedin.com/in/serhii1/" target="_blank"><i
                            class="icon-cont icon-linkedin-squared"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                sunprog.php@gmail.com
            </div>
        </div>
    </footer>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
@endpush
