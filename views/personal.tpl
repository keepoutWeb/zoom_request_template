{extends file='layout.tpl'}
{block name=title}Personal Details{/block}
{block name=page-title}{/block}
{block name=term}
    <div class="modal modal-blur fade" id="modal-term" tabindex="-1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title hr-text hr-text-center ">Term of Use Zoom Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                        
                        <label class="form-check mt-3">
                            <input type="checkbox" class="form-check-input" id="rterm"/>
                            <span class="form-check-label required">I agree to the Terms & Conditions</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm" id="accept">Accept</button>
                </div>
            </div>
        </div>
    </div>
{/block}
{block name=content}
<div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="card">
    <div class="card-body py-4">
        <h1 class="text-center">Zoom Account License Request Form</h1>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <div class="form-label">Campus <span class="text-red">*</span></div>
            <select class="form-select" name="campus_id" required>
              <option value="1">Pili</option>
              <option value="2">Sipocot</option>
              <option value="3">Calabanga</option>
              <option value="4">Pasacao</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Employee Name <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control" id="fullname" name="fullname" autocomplete="off" value="{$user_profile.given_name} {$user_profile.family_name}" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control" id="office_dept_college" name="office_dept_college" autocomplete="off" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control" id="position_designation" name="position_designation" autocomplete="off" required>
            </div>
        </div>
    </div>
</div></div>
</div>
{/block}

{block name=progress}50%{/block}
{block name=btnobject}
    <input type="submit" name="next" id="btnnext" class="btn btn-primary" value="Next"></input>
{/block}