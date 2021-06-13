{extends file='layout.tpl'}
{block name=title}Meeting Details{/block}
{block name=content}
    <div class="card-body py-4">
        <h1 class="text-center">Zoom Account License Request Form</h1>
        <p class="text-muted">Your email will be recorded when you submit this form</p>
        <p class="text-muted">Not email@cbsua.edu.ph? Switch account</p>
        <p class="text-red">*Required</p>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Meeting/Activity details</div>
    <div class="card-body">
        <div class="mb-3">
            <input type="hidden" class="form-control ps-1" id="fullname" name="fullname" value="{$info['fullname']}" readonly>
            <input type="hidden" class="form-control ps-1" id="office_dept_college" name="office_dept_college" value="{$info['office_dept_college']}" readonly>
            <input type="hidden" class="form-control ps-1" id="position_designation" name="position_designation" value="{$info['position_designation']}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Institutional Email Address: (to be used as a host) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="email" name="email" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input id="date_picker" name="date_picker" readonly/>
                <script>
                    let do_today, do_datepicker;
                    do_today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                    do_datepicker = $('#date_picker').datepicker({
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy-mm-dd'
                    });
                </script>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Time <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input id="timepicker" name="timepicker" width="100%" readonly/>
                <script>
                    $('#timepicker').timepicker({ uiLibrary: 'materialdesign', format: 'hh:MM tt' });
                </script>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Meeting/Webinar Topic <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="topic" name="topic" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Number of Participants: (Approx) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="number" class="form-control ps-1" id="no_participant" name="no_participant" autocomplete="off">
            </div>
        </div>
    </div>
{/block}

{block name=progress}100%{/block}
{block name=btnobject}
    <a href="javascript:void(0)" class="btn btn-success" title="Preview" data-bs-toggle="modal" data-bs-target="#modal-preview">Preview</a>
    <input type="submit" name="submit" id="btnnext" class="btn btn-primary" value="Submit"></input>
{/block}