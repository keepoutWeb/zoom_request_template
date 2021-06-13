<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{block name=title}Default Page Title{/block}</title>
        {block name=head}{/block}
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <style>
            .gj-datepicker-bootstrap [role=right-icon] button {
                height: 100%;
            }
        </style>
    </head>
    
    <body>
        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="text-center mb-1">
                    <img src="./public/img/cbsua.jpg" width=100%" alt="">
                </div>
                <form method="POST" action="">
                    <div class="card card-md">
                        <div class="card-body py-4">
                            <h1 class="text-center">Zoom Account License Request Form</h1>
                            <p class="text-muted">Your email will be recorded when you submit this form</p>
                            <p class="text-muted">Not email@cbsua.edu.ph? Switch account</p>
                            <p class="text-red">*Required</p>
                        </div>
                        {block name=personal}{/block} 
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <div class="progress">
                                <div class="progress-bar" style="width: {block name=progress}{/block}" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span class="visually-hidden">25% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="btn-list justify-content-end">
                                <input type="submit" name="submit" id="btnnext" class="btn btn-primary" value="{block name=btnname}{/block}"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function Error(id) {
                $(id).css('border', '1px solid #ff0000');
            }

            function Correct(id) {
                $(id).css('border', '1px solid #ccc');
            }

            $('form #btnnext').on('click', function(e) {
                let page = "{$page}"
                let is_check = true

                if (page == 1) {
                    let fullname = $('#fullname').val().trim()
                    let office_dept_college = $('#office_dept_college').val().trim()
                    let position_designation = $('#position_designation').val().trim()

                    if (fullname.length == 0) { Error("#fullname"); is_check = false; } else { Correct("#fullname") }
                    if (office_dept_college.length == 0) { Error("#office_dept_college"); is_check = false; } else { Correct("#office_dept_college") }
                    if (position_designation.length == 0) { Error("#position_designation"); is_check = false; } else { Correct("#position_designation") }
                } else if (page == 2) {
                    let email = $('#email').val().trim()
                    let date_picker = $('#date_picker').val().trim()
                    let timepicker = $('#timepicker').val().trim()
                    let topic = $('#topic').val().trim()
                    let no_participant = $('#no_participant').val().trim()

                    if (email.length == 0) { Error("#email"); is_check = false; } else { Correct("#email") }
                    if (date_picker.length == 0) { Error("#date_picker"); is_check = false; } else { Correct("#date_picker") }
                    if (timepicker.length == 0) { Error("#timepicker"); is_check = false; } else { Correct("#timepicker") }
                    if (topic.length == 0) { Error("#topic"); is_check = false; } else { Correct("#topic") }
                    if (no_participant.length == 0) { Error("#no_participant"); is_check = false; } else { Correct("#no_participant") }
                }
            
                if (is_check == false)
                    e.preventDefault();

            })
        </script>
    </body>
</html>