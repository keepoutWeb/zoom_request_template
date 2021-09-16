<!doctype html>
<html>
    {include file="header.tpl"}
    <body class="antialiased">
        <div class="wrapper">
            {include file="nav-bar.tpl"}
            <div class="page-wrapper">
              {block name=page-title}
                <div class="container-xl">
                    <!-- Page title -->
                    <div class="page-header d-print-none">
                      <div class="row align-items-center">
                        <div class="col">
                          <!-- Page pre-title -->
                          <div class="page-pretitle">Overview</div>
                          <h2 class="page-title">Dashboard</h2>
                        </div>
                      </div>
                    </div>
                </div>
                {/block}
                <!-- Page content here -->
                <div class="page-body">
                    <div class="container-xl">
                      {block name=content}{/block}
                    </div>
                </div>
                <!-- Page footer here -->
                {include file="footer.tpl"}
            </div>
        </div>
    </body>
    <script src="public\scripts\ioshfubsd.js"></script>
</html>