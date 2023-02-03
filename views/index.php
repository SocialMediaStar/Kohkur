<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $component = new Component('head', location . "components/");
    $component->print();
    ?>
</head>
<body class="mod-bg-1 mod-nav-link mod-skin-light">
<?php
$component = new Component('themeSettings', location . "components/");
$component->print();
?>
<div class="page-wrapper">
    <div class="page-inner">
        <?php
        $component = new Component('aside', location . "components/");
        $component->print();
        ?>
        <div class="page-content-wrapper">
            <?php
            $component = new Component('header', location . "components/");
            $component->print();
            ?>
            <main id="js-page-content" role="main" class="page-content">
                <?php if ($user->is_admin) { ?>
                    <div class="alert alert-primary">
                        <div class="d-flex flex-start w-100">
                            <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                            </div>
                            <div class="d-flex flex-fill">
                                <div class="flex-fill">
                                    <span class="h5">Pro Tip!</span>
                                    <p>
                                        If you don't know where to start, this is a good page to start your application.
                                        It comes with the basics to get you started. Contains a good inline
                                        documentation and waypoints to guide you with your project. Use this area of the
                                        page as an attention grabber. Users are likely to respond or pay attention when
                                        you involve a color icon along with your information (as displayed here on the
                                        left).
                                    </p>
                                    <p class="m-0">
                                        Follow a slogal with a useful link or call to action <a href="#"
                                                                                                target="_blank">Call to
                                            action >></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Viimased tellimused
                                </h2>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <table id="dt-basic-example"
                                           class="table table-bordered table-hover table-striped w-100">
                                        <thead>
                                        <tr>
                                            <th>5O</th>
                                            <th>Staatus</th>
                                            <th>Hind kokku</th>
                                            <th>Kuupäev</th>
                                            <th>Tegevus</th>
                                        </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Teavitused
                                </h2>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content bg-subtlelight-fade">
                                    <div class="slimScrollDiv"
                                         style="position: relative; overflow: hidden; width: auto; height: 100%;">
                                        <ul class="notification"
                                            style="overflow: hidden; width: auto; height: 100%;"></ul>
                                        <div class="slimScrollBar"
                                             style="background: rgba(0, 0, 0, 0.6); width: 4px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 4px; height: 221.461px;"></div>
                                        <div class="slimScrollRail"
                                             style="width: 4px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(250, 250, 250); opacity: 0.2; z-index: 90; right: 4px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Järgmise nädala soovid
                                </h2>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content bg-subtlelight-fade">
                                    <table class="table table-bordered" id="wishListTable">
                                        <thead>
                                        <th>Toode</th>
                                        <th>Kogus</th>
                                        <th>Tegevus</th>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Aktiivne küsitlus
                                </h2>
                            </div>
                            <form method="POST" id="activePollForm" action="javascript:void(0)">
                                <div class="panel-container show" id="pollDiv">
                                    <div class="panel-content bg-subtlelight-fade">
                                        <h3 id="activePollQuestion">
                                        </h3>
                                        <div id="activePollAnswers" class="d-flex flex-column col-12 mt-4 mb-4">
                                        </div>
                                        <textarea class="form-control shadow-inset-2 form-control-lg"
                                                  name="pollComment"
                                                  placeholder="Siia võid lisada kommentaari"></textarea>
                                        <button type="submit" class="btn btn-primary mt-2">Esita vastus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
            <?php
            $component = new Component('modal', location . "components/");
            $component->print();
            ?>
            <?php
            $component = new Component('footer', location . "components/");
            $component->print();
            ?>
            <?php
            $component = new Component('shortcut', location . "components/");
            $component->print();
            ?>

            <p id="js-color-profile" class="d-none">
                <span class="color-primary-50"></span>
                <span class="color-primary-100"></span>
                <span class="color-primary-200"></span>
                <span class="color-primary-300"></span>
                <span class="color-primary-400"></span>
                <span class="color-primary-500"></span>
                <span class="color-primary-600"></span>
                <span class="color-primary-700"></span>
                <span class="color-primary-800"></span>
                <span class="color-primary-900"></span>
                <span class="color-info-50"></span>
                <span class="color-info-100"></span>
                <span class="color-info-200"></span>
                <span class="color-info-300"></span>
                <span class="color-info-400"></span>
                <span class="color-info-500"></span>
                <span class="color-info-600"></span>
                <span class="color-info-700"></span>
                <span class="color-info-800"></span>
                <span class="color-info-900"></span>
                <span class="color-danger-50"></span>
                <span class="color-danger-100"></span>
                <span class="color-danger-200"></span>
                <span class="color-danger-300"></span>
                <span class="color-danger-400"></span>
                <span class="color-danger-500"></span>
                <span class="color-danger-600"></span>
                <span class="color-danger-700"></span>
                <span class="color-danger-800"></span>
                <span class="color-danger-900"></span>
                <span class="color-warning-50"></span>
                <span class="color-warning-100"></span>
                <span class="color-warning-200"></span>
                <span class="color-warning-300"></span>
                <span class="color-warning-400"></span>
                <span class="color-warning-500"></span>
                <span class="color-warning-600"></span>
                <span class="color-warning-700"></span>
                <span class="color-warning-800"></span>
                <span class="color-warning-900"></span>
                <span class="color-success-50"></span>
                <span class="color-success-100"></span>
                <span class="color-success-200"></span>
                <span class="color-success-300"></span>
                <span class="color-success-400"></span>
                <span class="color-success-500"></span>
                <span class="color-success-600"></span>
                <span class="color-success-700"></span>
                <span class="color-success-800"></span>
                <span class="color-success-900"></span>
                <span class="color-fusion-50"></span>
                <span class="color-fusion-100"></span>
                <span class="color-fusion-200"></span>
                <span class="color-fusion-300"></span>
                <span class="color-fusion-400"></span>
                <span class="color-fusion-500"></span>
                <span class="color-fusion-600"></span>
                <span class="color-fusion-700"></span>
                <span class="color-fusion-800"></span>
                <span class="color-fusion-900"></span>
            </p>
        </div>
    </div>
</div>
<?php
$component = new Component('quickmenu', location . "components/");
$component->print();
?>
<?php
$component = new Component('javascript', location . "components/");
$component->print();
?>

<script>
    ShowOrdersTable()
    wishListTable();
    ShowActivePoll()
</script>
</body>
</html>
