<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>คลองนครเนื่องเขต</title>

    <link rel="stylesheet" href="welcome/welcome.css">

<body class="antialiased">

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <!-- Starbackground -->
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>

            <!-- parallax text/java -->
            <div id="parallax">
                <div class="layer" data-depth="0.6">

                    <!-- text -->
                    <div class="some-space">
                        <h1>Welcome</h1>
                    </div>

                </div>
                <div class="layer" data-depth="0.4">
                    <div id="particles-js"></div>
                </div>

                <!-- Button -->

                <br>
                <br>
                <div class="layer" data-depth="0.3">
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">เข้าสู่เว็บไซต์</a>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"
integrity="sha512-ES/eSqVi/9sgeZfvunOto+gwgFGrD/hzi5UOJFDR1Me8acKSBJIb2Gk0IyKje2ZaX+OovAG2/bRzj/uBcNeesg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"
integrity="sha512-jq8sZI0I9Og0nnZ+CfJRnUzNSDKxr/5Bvha5bn7AHzTnRyxUfpUArMzfH++mwE/hb2efOo1gCAgI+1RMzf8F7g=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#parallax').parallax({
        invertX: true,
        invertY: true,
        scalarX: 15,
        frictionY: .1
    });
</script>

</html>
