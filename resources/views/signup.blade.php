<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,400&family=Roboto:wght@100;300;400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.css"
        integrity="sha512-TZTUnuHs1njGko8PJqZlHzqZTZd880A+BvhR1jy1v4mWB4VFKVLG/eK9LYdDjxqNLmttSC1ygmqg6rkYjnEgaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script src="https://kit.fontawesome.com/3b10d45e53.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#icon").click(function() {
                $("ul").toggleClass("show");
            });
        });
    </script>
    <title>login page</title>
</head>

<body>
    <nav>
        <label class="logo"><a id="logo" href="{{ asset('/') }}">HGCK</a></label>
        <ul>
            <li><a href="{{ asset('/login') }}">Login</a></li>
            <li><a class="active">Sign Up</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>

    <section class="web-content">
        <div class="form-area">
            <form action="{{ route('savelogin') }}" method="post">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <center>{{ Session::get('success') }}</center>
                    </div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        <center>{{ Session::get('fail') }}</center>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-title">
                    <div>Sign Up</div>
                </div>

                <div class="input-feild">
                    <label for="">Name</label>
                    <input class="inpt" type="text" id="name" placeholder="Enter your name" name="name"
                        value="{{ old('name') }}" /><br />
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <label for="">Email Address</label>
                    <input class="inpt" type="text" id="email" placeholder="abcdefgh@gmail.com" name="email"
                        value="{{ old('email') }}" /><br />
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <label for="">Phone Number</label>
                    <input class="inpt" type="text" id="telNo" placeholder="07........" name="telNo"
                        value="{{ old('telNo') }}" /><br />
                    <span class="text-danger">
                        @error('telNo')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <label for="">UserName</label>
                    <input class="inpt" type="text" id="userName" placeholder="Enter user name" name="userName"
                        value="{{ old('userName') }}" /><br />
                    <span class="text-danger">
                        @error('userName')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <label for="">Password</label>
                    <input class="inpt" type="password" id="password" placeholder="Enter your password"
                        name="password" value="{{ old('password') }}" /><br />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <label for="">Re-Enter Password</label>
                    <input class="inpt" type="password" id="password2" placeholder="Re-Enter your password"
                        name="password2" value="{{ old('password2') }}" /><br />
                    <span class="text-danger">
                        @error('password2')
                            {{ $message }}
                        @enderror
                    </span>
                    <br>
                    <div class="button-sec" id="ab">
                        <input class="button" type="submit" id="sub_btn" value="Sign Up" />
                    </div>
                    <div class="abc">
                        <a href="{{ asset('/login') }}"> Already have an account</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
