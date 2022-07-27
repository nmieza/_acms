<?php
error_reporting(0); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIR CARGO MANAGEMENT SYSTEM</title>
    <link rel="icon" href="http://localhost/_acms/uploads/logo-1645494239.jpg?v=1645494239">
    <body class="hold-transition login-page">
    <style>

    html 
    {
        height: 100%;
    }
    body
    {
        margin:0;
        padding:0;
        background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(ap.jpg); 
        align-items: center;
    }

    .login-box
    {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }

    .login-box h2
    {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box
    {
        position: relative;
    }

    .login-box .user-box input
    {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .login-box .user-box label
    {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label
    {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a
    {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover
    {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
    }

    .login-box a span
    {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1)
    {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1
    {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2)
    {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2
    {
        0%
        {
            top: -100%;
        }
        50%,100%
        {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3)
    {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3
    {
        0%
        {
            right: -100%;
        }
        50%,100%
        {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4)
    {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4
    {
        0%
        {
            bottom: -100%;
        }
        50%,100%
        {
            bottom: 100%;
        }
    }

    .carousel-item>img
    {
        object-fit:fill !important;
    }

    #carouselExampleControls .carousel-inner
    {
        height:280px !important;
    }

    .mob-img
    {
        width:50px;
        height:100px;
        object-fit:scale-down;
        object-position:center center;
    }

    .mob-img-selected
    {
        width:50px;
        height:65px;
        object-fit:scale-down;
        object-position:center center;
    }

    span.select2-selection.select2-selection--single
    {
        height: auto !important;
    }

    span.select2-selection__arrow
    {
        top: 20% !important;
    }

	</style>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="dc77af6c-5ed3-4ca4-abda-a63dbc746872";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	</head>

<body>
<?php include 'log.php'; ?>
    <div class="login-box">
        <h2  class="badge" style=" background-color: grey; color:#000015 ;padding:10px">
            <section class="py-0">
                <div class="container">
                    <div class="col-lg-12 py-2">
                        <div class="container px-4 px-lg-5 mt-5">
                            <form action="" id="trace-frm">
                                <div class="card card-outline card-primary rounded-0 shadow">
                                    <div class="card-body">
                                    <fieldset>
                                        <legend>Trace your Cargo</legend>
                                        <div class="row align-items-end">
                                            <div class="form-group col-md-6">
                                                <label for="mobile1" class="control-label"></label>
                                                <input type="text" class="form-control form-control-lg rounded-0" name="ref_code" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button class="btn btn-default bg-gradient-primary btn-flat btn-lg text-light w-50">Trace Now</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                    </div>
                                </div>
                            </form>
                            </h2>
                            <div class="clear-fix mb-3"></div>

                        </div>
                </div>
                </div>
            </section>
            <script>
                $(function(){
                    
                    $('#trace-frm').submit(function(e){
                        e.preventDefault();
                        location.href="./?p=trace&"+$(this).serialize();
                    })
                })

            </script>
    </div>
</body>
</html>
