@extends('layouts.app')

@section('content')

        <!-- Sign In Section Start -->
        <div class="signin-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-3">
                        <form class="signin-form" method="post" action="login">
                            @csrf
                            <center>

                                <h3>LOGIN</h3>
                                <p>connectez vous pour acceder à votre espace</p>
                                <br>
                            </center>

                            <div class="form-group">
                              <label>Email</label>
                              <input name="email" type="email" class="form-control" placeholder="Entrez votre Email" required>
                            </div>

                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input name="password" type="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                            </div>

                            <div class="signin-btn text-center">
                                <button type="submit">Se connecter</button>
                            </div>

                            {{-- <div class="other-signin text-center">
                                <span>Or sign in with</span>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-google'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="create-btn text-center">
                                <p>Not have an account?
                                    <a href="signup.html">
                                        Create an account
                                        <i class='bx bx-chevrons-right bx-fade-right'></i>
                                    </a>
                                </p>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In Section End -->

@endsection
