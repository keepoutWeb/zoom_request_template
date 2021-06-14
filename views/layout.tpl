<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>{block name=title}Default Page Title{/block}</title>

        <script src="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/js/tabler.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/css/tabler.min.css">

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
        <form id="form">
            <div class="modal modal-blur fade" id="modal-preview" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Zoom Account License Request Form (PREVIEW)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Full Name </label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_fullname" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Office/Department/College</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_office_dept_college" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Position/Designation</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_position_designation" autocomplete="off" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-text hr-text-center hr-text-spaceless mb-2">Meeting/Activity details</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Institutional Email Address: (to be used as a host) </label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_email" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_date_picker" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Time</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_timepicker" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Meeting/Webinar Topic</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_topic" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Number of Participants: (Approx)</label>
                                    <div class="input-group input-group-flat">
                                        <input type="text" class="form-control ps-1" id="prev_no_participant" autocomplete="off" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {block name=term}{/block} 
        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="text-center mb-1">
                    <img src="./public/img/cbsua.jpg" width=100%" alt="">
                </div>
                <form method="POST" action="">
                    <div class="card card-md">
                        {block name=content}{/block} 
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
                                {block name=btnobject}{/block}
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
                let page = "{$info['page']}"
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

            $('#modal-preview').on('show.bs.modal', function (e) {
                $('#prev_fullname').val($('#fullname').val().trim())
                $('#prev_office_dept_college').val($('#office_dept_college').val().trim())
                $('#prev_position_designation').val($('#position_designation').val().trim())
                $('#prev_email').val($('#email').val().trim())
                $('#prev_date_picker').val($('#date_picker').val().trim())
                $('#prev_timepicker').val($('#timepicker').val().trim())
                $('#prev_topic').val($('#topic').val().trim())
                $('#prev_no_participant').val($('#no_participant').val().trim())
            })

            $('#modal-preview').on('hidden.bs.modal', function () {
                $("#form").trigger( "reset" );
            })
            
            $('#accept').on('click', function() {
                if ($("#rterm").is(":checked")) {
                    $('#modal-term').modal('toggle');
                } else {
                    alert("Please check the term & condition.")
                }
            })

            $(document).ready(function() {
                $('#modal-term').modal('show');
            });
        </script>
    </body>
</html>