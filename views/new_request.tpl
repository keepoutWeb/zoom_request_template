{block name=term}{/block}
{block name=page-title}{/block}
        <div class="page page-center">
            <div class="container-tight py-4">
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