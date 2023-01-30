@extends('layout.layout')

@section('title')
    {{__('lang.Users_Title')}}
@endsection
@section('css')
    <link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{asset('hijri/css/bootstrap-datetimepicker.css')}}" rel="stylesheet"/>

@endsection

@section('content')

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <!--begin::Container-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                            id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->

                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                            {{--                            <li class="breadcrumb-item">--}}
                            {{--                                <a href="" class="text-muted">Profile</a>--}}
                            {{--                            </li>--}}

                            <li class="breadcrumb-item">
                                <h5 class="text-dark font-weight-bold my-1 mr-5 ">{{trans('lang.Users_Title')}}</h5>
                            </li>
                        </ul>

                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
        </div>

        <div class="container">
            <!--begin::Card--><br><br><br>            <!--begin::Card-->
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">{{__('lang.Users_Title')}}
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button style="margin: 6px" type="button" data-toggle="modal" data-toggle="modal"
                                data-target="#kt_modal_5" class="btn btn-success font-weight-bolder">
                            &nbsp;&nbsp;<i class="flaticon2-magnifier-tool"></i>

                            @if (Auth::guard('admins')->user()->can('AddEditDelete'))
                                {{__('lang.search')}}</button>
                        <button type="button" data-toggle="modal" data-toggle="modal" data-target="#kt_modal_4"
                                class="btn btn-primary font-weight-bolder">
            <span class="svg-icon svg-icon-md">
              <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                   height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"/>
                  <circle fill="#000000" cx="9" cy="15" r="6"/>
                  <path
                      d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                      fill="#000000" opacity="0.3"/>
                </g>
              </svg>
                <!--end::Svg Icon-->
            </span> {{__('lang.Users_Create')}}</button>
                        &nbsp;&nbsp;
                        <button id="delete" class="btn btn-danger font-weight-bolder"><span
                                class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Trash.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"/>
                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                    <path
                        d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z"
                        fill="#000000"/>
                </g>
            </svg><!--end::Svg Icon--></span>
                            {{__('lang.Users_Delete')}}</button>
                        <!--end::Button-->
                        @endif
                    </div>
                </div>
                <div class="card-body">

                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable mt-10" id="kt_tdata">
                        <thead>
                        <tr style='  font-weight: bold!important;'>
                            <th style="display:none;">#</th>
                            <th class="headerr">#</th>
                            <th class="headerr">{{__('lang.name')}} </th>
                            <th class="headerr">{{__('lang.email')}} </th>
                            <th class="headerr">{{__('lang.phone')}} </th>
                            <th class="headerr">{{__('lang.address')}} </th>

                            <th class="headerr">{{__('lang.Projects')}} </th>
                            @if (Auth::guard('admins')->user()->can('AddEditDelete'))
                                <th class="headerr"> {{__('lang.Users_Edit')}}  </th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Users as  $Key => $User)
                            <tr>
                                <td style="display:none;">{{$User->id}}</td>
                                <td>
                                    {{$Key + 1 }}
                                </td>
                                <td>
                                    <div class="kt-user-card-v2">
                                        @if($User->img)
                                            <div class="kt-user-card-v2__pic">
                                                <img src="{{asset('Upload/User/'.$User->img)}}"
                                                     class="m-img-rounded kt-marginless" width="75px" alt="photo">
                                            </div>
                                        @endif

                                        <b>{{$User->name}}</b>

                                    </div>
                                </td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->phone}}</td>
                                <td>{{$User->address}}</td>

                                <td>

                                    <a class="btn btn-success " href="{{url('UserProjects/'.$User->id)}}">
                                        {{__('lang.Projects')}}
                                    </a>


                                </td>
                                @if (Auth::guard('admins')->user()->can('AddEditDelete'))
                                    <td>

                                        <a class="btn btn-success btn-sm btn-clean btn-icon btn-icon-md edit-Advert"
                                           data-id="{{$User->id}}" data-original-title="{{__('lang.Users_Edit')}}"
                                           title="{{__('lang.Users_Edit')}}">
                                            <i class="fa fa-edit icon-nm"></i>
                                        </a>


                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>

                <h3>اجمالي المستخدمين : @inject('AllUsers','App\Models\User') {{$AllUsers->count()}} </h3>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

    <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{__('lang.search')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="{{url('UsersSearch')}}">
                        <div class="col-xl-12">
                            <div class="kt-section__body">

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"> {{__('lang.name')}}</label>
                                    <div class="col-lg-9 col-xl-9">
                                        <input type="text" class="form-control form-control-solid" name="name"
                                               placeholder="{{__('lang.name')}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"> {{__('lang.phone')}}  </label>
                                    <div class="col-lg-9 col-xl-9">
                                        <input class="form-control form-control-solid" type="number" name="phone"
                                               value="">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('lang.Jobs_Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.search')}}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{__('lang.Users_Create')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="px-10" novalidate="novalidate" id="kt_form" method="post"
                          action="{{url('Create_Users')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>{{__('lang.name')}} </label>
                            <input type="text" class="form-control form-control-solid" name="name" required
                                   placeholder="{{__('lang.name')}}">
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.phone')}} </label>
                            <input type="text" class="form-control form-control-solid" name="phone" required
                                   placeholder="{{__('lang.phone')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.email')}} </label>
                            <input type="email" class="form-control hijri-date-input" name="email" required value="">
                        </div>

                        <div class="form-group">
                            <label>{{__('lang.address')}}  </label>
                            <input type="text" class="form-control form-control-solid" name="address" required
                                   placeholder="{{__('lang.address')}}">
                        </div>
                        <div class="form-group">
                            <label>{{__('lang.password')}}  </label>
                            <input type="text" style="-webkit-text-security: square;"
                                   class="form-control form-control-solid" name="password" required
                                   placeholder="{{__('lang.password')}}">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">{{__('lang.Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('lang.save')}}</button>
                        </div>
                        <!--begin: Wizard Step 1-->
                        <!--end: Wizard Step 1-->
                        <!--begin: Wizard Step 2-->
                        <!--end: Wizard Step 2-->
                        <!--begin: Wizard Step 3-->
                        <!--end: Wizard Step 3-->
                        <!--begin: Wizard Actions-->
                        <!--end: Wizard Actions-->
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content card card-outline-info">
                <div class="modal-header card-header">
                    <h3 class="modal-title" id="myLargeModalLabel">{{__('lang.Users_Edit')}}</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.modal -->

@section('js')
    <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/datatables/basic/basic.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/custom/wizard/wizard-6.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
    <script src="{{asset('hijri/js/momentjs.js')}}"></script>
    <script src="{{asset('hijri/js/moment-with-locales.js')}}"></script>
    <script src="{{asset('hijri/js/moment-hijri.js')}}"></script>
    <script src="{{asset('hijri/js/bootstrap-hijri-datetimepicker.js')}}"></script>
    <script>

        $('#kt_tdata tbody').on('click', 'tr', function () {
            if (event.ctrlKey) {
                $(this).toggleClass('selected');
                @if(session('lang') == 'en')
                $('#delete').text('Delete ' + table.rows('.selected').data().length + ' row');
                @else
                $('#delete').text('حذف ' + table.rows('.selected').data().length + ' سجل');
                @endif
            } else {
                var isselected = false
                var numSelected = table.rows('.selected').data().length
                if ($(this).hasClass('selected') && numSelected == 1) {
                    isselected = true
                }
                $('#myTable tbody tr').removeClass('selected');
                if (!isselected) {
                    $(this).toggleClass('selected');
                }
                @if(session('lang') == 'en')
                $('#delete').text('Delete ' + table.rows('.selected').data().length + ' row');
                @else
                $('#delete').text('حذف ' + table.rows('.selected').data().length + ' سجل');
                @endif            }
        });
        $("body").on("click", "#delete", function () {
            var dataList = [];
            $("#kt_tdata .selected").each(function (index) {
                dataList.push($(this).find('td:first').text())
            })
            if (dataList.length > 0) {
                Swal.fire({
                    title: "{{__('lang.warrning')}}",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#f64e60",
                    confirmButtonText: "{{__('lang.btn_yes')}}",
                    cancelButtonText: "{{__('lang.btn_no')}}",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function (result) {
                    if (result.value) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: '{{url("Delete_Users")}}',
                            type: "get",
                            data: {'id': dataList},
                            dataType: "JSON",
                            success: function (data) {
                                if (data.message == "Success") {
                                    $("#kt_datatable .selected").hide();
                                    @if(session('lang') == 'ar')

                                    $('#delete').text('حذف 0 سجل');
                                    @else
                                    $('#delete').text('Delete 0 row');
                                    @endif
                                    Swal.fire("{{__('lang.Success')}}", "{{__('lang.Success_text')}}", "success");
                                    location.reload();
                                } else {
                                    Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.Message_Fail_Delete')}}", "error");
                                }
                            },
                            fail: function (xhrerrorThrown) {
                                Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.Message_Fail_Delete')}}", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("{{__('lang.Cancelled')}}", "{{__('lang.Message_Cancelled_Delete')}}", "error");
                    }
                });
            }
        });


    </script>


    <script>
        //DataTable
        var table = $('#kt_tdata').DataTable({
            dom: 'Bfrtip',
            "ordering": false,
            buttons: [
                'copy', 'excel', 'print'
            ],
            @if(session('lang') != 'en')

            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
            }
            @endif
        });

        $(document).ready(function () {

            $(".headerr").attr("style", 'font-weight: bold!important;');

        });

    </script>
    <!--begin::Page scripts(used by this page) -->
    <script type="text/javascript">


        $(function () {

            initHijrDatePicker();

            //initHijrDatePickerDefault();

            $('.disable-date').hijriDatePicker({

                minDate: "2020-01-01",
                maxDate: "2021-01-01",
                viewMode: "years",
                hijri: true,
                debug: true
            });

        });

        function initHijrDatePicker() {

            $(".hijri-date-input").hijriDatePicker({
                locale: "ar-sa",
                format: "DD-MM-YYYY",
                hijriFormat: "iYYYY-iMM-iDD",
                dayViewHeaderFormat: "MMMM YYYY",
                hijriDayViewHeaderFormat: "iMMMM iYYYY",
                showSwitcher: true,
                allowInputToggle: true,
                showTodayButton: false,
                useCurrent: true,
                isRTL: false,
                viewMode: 'months',
                keepOpen: false,
                hijri: false,
                debug: true,
                showClear: true,
                showTodayButton: true,
                showClose: true
            });
        }

        function initHijrDatePickerDefault() {

            $(".hijri-date-input").hijriDatePicker();
        }


    </script>
    <!--begin::Page scripts(used by this page) -->
    <script>
        $('#kt_select2_101').select2({
            placeholder: ""
        });
        $('#kt_select2_11').select2({
            placeholder: ""
        });
        //Delete Row

        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });

        $(".edit-notation").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_User_notation')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })
        $(".edit-inboxGroup").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_UserinboxGroup')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        //End Delete Row
        $(".edit-Shift").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('User_shifts')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        $(".edit-Advert").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_User')}}",
                data: {"id": id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal', function (e) {
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        $(".switchery-demo").click(function () {
            var id = $(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "get",
                url: "{{url('UpdateStatusUser')}}",
                data: {"id": id, _token: CSRF_TOKEN},
                success: function (data) {
                    Swal.fire("@if(Request::segment(1) == 'ar' ) تم  @else Success @endif ", "@if(Request::segment(1) == 'ar' ) تم التعديل بنجاح   @else Successfully changed @endif", "success");

                }
            })
        })
    </script>

    <?php
    $message = session()->get("message");
    ?>


    @if( session()->has("message"))
        @if( $message == "Success")

        @elseif ( $message == "Failed")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "{{__('lang.operation_failed')}}",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif

        @if( $message == "phone")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم الهاتف موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "email")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا البريد الالكتروني موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "job_num")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم الوظيفة موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
        @if( $message == "contract_num")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{__('lang.Sorry')}}",
                    text: "عفوا رقم العقد موجود بالفعل",
                    type: "error",
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
    @endif

@endsection

@endsection

