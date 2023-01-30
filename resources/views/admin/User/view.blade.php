@extends('layout.layout')

@section('title')
    @if(Request::segment(1) == 'ar' ) الصفحة الشخصية   @else Profile @endif
@endsection
@section('css')
    <link href="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    @if(Request::segment(1) == 'ar' )
        <link href="{{asset('dashboard/assets/css/pages/wizard/wizard-6.rtl.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{asset('dashboard/assets/css/pages/wizard/wizard-6.css')}}" rel="stylesheet" type="text/css" />
    @endif
@endsection

@section('content')

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">    @if(Request::segment(1) == 'ar' ) الصفحة الشخصية   @else Profile @endif

                    </div>
                </div>
                <div class="card-body">
                    <div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid" id="kt_wizard2">
                        <!--begin::Container-->
                        <div class="wizard-content d-flex flex-column mx-auto py-10 py-lg-20 w-100 w-md-700px">
                            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                                <div class="d-flex flex-column-auto flex-column px-10">
                                    <!--begin: Wizard Nav-->
                                    <div class="wizard-nav pb-lg-10 pb-3 d-flex flex-column align-items-center align-items-md-start">
                                        <!--begin::Wizard Steps-->
                                        <div class="wizard-steps d-flex flex-column flex-md-row">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step" data-wizard-state="current">
                                                <div class="wizard-wrapper pr-lg-7 pr-5">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">1</span>
                                                    </div>
                                                    <div class="wizard-label mr-3">
                                                        <h3 class="wizard-title">{{__('lang.Users_Personal')}}</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Angle-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999) "/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 2 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                                <div class="wizard-wrapper pr-lg-7 pr-5">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">2</span>
                                                    </div>
                                                    <div class="wizard-label mr-3">
                                                        <h3 class="wizard-title">{{__('lang.Users_data')}}</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Angle-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999) "/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 2 Nav-->
                                            <!--begin::Wizard Step 3 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">3</span>
                                                    </div>
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title"> {{__('lang.Users_Appointment')}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3 Nav-->
                                        </div>
                                        <!--end::Wizard Steps-->
                                    </div>
                                    <!--end: Wizard Nav-->
                                </div>
                                <form class="px-10" novalidate="novalidate" id="kt_form2"  method="post" action="/Update_User" enctype="multipart/form-data">
                                    <!--begin: Wizard Step 1-->
                                    @csrf
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <!--begin::Title-->

                                        <div class="form-group row">
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="image-input image-input-empty image-input-outline" id="kt_image_1" style="background-image: url({{asset('dashboard/assets/media/users/blank.png')}})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="{{__('lang.Change_photo')}}">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="img" accept=".png, .jpg, .jpeg" required />
                                                        <input type="hidden" name="logo_remove" />
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="{{__('lang.Cancel_photo')}}">
                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="{{__('lang.Remove_photo')}}">
                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('lang.Users_Name')}} </label>
                                            <input disabled  type="text" class="form-control form-control-solid"  value="{{$User->name}}"  name="name" required placeholder="{{__('lang.Users_Name')}}" >
                                            <input  disabled type="hidden" class="form-control form-control-solid"  value="{{$User->id}}"  name="id" required placeholder="" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Nameen')}} </label>
                                            <input disabled type="text" class="form-control form-control-solid"  value="{{$User->en_name}}"  name="en_name" required placeholder="{{__('lang.Users_Nameen')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_fpuid')}} </label>
                                            <input  disabled type="number" class="form-control form-control-solid"  value="{{$User->fpuid}}"  name="fpuid" required placeholder="{{__('lang.Users_fpuid')}}" >
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('lang.Users_idnum')}} </label>
                                            <input  disabled type="number" class="form-control form-control-solid" name="national_id" value="{{$User->national_id}}"  required placeholder="{{__('lang.Users_idnum')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_idnum_date')}} </label>
                                            <input disabled type="text" class="form-control  " name="date_national_id" value="{{$User->date_national_id}}" required value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Passport')}} </label>
                                            <input disabled type="text" class="form-control form-control-solid" name="passport_id" value="{{$User->passport_id}}" required placeholder="{{__('lang.Users_Passport')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Passport_date')}} </label>
                                            <input disabled type="text" class="form-control " name="date_passport_id" value="{{$User->date_passport_id}}" required value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Nationality')}}  </label>
                                            @inject('Nationality','App\Nationality')
                                            <select disabled name="country_id" class="form-control form-control-lg"  id="kt_select2_1">
                                                @foreach($Nationality->all() as $data)
                                                    @if($data->id == $User->country_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Transfer')}}  </label>
                                            <input disabled type="number" class="form-control form-control-solid" name="converted_num" value="{{$User->converted_num}}"  required placeholder="{{__('lang.Users_Transfer')}}" >
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>{{__('lang.Users_Mobile')}} </label>
                                                    <input disabled type="tel" class="form-control form-control-solid" required name="phone"  value="{{$User->phone}}" placeholder="{{__('lang.Users_Mobile')}}" >
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>{{__('lang.Users_mail')}} </label>
                                                    <input disabled type="email" class="form-control form-control-solid" required name="email" value="{{$User->email}}" placeholder="{{__('lang.Users_mail')}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"> {{__('lang.password')}}  </label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input disabled class="form-control form-control-solid"  type="text"   style="-webkit-text-security: square;"     name="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Birth')}} </label>
                                            <input disabled type="text" class="form-control " name="birth_date"  value="{{$User->birth_date}}" required value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Address')}}  </label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$User->address}}"  name="address" required value="">
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('lang.Users_Gendar')}} :</label>
                                            <div class="radio-inline">
                                                <label class="radio">
                                                    <input disabled type="radio" @if($User->type == 1 ) checked @endif name="type" value="1" />
                                                    <span></span>ذكر</label>
                                                <label class="radio">
                                                    <input disabled type="radio" @if($User->type == 2 ) checked @endif name="type"  value="2" />
                                                    <span></span>انثى</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Religion')}} :</label>
                                            <div class="radio-inline">
                                                <label class="radio">
                                                    <input disabled type="radio" @if($User->religion == 1 ) checked @endif name="religion" value="1" />
                                                    <span></span>مسلم</label>
                                                <label class="radio">
                                                    <input  disabled type="radio"  @if($User->religion == 2 ) checked @endif  name="religion"  value="2" />
                                                    <span></span>غير مسلم</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('lang.Users_Social')}}   </label>
                                            <select disabled name="relationship" class="form-control form-control-lg"  id="kt_select2_1">
                                                @if($User->relationship == 1)
                                                    <option value="1">اعزب</option>
                                                    <option value="2">متزوج </option>
                                                @else
                                                    <option value="2">متزوج </option>
                                                    <option value="1">اعزب</option>
                                                @endif
                                            </select>
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Job_number')}} </label>
                                            <input disabled type="number" class="form-control form-control-solid"  value="{{$User->job_num}}" name="job_num" placeholder="{{__('lang.Users_Job_number')}}" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Dateofhiring')}}</label>
                                            <input disabled type="text" class="form-control " name="start_job_date" value="{{$User->start_job_date}}"  placeholder="{{__('lang.Users_Dateofhiring')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label> {{__('lang.Users_main')}}   </label>
                                            @inject('Job','App\Job')
                                            <select  disabled name="mainJob_id" class="form-control form-control-lg" style="width:100%" id="kt_select5">
                                                @foreach($Job->all() as $data)
                                                    @if($data->id == $User->mainJob_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> {{__('lang.Users_Commissioning')}}   </label>
                                            @inject('Job','App\Job')
                                            <select disabled name="subJob_id" class="form-control form-control-lg" style="width:100%"   id="kt_select4">
                                                @foreach($Job->all() as $data)
                                                    @if($data->id == $User->subJob_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>  {{__('lang.Users_Department')}}    </label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$User->management}}" name="management" placeholder="{{__('lang.Users_Department')}}" >
                                        </div>

                                        <div class="form-group">
                                            <label> {{__('lang.Users_Bonuses')}}   </label>
                                            @inject('Bonuses','App\Bonuses')
                                            <select disabled name="bonuses_id" class="form-control form-control-lg"  id="kt_select2_1">
                                                @foreach($Bonuses->all() as $data)
                                                    @if($data->id == $User->bonuses_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label> {{__('lang.Users_Bank_name')}}    </label>
                                            @inject('Bank','App\Bank')
                                            <select disabled name="bank_id" class="form-control form-control-lg"  id="kt_select2_1">
                                                @foreach($Bank->all() as $data)
                                                    @if($data->id == $User->bank_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_IBAN')}} </label>
                                            <input disabled type="text" class="form-control form-control-solid" name="ipan" value="{{$User->ipan}}" placeholder="{{__('lang.Users_IBAN')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Level')}} </label>
                                            <input disabled type="number" class="form-control form-control-solid" name="jobLevel" value="{{$User->jobLevel}}"  placeholder="{{__('lang.Users_Level')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_degree')}}  </label>
                                            <input  disabled type="number" class="form-control form-control-solid" name="jobPercent" value="{{$User->jobPercent}}" placeholder="{{__('lang.Users_degree')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Distinguished')}}   </label>
                                            <input disabled type="number" class="form-control form-control-solid" name="badalat" value="{{$User->badalat}}" placeholder="{{__('lang.Users_Distinguished')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>  {{__('lang.Users_location')}}    </label>
                                            @inject('Category','App\Branch')
                                            <select disabled name="category_id" class="form-control form-control-lg"  id="kt_select2_1">
                                                @foreach($Category->all() as $data)
                                                    @if($data->id == $User->category_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>  {{__('lang.Users_Insurance')}}    </label>
                                            @inject('Category','App\Insurance')
                                            <select  disabled name="insurance_id" class="form-control form-control-lg"  id="kt_select2_1">
                                                @foreach($Category->all() as $data)
                                                    @if($data->id == $User->insurance_id)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_percentage')}}  </label>
                                            <input disabled type="number" class="form-control form-control-solid"  value="{{$User->comp_insurance_percent}}" name="comp_insurance_percent" placeholder="{{__('lang.Users_percentage')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_employee_percentage')}} </label>
                                            <input disabled type="number" class="form-control form-control-solid" value="{{$User->emp_insurance_percent}}" name="emp_insurance_percent"  placeholder="{{__('lang.Users_employee_percentage')}}" >
                                        </div>

                                        <div class="form-group">
                                            <label>{{__('lang.public_cost')}} </label>
                                            <select disabled type="text" class="form-control form-control-solid" name="public_cost" >
                                                @if($User->public_cost == 1 )
                                                    <option selected value="1"> {{__('lang.public_cost')}}  </option>
                                                    <option value="2"> {{__('lang.cost_of_documentation')}} </option>
                                                    <option value="3"> {{__('lang.governance_cost')}}  </option>
                                                    <option value="4">  {{__('lang.cost_and_sustainability')}}  </option>
                                                    <option value="5">  {{__('lang.software_cost')}}  </option>
                                                @elseif($User->public_cost == 2)
                                                    <option  value="1"> {{__('lang.public_cost')}}  </option>
                                                    <option selected value="2"> {{__('lang.cost_of_documentation')}} </option>
                                                    <option value="3"> {{__('lang.governance_cost')}}  </option>
                                                    <option value="4">  {{__('lang.cost_and_sustainability')}}  </option>
                                                    <option value="5">  {{__('lang.software_cost')}}  </option>
                                                @elseif($User->public_cost == 3)
                                                    <option  value="1"> {{__('lang.public_cost')}}  </option>
                                                    <option value="2"> {{__('lang.cost_of_documentation')}} </option>
                                                    <option selected value="3"> {{__('lang.governance_cost')}}  </option>
                                                    <option value="4">  {{__('lang.cost_and_sustainability')}}  </option>
                                                    <option value="5">  {{__('lang.software_cost')}}  </option>
                                                @elseif($User->public_cost == 4)
                                                    <option  value="1"> {{__('lang.public_cost')}}  </option>
                                                    <option value="2"> {{__('lang.cost_of_documentation')}} </option>
                                                    <option value="3"> {{__('lang.governance_cost')}}  </option>
                                                    <option selected value="4">  {{__('lang.cost_and_sustainability')}}  </option>
                                                    <option value="5">  {{__('lang.software_cost')}}  </option>
                                                @elseif($User->public_cost == 5)
                                                    <option  value="1"> {{__('lang.public_cost')}}  </option>
                                                    <option value="2"> {{__('lang.cost_of_documentation')}} </option>
                                                    <option value="3"> {{__('lang.governance_cost')}}  </option>
                                                    <option value="4">  {{__('lang.cost_and_sustainability')}}  </option>
                                                    <option selected value="5">  {{__('lang.software_cost')}}  </option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.contract_duration')}} </label>
                                            <select  disabled class="form-control form-control-solid" name="contract_duration" >
                                                @if($User->contract_duration == 1)
                                                    <option selected value="1">موسمية</option>
                                                    <option value="2">سنوية</option>
                                                @elseif($User->contract_duration == 2 )
                                                    <option value="1">موسمية</option>
                                                    <option selected value="2">سنوية</option>
                                                @endif
                                            </select>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Contract')}}  </label>
                                            <input  disabled type="number" class="form-control form-control-solid" value="{{$User->contract_num}}" name="contract_num" required placeholder="{{__('lang.Users_Contract')}}" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_Decision')}}</label>
                                            <input disabled type="text" class="form-control " required  value="{{$User->start_contract_date}}" name="start_contract_date" placeholder="{{__('lang.Users_Decision')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_point')}}   </label>
                                            <input disabled type="text" class="form-control form-control-solid" value="{{$User->decision_point}}" name="decision_point" required placeholder="{{__('lang.Users_point')}}" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>{{__('lang.Users_expiration')}} </label>
                                            <input  disabled type="text" class="form-control " required value="{{$User->end_contract_date}}" name="end_contract_date" placeholder="{{__('lang.Users_expiration')}}" >
                                        </div>
                                        <div class="form-group">
                                            <label> {{__('lang.Control_Permissions')}} </label>
                                            @inject('UserRole','App\UserRole')
                                            <select name="role" class="form-control form-control-lg"  disabled>
                                                @foreach($UserRole->all() as $data)
                                                    @if($data->id == $User->role)
                                                        <option selected value="{{$data->id}}">{{$data->name}}</option>
                                                    @else
                                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between pt-7">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3" data-wizard-type="action-prev">
                        <span class="svg-icon svg-icon-md ml-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                                                {{__('lang.Users_Previous')}}</button>
                                        </div>
                                        <div>
{{--                                            <button type="submit" form="kt_form2" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-submit">{{__('lang.Users_Save')}}</button>--}}
                                            <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">{{__('lang.Users_Next')}}
                                                <span class="svg-icon svg-icon-md mr-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                    <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                </g>
                            </svg>
                                                    <!--end::Svg Icon-->
                        </span></button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                            <!--end::Container-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>











@section('js')
    <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/datatables/basic/basic.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/features/miscellaneous/dropify.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/pages/crud/file-upload/image-input.js')}}"></script>

    <script>

        $("#checker").click(function(){
            var items = document.getElementsByTagName("input");

            for(var i=0; i<items.length; i++){
                if(items[i].type=='checkbox') {
                    if (items[i].checked==true) {
                        items[i].checked=false;
                    } else {
                        items[i].checked=true;
                    }
                }
            }

        });

        //Delete Row
        $("body").on("click", "#delete", function () {
            var dataList = [];
            dataList = $("#kt_datatable input:checkbox:checked").map(function(){
                return $(this).val();
            }).get();

            if(dataList.length >0){
                Swal.fire({
                    title: "{{trans('word.Are you sure?')}}",
                    text: "",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "{{trans('word.Yes, Sure it!')}}",
                    cancelButtonText: "{{trans('word.No')}}",
                    closeOnConfirm: false,
                    closeOnCancel: false
                }).then(function (result) {
                    if (result.value) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url:'{{url("Delete_Language")}}',
                            type:"get",
                            data:{'id':dataList,_token: CSRF_TOKEN},
                            dataType:"JSON",
                            success: function (data) {
                                if(data.message == "Success")
                                {
                                    $("#kt_datatable .selected").hide();
                                    @if( Request::segment(1) == "ar")
                                    $('#delete').text('حذف 0 سجل');
                                    @else
                                    $('#delete').text('Delete 0 row');
                                    @endif
                                    Swal.fire("{{trans('word.Deleted')}}", "{{trans('word.Message_Delete')}}", "success");
                                    location.reload();
                                }else{
                                    Swal.fire("{{trans('word.Sorry')}}", "{{trans('word.Message_Fail_Delete')}}", "error");
                                }
                            },
                            fail: function(xhrerrorThrown){
                                Swal.fire("{{trans('word.Sorry')}}", "{{trans('word.Message_Fail_Delete')}}", "error");
                            }
                        });
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire("{{trans('word.Cancelled')}}", "{{trans('word.Message_Cancelled_Delete')}}", "error");
                    }
                });
            }
        });

        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });

        //End Delete Row
        $(".edit-Advert").click(function(){
            var id=$(this).data('id')
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('Edit_Language')}}",
                data: {"id":id},
                success: function (data) {
                    $(".bs-edit-modal-lg .modal-body").html(data)
                    $(".bs-edit-modal-lg").modal('show')
                    $(".bs-edit-modal-lg").on('hidden.bs.modal',function (e){
                        //   $('.bs-edit-modal-lg').empty();
                        $('.bs-edit-modal-lg').hide();
                    })
                }
            })
        })

        $(".switchery-demo").click(function(){
            var id =$(this).data('id');
            console.log(id);
            $.ajax({
                type: "get",
                url: "{{url('UpdateStatusUser')}}",
                data: {"id":id },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "@if(Request::segment(1)=='ar')  نجاح @else success @endif",
                        text: "@if(Request::segment(1) == 'ar' ) تم التعديل بنجاح   @else Successfully changed @endif",
                        type:"success" ,
                        timer: 1000,
                        showConfirmButton: false
                    });


                }
            })
        })
    </script>

    <?php
    $message=session()->get("message");
    ?>



    @if( session()->has("message"))
        @if( $message == "Success")
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "@if(Request::segment(1)=='ar')  نجاح @else Le succès @endif",
                    text: "@if(Request::segment(1)=='ar')  تمت العملية بنجاح   @else complété avec succès @endif",
                    type:"success" ,
                    timer: 1000,
                    showConfirmButton: false
                });

            </script>
        @elseif ( $message == "Failed")
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: "{{trans('word.Sorry')}}",
                    text: "{{trans('word.the operation failed')}}",
                    type:"error" ,
                    timer: 2000,
                    showConfirmButton: false
                });
            </script>
        @endif
    @endif

    <script src="{{asset('dashboard/assets/js/pages/custom/wizard/wizard-6-2.js')}}"></script>

    <script src="{{asset('dashboard/assets/js/pages/crud/forms/widgets/select2.js')}}"></script>

    <!--begin::Page scripts(used by this page) -->
    <script>
        $('#kt_select4').select2({
            placeholder: ""
        });
        $('#kt_select5').select2({
            placeholder: ""
        });
    </script>
    <script src="{{asset('hijri/js/momentjs.js')}}"></script>
    <script src="{{asset('hijri/js/moment-with-locales.js')}}"></script>
    <script src="{{asset('hijri/js/moment-hijri.js')}}"></script>
    <script src="{{asset('hijri/js/bootstrap-hijri-datetimepicker.js')}}"></script>

    <!--begin::Page scripts(used by this page) -->
    <script type="text/javascript">


        $(function () {

            initHijrDatePicker();

            //initHijrDatePickerDefault();

            $('.disable-date').hijriDatePicker({

                minDate:"2020-01-01",
                maxDate:"2021-01-01",
                viewMode:"years",
                hijri:true,
                debug:true
            });

        });

        function initHijrDatePicker() {

            $(".hijri-date-input").hijriDatePicker({
                locale: "ar-sa",
                format: "DD-MM-YYYY",
                hijriFormat:"iYYYY-iMM-iDD",
                dayViewHeaderFormat: "MMMM YYYY",
                hijriDayViewHeaderFormat: "iMMMM iYYYY",
                showSwitcher: true,
                allowInputToggle: true,
                showTodayButton: false,
                useCurrent: true,
                isRTL: false,
                viewMode:'months',
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

@endsection
@endsection
