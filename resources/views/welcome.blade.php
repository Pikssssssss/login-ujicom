
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login|Adin</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body style="background-color: rgba(137, 233, 240, 0.445)">    <div class="container" >
        <div class="row">
            <div class="col col-6 mt-5 text-center" >
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators ">
                        <button type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide-to="0" class="active text-black" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('img/vector_image.png') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/R (3).png') }}" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/finance-clipart-financial-model-4.png') }}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
                  </div>



            </div>
            <div class="col col-md-6 mt-5">

                    <h1 >Welcome <Script></Script><br /></h1>
                    <p class="opacity-50">Star managing your finance faster and better</p>
                    <div class="container">
                        <form action="{{ url('login/admin') }}" method="post">
                            @csrf
                            <div class="mb-3 ">

                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password"name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="text">
                                <button type="submit" class="tombol_login w-100 btn btn-primary mt-3">Sign In</button>
                            </div>
                            <div class="row">
                                <div class="col-6">
                        </form>

                                <input type="checkbox">
                                <span>Remember me</span>

                            </div>


                          </div>


                            <div class="border-top col-md-12 mt-4">
                                <p class="text-center"> or</p>
                            </div>

                        <div class="row ">
                                  <div class="container col-md-3 py-3">
                                    <button class="border-info " style="height: 40px;">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                        <a href="https://www.facebook.com/" target="_blank" class="fw-bold text-decoration-none">Facebook</a>
                                    </button>
                                </div>
                            <div class="container col-md-3 py-3">
                                <button class="border-info "style="height: 40px;" >



                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi-google" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                      </svg>
                                      <a href="https://accounts.google.com/InteractiveLogin/identifier?elo=1&ifkv=Af_xneG0YRv1V5xIaEfZT0Hxc5TBTqtu_cRFPS0QIr9GOBDOPlnVYcA6se3Yk3XIhC0d9-Ck8bNfpQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" class="fw-bold text-decoration-none">Google</a>
                                </button>
                            </div>

                        </div>


                        <div>
                                <center><p>Don't have an account?      <a href="/register/admin">Sign Up</a></p></center>
                        </div>
                        <footer class="col-12 my-3 py-3">
                            <div class="container text-center opacity-25 ">
                             @2022 Taufik  sabillah
                            </div>
                         </footer>


                    </div>

                </div>


        </div>

    </div>


</body>
</html>

