<!DOCTYPE html>
<html>
    <head>
        <title> Numbers checker. </title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Cairo&display=swap');
            .btn-primary {
                color:#fff;
                background-color:#007bff;
                border-color:#007bff;
            }
            .btn-primary:hover {
                color:#fff;
                background-color:#0069d9;
                border-color:#0062cc;
            }
            .btn-primary.focus,.btn-primary:focus {
                box-shadow:0 0 0 .2rem rgba(38,143,255,.5);
            }
            .btn {
                display:inline-block;
                font-weight:400;
                color:#212529;
                text-align:center;
                vertical-align:middle;
                -webkit-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                user-select:none;
                background-color:transparent;
                border:1px solid transparent;
                padding:.375rem .75rem;
                font-size:1rem;
                line-height:1.5;
                border-radius:.25rem;
                transition:color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }
            @media (prefers-reduced-motion:reduce){
                .btn {
                    transition:none;
                }
            }
            .btn:hover{
                color:#212529;
                text-decoration:none;
            }
            .btn.focus,.btn:focus{
                outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
            }
            input[type="number"] {
                margin-top: 10px;
                margin-right: 5px;
                border: 2px solid #bdc3c7;
                color: #34495e;
                font-size: 12px;
                line-height: 1.467;
                padding: 8px 12px;
                border-radius: 6px;
                box-shadow: none;
                -webkit-transition: border 0.25s linear, color 0.25s linear, background-color 0.25s linear;
                transition: border 0.25s linear, color 0.25s linear, background-color 0.25s linear;
            }
        </style>
    </head>
    <body bgcolor="#d4d4d4" style="font-family: 'Cairo', SANS-SERIF;">
        <div align="center" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
           <form action="check.php" method="POST" autocomplete="off">
                <label>Number : </label>
                <input type="number" id="number" name="number" required autofocus>
                <br />
                <input style="margin-top: 1vh;" type="submit" value="Check" class="btn btn-primary">
            </form>
        </div> 
    </body>
</html>
