<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPANEL - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1,
        .header h2 {
            margin: 0;
        }

        .header h2 {
            font-size: 1.2em;
            color: #666;
            text-align: right;
        }
    </style>

    <link rel="stylesheet" href="{{asset('Admin/css/vendors_css.css')}}">
    <!-- Style-->
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/css/skin_color.css')}}">
</head>

<body>
    <div class="header">
        <h1>SPANEL</h1>
        <h2>RU II HUMAN CAPITAL RU II</h2>
    </div>
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary" style="text-align: left;">Sign In</h2>
                            </div>
                            <div class="p-40">
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1">
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot Password?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('Admin/js/vendors.min.js')}}"></script>
    <script src="{{asset('Admin/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>
</body>

</html>