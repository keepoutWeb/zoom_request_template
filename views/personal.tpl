{extends file='layout.tpl'}
{block name=title}Personal Details{/block}
{block name=content}
    <div class="card-body py-4">
        <h1 class="text-center">Zoom Account License Request Form</h1>
        <p class="text-muted">Your email will be recorded when you submit this form</p>
        <p class="text-muted">Not email@cbsua.edu.ph? Switch account</p>
        <p class="text-red">*Required</p>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" name="fullname" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" name="office_dept_college" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="position_designation" name="position_designation" autocomplete="off">
            </div>
        </div>
    </div>
{/block}

{block name=progress}50%{/block}
{block name=btnobject}
    <input type="submit" name="next" id="btnnext" class="btn btn-primary" value="Next"></input>
{/block}