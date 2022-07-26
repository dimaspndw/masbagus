<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt style="margin: auto 0px;">
                    <img src="{{asset('assets/images/img-01.png')}}" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{Route('add')}}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Silahkan masukkan data anda
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <select class="input100" style="border: none !important;" name="gender">
                            <option style="padding-left: 20px !important;">Pilih gender anda...</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-genderless" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="usia" placeholder="Berapa usia anda?">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <select class="input100" style="border: none !important;" name="disabilitas">
                            <option>Jenis disabilitas...</option>
                            <option value="Kelainan Tubuh (Tuna Daksa)">Kelainan Tubuh (Tuna Daksa)</option>
                            <option value="Kelainan Indera Penglihatan (Tuna Netra)">Kelainan Indera Penglihatan (Tuna Netra)</option>
                            <option value="Kelainan Pendengaran (Tunarungu)">Kelainan Pendengaran (Tunarungu)</option>
                            <option value="Kelainan Bicara (Tunawicara)">Kelainan Bicara (Tunawicara)</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-wheelchair" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <textarea class="input100" placeholder="Leave a comment here" id="floatingTextarea" style="height: 10em; padding: 20px !important;" name="pesan"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" style="background-color: #e6e6e6 !important; border-radius: 25px !important;">
                        <label style="padding: 20px 20px 0px 20px !important;">Apakah anda sudah vaksin 1,2 & 3?</label>
                        <div class="form-check" style="padding-left: 40px !important;">
                            <input class="form-check-input" type="radio" name="status_vaksin" id="flexRadioDefault1" value="Sudah">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Sudah
                            </label>
                        </div>
                        <div class="form-check" style="padding-left: 40px !important;padding-bottom: 20px !important;">
                            <input class="form-check-input" type="radio" name="status_vaksin" id="flexRadioDefault2" value="Belum">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum
                            </label>
                        </div>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Input data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
        // setTimeout(function() {
        //     window.location.reload(1);
        // }, 1000);
    </script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        function refreshAt(hours, minutes, seconds) {
            var now = new Date();
            var then = new Date();

            if (now.getHours() > hours ||
                (now.getHours() == hours && now.getMinutes() > minutes) ||
                now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
                then.setDate(now.getDate() + 1);
            }
            then.setHours(hours);
            then.setMinutes(minutes);
            then.setSeconds(seconds);

            var timeout = (then.getTime() - now.getTime());
            setTimeout(function() {
                window.location.reload(true);
            }, timeout);
        }

        //refresh the page at 23:00:00
        refreshAt(08, 24, 5);
    </script>

</body>

</html>