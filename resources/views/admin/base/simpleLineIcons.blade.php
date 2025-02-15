<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Simple Line Icons - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    @include('admin.layouts._css')
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('admin.layouts._sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
      @include('admin.layouts._mainHeader')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Icons</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Base</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Line Awesome</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Simple Line Icons</div>
                    <div class="card-category">
                      Simple and Minimal Line Icons from
                      <a
                        class="link"
                        href="https://github.com/thesabbir/simple-line-icons"
                        >Simple Line Icons</a
                      >
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="row-demo-icon" class="row"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('admin.layouts._footer')
      </div>

      <!-- Custom template | don't include it in your project! -->
      @include('admin.layouts._customTemplate')
      <!-- End Custom template -->
    </div>
    @include('admin.layouts._js')
    <script>
      var iconClass = [
        "icon-user",
        "icon-people",
        "icon-user-female",
        "icon-user-follow",
        "icon-user-following",
        "icon-user-unfollow",
        "icon-login",
        "icon-logout",
        "icon-emotsmile",
        "icon-phone",
        "icon-call-end",
        "icon-call-in",
        "icon-call-out",
        "icon-map",
        "icon-location-pin",
        "icon-direction",
        "icon-directions",
        "icon-compass",
        "icon-layers",
        "icon-menu",
        "icon-list",
        "icon-options-vertical",
        "icon-options",
        "icon-arrow-down",
        "icon-arrow-left",
        "icon-arrow-right",
        "icon-arrow-up",
        "icon-arrow-up-circle",
        "icon-arrow-left-circle",
        "icon-arrow-right-circle",
        "icon-arrow-down-circle",
        "icon-check",
        "icon-clock",
        "icon-plus",
        "icon-close",
        "icon-trophy",
        "icon-screen-smartphone",
        "icon-screen-desktop",
        "icon-plane",
        "icon-notebook",
        "icon-mustache",
        "icon-mouse",
        "icon-magnet",
        "icon-energy",
        "icon-disc",
        "icon-cursor",
        "icon-cursor-move",
        "icon-crop",
        "icon-chemistry",
        "icon-speedometer",
        "icon-shield",
        "icon-screen-tablet",
        "icon-magic-wand",
        "icon-hourglass",
        "icon-graduation",
        "icon-ghost",
        "icon-game-controller",
        "icon-fire",
        "icon-eyeglass",
        "icon-envelope-open",
        "icon-envelope-letter",
        "icon-bell",
        "icon-badge",
        "icon-anchor",
        "icon-wallet",
        "icon-vector",
        "icon-speech",
        "icon-puzzle",
        "icon-printer",
        "icon-present",
        "icon-playlist",
        "icon-pin",
        "icon-picture",
        "icon-handbag",
        "icon-globe-alt",
        "icon-globe",
        "icon-folder-alt",
        "icon-folder",
        "icon-film",
        "icon-feed",
        "icon-drop",
        "icon-drawer",
        "icon-docs",
        "icon-doc",
        "icon-diamond",
        "icon-cup",
        "icon-calculator",
        "icon-bubbles",
        "icon-briefcase",
        "icon-book-open",
        "icon-basket-loaded",
        "icon-basket",
        "icon-bag",
        "icon-action-undo",
        "icon-action-redo",
        "icon-wrench",
        "icon-umbrella",
        "icon-trash",
        "icon-tag",
        "icon-support",
        "icon-frame",
        "icon-size-fullscreen",
        "icon-size-actual",
        "icon-shuffle",
        "icon-share-alt",
        "icon-share",
        "icon-rocket",
        "icon-question",
        "icon-pie-chart",
        "icon-pencil",
        "icon-note",
        "icon-loop",
        "icon-home",
        "icon-grid",
        "icon-graph",
        "icon-microphone",
        "icon-music-tone-alt",
        "icon-music-tone",
        "icon-earphones-alt",
        "icon-earphones",
        "icon-equalizer",
        "icon-like",
        "icon-dislike",
        "icon-control-start",
        "icon-control-rewind",
        "icon-control-play",
        "icon-control-pause",
        "icon-control-forward",
        "icon-control-end",
        "icon-volume-1",
        "icon-volume-2",
        "icon-volume-off",
        "icon-calendar",
        "icon-bulb",
        "icon-chart",
        "icon-ban",
        "icon-bubble",
        "icon-camrecorder",
        "icon-camera",
        "icon-cloud-download",
        "icon-cloud-upload",
        "icon-envelope",
        "icon-eye",
        "icon-flag",
        "icon-heart",
        "icon-information",
        "icon-key",
        "icon-link",
        "icon-lock",
        "icon-lock-open",
        "icon-magnifier",
        "icon-magnifier-add",
        "icon-magnifier-remove",
        "icon-paper-clip",
        "icon-paper-plane",
        "icon-power",
        "icon-refresh",
        "icon-reload",
        "icon-settings",
        "icon-star",
        "icon-symbol-female",
        "icon-symbol-male",
        "icon-target",
        "icon-credit-card",
        "icon-paypal",
        "icon-social-tumblr",
        "icon-social-twitter",
        "icon-social-facebook",
        "icon-social-instagram",
        "icon-social-linkedin",
        "icon-social-pinterest",
        "icon-social-github",
        "icon-social-gplus",
        "icon-social-reddit",
        "icon-social-skype",
        "icon-social-dribbble",
        "icon-social-behance",
        "icon-social-foursqare",
        "icon-social-soundcloud",
        "icon-social-spotify",
        "icon-social-stumbleupon",
        "icon-social-youtube",
        "icon-social-dropbox",
      ];
      var rowDemoIcon = "#row-demo-icon";
      for (i = 0; i < iconClass.length; i++) {
        $(rowDemoIcon).append(
          '<div class="col-md-3"> <div class="demo-icon"> <div class="icon-preview"><i class="' +
            iconClass[i] +
            '"></i></div> <div class="icon-class">' +
            iconClass[i] +
            "</div> </div> </div>"
        );
      }
    </script>
  </body>
</html>
