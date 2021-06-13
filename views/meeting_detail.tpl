{extends file='layout.tpl'}
{block name=title}Meeting Details{/block}
{block name=head}
    <script src="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/css/tabler.min.css">
{/block}
{block name=personal}
    <div class="hr-text hr-text-center hr-text-spaceless">Meeting/Activity details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Institutional Email Address: (to be used as a host) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="email" autocomplete="off">
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
                <input type="text" class="form-control ps-1" id="topic" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Number of Participants: (Approx) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="number" class="form-control ps-1" id="no_participant" autocomplete="off">
            </div>
        </div>
    </div>
{/block}

{block name=progress}100%{/block}
{block name=btnname}Submit{/block}