@extends('layouts.defaults.app')

@section('title', __('title.default_title'))

@push('styles')

@endpush

@section('content')
    @include('layouts.defaults.carousel')
    <div class="container mt-3 mb-3 text-center justify-content-center">
        <h1>{{ __('dictionary.txt_welcome_to_my_website') }}</h1>
    </div>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg">
                <card class="card">
                    <card-header class="card-header text-bg-dark">{{ __('dictionary.txt_welcome_card_1_title') }}:</card-header>
                    <card-body class="card-body"></card-body>
                    <card-footer class="card-footer text-bg-dark text-center justify-content-center">
                        <a class="btn text-light" href="">{{ __('dictionary.txt_welcome_card_1_button') }}</a>
                    </card-footer>
                </card>
            </div>
            <div class="col-lg">
                <card class="card">
                    <card-header class="card-header text-bg-dark">{{ __('dictionary.txt_welcome_card_2_title') }}:</card-header>
                    <card-body class="card-body"></card-body>
                    <card-footer class="card-footer text-bg-dark text-center justify-content-center">
                        <a class="btn text-light" href="">{{ __('dictionary.txt_welcome_card_2_button') }}</a>
                    </card-footer>
                </card>
            </div>
            <div class="col-lg">
                <card class="card">
                    <card-header class="card-header text-bg-dark">{{ __('dictionary.txt_welcome_card_3_title') }}:</card-header>
                    <card-body class="card-body"></card-body>
                    <card-footer class="card-footer text-bg-dark text-center justify-content-center">
                        <a class="btn text-light" href="">{{ __('dictionary.txt_welcome_card_3_button') }}</a>
                    </card-footer>
                </card>
            </div>
            <div class="col-lg">
                <card class="card">
                    <card-header class="card-header text-bg-dark">{{ __('dictionary.txt_welcome_card_4_title') }}:</card-header>
                    <card-body class="card-body"></card-body>
                    <card-footer class="card-footer text-bg-dark text-center justify-content-center">
                        <a class="btn text-light" href="">{{ __('dictionary.txt_welcome_card_4_button') }}</a>
                    </card-footer>
                </card>
            </div>
        </div>
    </div>

    <div class="container p-2 mt-5 mb-3 text-bg-dark text-center">
        <h2>{{ __('dictionary.txt_items') }}</h2>
    </div>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
        </div>
    </div>

    <div class="container p-2 mt-5 mb-3 text-bg-dark text-center">
        <h2>{{ __('dictionary.txt_notes') }}</h2>
    </div>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-2">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
        </div>
    </div>

    <div class="container p-2 mt-5 mb-3 text-bg-dark text-center">
        <h2>{{ __('dictionary.txt_projects') }}</h2>
    </div>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
        </div>
    </div>

    <div class="container p-2 mt-5 mb-3 text-bg-dark text-center">
        <h2>{{ __('dictionary.txt_themes') }}</h2>
    </div>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
            <div class="col-lg-4 mt-3">
                <card class="card">
                    <img src="https://cdn.pixabay.com/photo/2014/06/03/19/38/board-361516__340.jpg" class="card-img-top" alt="">
                </card>
            </div>
        </div>
    </div>

    <div class="container p-2 mt-5 mb-3 text-bg-dark text-center">
        <h2>{{ __('dictionary.txt_newsletter') }}</h2>
    </div>
    <form class="container mt-3 mb-3">
        <label for="inputPassword5" class="form-label">{{ __('dictionary.txt_newsletter_title') }}:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                {{ __('dictionary.txt_newsletter_checkbox1') }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                {{ __('dictionary.txt_newsletter_checkbox2') }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                {{ __('dictionary.txt_newsletter_checkbox3') }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                {{ __('dictionary.txt_newsletter_checkbox4') }}
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                {{ __('dictionary.txt_newsletter_checkbox5') }}
            </label>
        </div>
        <input type="email" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder=" {{ __('dictionary.txt_newsletter_description') }}">
        <button class="btn btn-dark mt-2">Submit your email</button>
    </form>
@endsection

@push('scripts')

@endpush
