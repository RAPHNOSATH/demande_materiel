@extends('layouts.app', ['title'=>"Mon profil"])
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('auth.profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('auth.profile.partials.update-password-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('auth.profile.partials.delete-user-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl row">
                    <div class="ml-3 col-lg-3 col-md-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{asset('images/logo-mini.svg')}}" class="user-img" alt="user-photo">
                                            </div>
                                            <div class="text-center">
                                                @if(auth()->check())
                                                    {{Auth::user()->name}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card project_widget">
                                            <div class="body">
                                                <div class="card">
                                                    <h2 style="text-align: center;"> ÉTAT CIVIL </h2>
                                                    <div class="body">
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <span class="niss-font">
                                                                    *
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                Nom complet : <span class="niss-font">
                                                                    {{Auth::user()->name}}
                                                                </span>
                                                            </li>

                                                            <li class="list-group-item">
                                                                Date de naissance :
                                                                <span class="niss-font">
                                                                    *
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <h2 style="text-align: center;"> CONTACT </h2>
                                                    <div class="body">
                                                        <ul>
                                                            <li class="list-group-item">
                                                                Email :
                                                                <span class="niss-font">
                                                                    {{Auth::user()->email}}
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                Numéro de téléphone :
                                                                <span class="niss-font">
                                                                    *
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                Adresse :
                                                                <span class="niss-font">
                                                                    *
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
