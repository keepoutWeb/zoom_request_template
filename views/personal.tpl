{extends file='layout.tpl'}
{block name=title}Personal Details{/block}
{block name=head}
    <script src="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/css/tabler.min.css">
{/block}
{block name=personal}
    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="position_designation" autocomplete="off">
            </div>
        </div>
    </div>
{/block}

{block name=progress}50%{/block}
{block name=btnname}Next{/block}
