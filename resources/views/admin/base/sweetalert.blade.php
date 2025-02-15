<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sweet Alert - Kaiadmin Bootstrap 5 Admin Dashboard</title>
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
              <h3 class="fw-bold mb-3">Alert</h3>
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
                  <a href="#">Sweet Alert</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Sweet Alert</div>
                    <div class="card-category">
                      <a href="https://sweetalert.js.org/">SweetAlert</a> makes
                      popup messages easy and pretty.
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Basic alert
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-info"
                              id="alert_demo_1"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Alert title and text
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-focus"
                              id="alert_demo_2"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Enable <code>warning</code>, <code>error</code>,
                            <code>success</code>, and <code>info</code> state
                            icons
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-warning"
                              id="alert_demo_3_1"
                            >
                              Warning
                            </button>
                            <button
                              type="button"
                              class="btn btn-danger"
                              id="alert_demo_3_2"
                            >
                              Error
                            </button>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_3_3"
                            >
                              Success
                            </button>
                            <button
                              type="button"
                              class="btn btn-info"
                              id="alert_demo_3_4"
                            >
                              Info
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Change confirm button text and class
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_4"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Modal window with input field
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-warning"
                              id="alert_demo_5"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            Closes the modal after a certain amount of time
                            (specified in ms)
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-primary"
                              id="alert_demo_6"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            A warning message, with a function attached to the
                            "Confirm" Button
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-success"
                              id="alert_demo_7"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 40%; vertical-align: middle">
                            By passing a parameter, you can execute something
                            else for cancel
                          </td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-danger"
                              id="alert_demo_8"
                            >
                              Show me
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
      //== Class definition
      var SweetAlert2Demo = (function () {
        //== Demos
        var initDemos = function () {
          //== Sweetalert Demo 1
          $("#alert_demo_1").click(function (e) {
            swal("Good job!", {
              buttons: {
                confirm: {
                  className: "btn btn-success",
                },
              },
            });
          });

          //== Sweetalert Demo 2
          $("#alert_demo_2").click(function (e) {
            swal("Here's the title!", "...and here's the text!", {
              buttons: {
                confirm: {
                  className: "btn btn-success",
                },
              },
            });
          });

          //== Sweetalert Demo 3
          $("#alert_demo_3_1").click(function (e) {
            swal("Good job!", "You clicked the button!", {
              icon: "warning",
              buttons: {
                confirm: {
                  className: "btn btn-warning",
                },
              },
            });
          });

          $("#alert_demo_3_2").click(function (e) {
            swal("Good job!", "You clicked the button!", {
              icon: "error",
              buttons: {
                confirm: {
                  className: "btn btn-danger",
                },
              },
            });
          });

          $("#alert_demo_3_3").click(function (e) {
            swal("Good job!", "You clicked the button!", {
              icon: "success",
              buttons: {
                confirm: {
                  className: "btn btn-success",
                },
              },
            });
          });

          $("#alert_demo_3_4").click(function (e) {
            swal("Good job!", "You clicked the button!", {
              icon: "info",
              buttons: {
                confirm: {
                  className: "btn btn-info",
                },
              },
            });
          });

          //== Sweetalert Demo 4
          $("#alert_demo_4").click(function (e) {
            swal({
              title: "Good job!",
              text: "You clicked the button!",
              icon: "success",
              buttons: {
                confirm: {
                  text: "Confirm Me",
                  value: true,
                  visible: true,
                  className: "btn btn-success",
                  closeModal: true,
                },
              },
            });
          });

          $("#alert_demo_5").click(function (e) {
            swal({
              title: "Input Something",
              html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
              content: {
                element: "input",
                attributes: {
                  placeholder: "Input Something",
                  type: "text",
                  id: "input-field",
                  className: "form-control",
                },
              },
              buttons: {
                cancel: {
                  visible: true,
                  className: "btn btn-danger",
                },
                confirm: {
                  className: "btn btn-success",
                },
              },
            }).then(function () {
              swal("", "You entered : " + $("#input-field").val(), "success");
            });
          });

          $("#alert_demo_6").click(function (e) {
            swal("This modal will disappear soon!", {
              buttons: false,
              timer: 3000,
            });
          });

          $("#alert_demo_7").click(function (e) {
            swal({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              type: "warning",
              buttons: {
                confirm: {
                  text: "Yes, delete it!",
                  className: "btn btn-success",
                },
                cancel: {
                  visible: true,
                  className: "btn btn-danger",
                },
              },
            }).then((Delete) => {
              if (Delete) {
                swal({
                  title: "Deleted!",
                  text: "Your file has been deleted.",
                  type: "success",
                  buttons: {
                    confirm: {
                      className: "btn btn-success",
                    },
                  },
                });
              } else {
                swal.close();
              }
            });
          });

          $("#alert_demo_8").click(function (e) {
            swal({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              type: "warning",
              buttons: {
                cancel: {
                  visible: true,
                  text: "No, cancel!",
                  className: "btn btn-danger",
                },
                confirm: {
                  text: "Yes, delete it!",
                  className: "btn btn-success",
                },
              },
            }).then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                  buttons: {
                    confirm: {
                      className: "btn btn-success",
                    },
                  },
                });
              } else {
                swal("Your imaginary file is safe!", {
                  buttons: {
                    confirm: {
                      className: "btn btn-success",
                    },
                  },
                });
              }
            });
          });
        };

        return {
          //== Init
          init: function () {
            initDemos();
          },
        };
      })();

      //== Class Initialization
      jQuery(document).ready(function () {
        SweetAlert2Demo.init();
      });
    </script>
  </body>
</html>
