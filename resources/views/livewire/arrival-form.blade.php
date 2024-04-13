<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center mr-1">
                            <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"></h2>
                                <!--end::Page Title-->
                                <!--begin::Breadcrumb-->
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="">
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <div class="card card-custom">
                                <div class="card-body p-0">
                                    <div class="card-body" style="text-align:center">
                                        <img src='{{ asset('Content/Images/dalogo.jpg') }}' style="width:25%" />

                                    </div>
                                    <div class="wizard wizard-1">
                                        <!--begin::Wizard Nav-->
                                        <div class="wizard-nav border-bottom">
                                            <div class="wizard-steps p-8 p-lg-10">
                                                <!--begin::Wizard Step 1 Nav-->
                                                <div class="wizard-step"  data-wizard-state="{{ $step >= 1 ? 'done' : ''  }}">
                                                    <div class="wizard-label">
                                                        <span>
                                                            <i class="wizard-icon flaticon-aeroplane-landing"></i>
                                                        </span>
                                                        <h3 class="wizard-title">1. Arrival</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                    x="11" y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 1 Nav-->
                                                <!--begin::Wizard Step 2 Nav-->
                                                <div class="wizard-step"  data-wizard-state="{{ $step >= 2 ? 'done' : ''  }}">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-clipboard"></i>
                                                        <h3 class="wizard-title">2. Enter Details</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                    x="11" y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 2 Nav-->
                                                <!--begin::Wizard Step 3 Nav-->
                                                <div class="wizard-step" data-wizard-state="{{ $step >= 3 ? 'done' : ''  }}">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-hotel"></i>
                                                        <h3 class="wizard-title">3. Purpose & Accomodation</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                    x="11" y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 3 Nav-->
                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-state="{{ $step >= 4 ? 'done' : ''  }}">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-custom"></i>
                                                        <h3 class="wizard-title">4. Customs</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                    x="11" y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->
                                                <!--begin::Wizard Step 5 Nav-->
                                                <div class="wizard-step" data-wizard-state="{{ $step >= 5 ? 'done' : ''  }}">
                                                    <div class="wizard-label">
                                                        <i class="wizard-icon flaticon-business-trip"></i>
                                                        <h3 class="wizard-title">5. Review and Submit</h3>
                                                    </div>
                                                    <span class="svg-icon svg-icon-xl wizard-arrow last">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                    x="11" y="5" width="2" height="14"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <!--end::Wizard Step 5 Nav-->
                                            </div>
                                        </div>
                                        <!--end::Wizard Nav-->
                                        <!--begin::Wizard Body-->
                                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                            <div class="col-xl-12 col-xxl-10">
                                                <!--begin::Wizard Form
                                                <form class="form" id="kt_form">
                                                    -->
                                                @if($step == 1)
                                                <!--begin::Wizard Step 1-->
                                                <div class="pb-5">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Arrival Information
                                                    </h3>
                                                    <div class="row ">
                                                        <div class="col-lg-3 mb-4">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>Flight/Vessel No.</label>
                                                                    <input class="form-control" type="text" wire:model='flight_no' id="" placeholder="">
                                                                    @error('flight_no')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>Boarded At</label>
                                                                    @php
                                                                        $countries = \CountryState::getCountries();
                                                                    @endphp
                                                                    <select class="form-control" wire:model='boarded_at' id="">
                                                                        @foreach ($countries as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('boarded_at')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>Arriving By</label>
                                                                    <select class="form-control" wire:model='arriving_by' id="">
                                                                        @foreach (\App\Models\ArrivalMean::all() as $mean)

                                                                            <option value="{{ $mean->id }}">{{ $mean->arrivingBY }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('arriving_by')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>Date of Intended Arrival</label>
                                                                    <input type="text" class="form-control" name="date_intended"
                                                                        id="kt_datepicker_1" readonly="readonly"
                                                                        placeholder="Select date" />
                                                                    @error('date_intended')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Port of Disembarkation</label>
                                                                    <select class="form-control" wire:model='port_of_disembarkation' id="">
                                                                        @foreach (\App\Models\Disembarkation::all() as $mean)
                                                                            <option value="{{ $mean->id }}">{{ $mean->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('port_of_disembarkation')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">

                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Length of Stay Abroad (Citizen)</label>
                                                                    <input class="form-control" type="number" wire:model='len_of_stay_abroad' id="" placeholder="">
                                                                    @error('len_of_stay_abroad')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4 ">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Length of Stay here (Visitors)</label>
                                                                    <input class="form-control" type="number" wire:model='len_of_stay' id="" placeholder="">
                                                                    @error('len_of_stay')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @elseif ($step == 2)
                                                <!--end::Wizard Step 1-->
                                                <!--begin::Wizard Step 2-->
                                                <div class="pb-5">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Personal Information
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>First Name</label>
                                                                    <input class="form-control" type="text" wire:model='first_name' id="" placeholder="">
                                                                    @error('first_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Middle Name</label>
                                                                    <input class="form-control" type="text" wire:model='middle_name' id="" placeholder="">
                                                                    @error('middle_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Last Name</label>
                                                                    <input class="form-control" type="text" wire:model='last_name' id="" placeholder="">
                                                                    @error('last_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Date of Birth</label>
                                                                    <input type="date" class="form-control" wire:model="dob"
                                                                        id="kt_datepicker_1"
                                                                        placeholder="Select date" />
                                                                    @error('dob')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Place of Birth</label>
                                                                    @php
                                                                        $countries = \CountryState::getCountries();
                                                                    @endphp
                                                                    <select class="form-control" wire:model='place_of_birth' id="">
                                                                        @foreach ($countries as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('place_of_birth')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Gender</label>
                                                                    <select class="form-control" wire:model='gender' id="">
                                                                        @php
                                                                            $genders = [
                                                                                'male' => 'Male',
                                                                                'female' => 'Female',
                                                                                'none' => 'Prefer Not to Say'
                                                                    ];
                                                                        @endphp
                                                                        @foreach ($genders as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('gender')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Marital Status</label>
                                                                    <select class="form-control" wire:model='marital_status' id="">
                                                                        @php
                                                                            $m_statuses = [
                                                                                'married' => 'Married',
                                                                                'divorced' => 'Divorced',
                                                                                'single' => 'Single',
                                                                                'widow' => 'Widow'
                                                                    ];
                                                                        @endphp
                                                                        @foreach ($m_statuses as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('marital_status')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Occupation</label>
                                                                    <input class="form-control" type="text" wire:model='occupation' id="" placeholder="">
                                                                    @error('occupation')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Nationality</label>
                                                                    @php
                                                                        $nationalities = Dinushchathurya\NationalityList\Nationality::getNationalities();
                                                                    @endphp
                                                                    <select class="form-control" wire:model='nationality' id="">
                                                                        @foreach ($nationalities as $key=>$value)
                                                                            <option value="{{ $value }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('nationality')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Email</label>
                                                                    <input class="form-control" type="text" wire:model='email' id="" placeholder="">
                                                                    @error('email')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Confirm Email</label>
                                                                    <input class="form-control" type="text" wire:model='confirm_email' id="" placeholder="">
                                                                    @error('confirm_email')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Local Number</label>
                                                                    <input class="form-control" type="text" wire:model='local_number' id="" placeholder="">
                                                                    @error('local_number')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div style="padding-bottom:8px">
                                                        <b><u>Travel Document Info</u></b>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Travel Document Type</label>
                                                                    <select class="form-control" wire:model='doc_type' id="">
                                                                        <option value="passport">Passport</option>
                                                                        <option value="emergency travel document">Emergency Travel Document</option>
                                                                    </select>
                                                                    @error('doc_type')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Travel Document Number</label>
                                                                    <input class="form-control" type="text" wire:model='doc_number' id="" placeholder="">
                                                                    @error('doc_number')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Confirm Travel Document Number</label>
                                                                    <input class="form-control" type="text" wire:model='confirm_doc_number' id="" placeholder="">
                                                                    @error('confirm_doc_number')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Date of Issue</label>
                                                                    <input class="form-control" type="date" wire:model='date_of_issue' id="" placeholder="">
                                                                    @error('date_of_issue')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Country of Issue</label>
                                                                    @php
                                                                        $countries = \CountryState::getCountries();
                                                                    @endphp
                                                                    <select class="form-control" wire:model='country_of_issue' id="">
                                                                        @foreach ($countries as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('country_of_issue')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Upload Passport Image</label>
                                                                    <input class="form-control" type="file" wire:model='passport_image' id="" placeholder="">
                                                                    @error('passport_image')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-bottom:8px">
                                                        <b><u>Address Abroad</u></b>
                                                    </div>
                                                    <div class="row">
                                                        <hr />

                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Home Address</label>
                                                                    <input class="form-control" type="text" wire:model='home_address' id="" placeholder="">
                                                                    @error('home_address')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>City/Town</label>
                                                                    <input class="form-control" type="text" wire:model='city' id="" placeholder="">
                                                                    @error('city')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>State/Province</label>
                                                                    <input class="form-control" type="text" wire:model='state' id="" placeholder="">
                                                                    @error('state')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Zip Code</label>
                                                                    <input class="form-control" type="text" wire:model='zip_code' id="" placeholder="">
                                                                    @error('zip_code')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mb-4">
                                                            <div class="form-label">
                                                                <div class="col-md-12">
                                                                    <label>Home Country</label>
                                                                    @php
                                                                        $countries = \CountryState::getCountries();
                                                                    @endphp
                                                                    <select class="form-control" wire:model='home_country' id="">
                                                                        @foreach ($countries as $key=>$value)
                                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('home_country')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <!--end::Wizard Step 2-->
                                                @elseif ($step == 3)
                                                <!--begin::Wizard Step 3-->
                                                <div class="pb-5">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Purpose & Accomodation
                                                    </h4>

                                                    <section>


                                                        <div style="padding-bottom:8px">
                                                            <b><u>Purpose of Vist</u></b>
                                                        </div>



                                                        <div class="mb-4">
                                                            <label class="form-label"> </label>
                                                            <div class="row">

                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpBusiness">
                                                                            <span></span>Business
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpStudy">
                                                                            <span></span>Study
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpConference">
                                                                            <span></span>Conference
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row g-4">
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model='purpHoneymoon'>
                                                                            <span></span>Honeymoon
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpMeeting">
                                                                            <span></span>Meeting
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpSports">
                                                                            <span></span>Sports
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row g-4">

                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpVaction">
                                                                            <span></span>Vacation
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpVisit">
                                                                            <span></span>Visit
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="purpOther">
                                                                            <span></span>Other
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row g-4">
                                                                <div class="col-4">
                                                                    <div class="form-label">
                                                                        <div class="col-md-12">
                                                                            <label>Specify</label>
                                                                            <input class="form-control" type="text" wire:model='purpose_other' id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr />

                                                        </div>

                                                        <div style="padding-bottom:8px">
                                                            <b><u>Accomodation</u></b>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label class="form-label"> </label>
                                                            <div class="row g-4">
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accApt">
                                                                            <span></span>Apartment
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accBed">
                                                                            <span></span>Bed & Breakfast
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accDive">
                                                                            <span></span>Dive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row g-4">
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accGuest">
                                                                            <span></span>Guest House
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accHotel">
                                                                            <span></span>Hotel
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accResidence">
                                                                            <span></span>Private Residence
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row g-4">
                                                                <div class="col-4">

                                                                    <div class="checkbox-inline">
                                                                        <label class="checkbox checkbox-lg">
                                                                            <input type="checkbox" wire:model="accOther">
                                                                            <span></span>Other
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row g-4">
                                                                <div class="col-4">
                                                                    <div class="form-label">
                                                                        <div class="col-md-12">
                                                                            <label>Specify</label>
                                                                            <input class="form-control" type="text" wire:model='accomodation_other' id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <hr />

                                                        </div>


                                                    </section>


                                                </div>
                                                <!--end::Wizard Step 3-->
                                                @elseif ($step == 4)
                                                <!--begin::Wizard Step 4-->
                                                <div class="pb-5">
                                                    <h4 class="mb-10 font-weight-bold text-dark">Customs</h4>
                                                    <section>


                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label class="form-check-label">
                                                                    1. Number of pieces of luggage
                                                                </label>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label class="form-check-label">
                                                                    2. I am (We are) bringing:
                                                                </label>
                                                                <label class="form-check-label">
                                                                    (a) fruits, plants, cut flowers, vegetables, soil,
                                                                    meat, live animals and organism, honey, wildlife
                                                                    products, plant material,
                                                                    food, animal products or live birds
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="radio-list">
                                                                                <label class="radio radio-lg">
                                                                                    <span></span>Yes
                                                                                </label>
                                                                                <label class="radio radio-lg">
                                                                                    <span></span>No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <label class="form-check-label">
                                                                    (b) pharmaceuticals, narcotics and other illicit
                                                                    drugs,and biological substaances
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="radio-list">
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>Yes
                                                                                </label>
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <label class="form-check-label">
                                                                    (c) arms, ammunication, explosives, fireworks, toy
                                                                    guns or other weapons
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="radio-list">
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>Yes
                                                                                </label>
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label class="form-check-label">
                                                                    4. I have(We have) commercial merchandise:
                                                                </label> <br />
                                                                <label class="form-check-label">
                                                                    (articles for sale, samples used for soliciitng
                                                                    orders or goods that are not considered personal
                                                                    effects)
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="radio-list">
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>Yes
                                                                                </label>
                                                                                <label class="radio radio-lg">

                                                                                    <span></span>No
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <label class="form-check-label">
                                                                    5. I am( We are )
                                                                </label><br />
                                                                <label class="form-check-label">
                                                                    carrying currency or monetary instruments over (EC
                                                                    $10,000) or equivalent:
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="radio-list">
                                                                                <label class="radio radio-lg">
                                                                                    <span></span>Yes
                                                                                </label>
                                                                                <label class="radio radio-lg">
                                                                                    <span></span>No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </section>
                                                </div>
                                                <!--end::Wizard Step 4-->
                                                @else
                                                <!--begin::Wizard Step 5-->
                                                <div class="pb-5">
                                                    <!--begin::Section-->
                                                    <h4 class="mb-10 font-weight-bold text-dark">Review your Details
                                                        and Submit</h4>
                                                    <div class="row">

                                                    </div>
                                                    <h6 class="font-weight-bolder mb-3">Arrival Information:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Flight/Vessel No. <label id="labelField"></label>
                                                                </div>
                                                                <div>Boarded At. <label id="boardedAt_fkLabel"></label>
                                                                </div>
                                                                <div>Arriving By <label
                                                                        id="arrivingBy_fkLabel"></label></div>
                                                                <div>Date of Intended Arrival </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Port of Disem. </div>
                                                                <div>Length of Stay Abroad <label
                                                                        id="lenStayField"></label></div>
                                                                <div>Length of Stay Here <label
                                                                        id="lenAbrField"></label></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Personal Details:</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>First Name <label id="firstNameField"></label>
                                                                </div>
                                                                <div>Date of Birth <label id=""></label>
                                                                </div>
                                                                <div>Marital Status <label id="marStatusLabel"></label>
                                                                </div>
                                                                <div>Email <label id="emailField"></label></div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Middle Name <label id="middleNameField"></label>
                                                                </div>
                                                                <div>Place of Birth <label
                                                                        id="birthCountry_fkLabel"></label></div>
                                                                <div>Occupation <label id="OccuField"></label></div>
                                                                <div>Local Number <label id="localNumField"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Last Name <label id="lastNameField"></label>
                                                                </div>
                                                                <div>Gender <label id="gender_fkLabel"></label></div>
                                                                <div>Nationality <label id="nationalityLabel"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Travel Document Type <label
                                                                        id="travelLabel"></label></div>
                                                                <div>Country of Issue <label id="countryLabel"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Travel Document Number <label
                                                                        id="passNumField"></label></div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Date of Issue <label id=""></label></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Home Address <label id="homeAddressField"></label>
                                                                </div>
                                                                <div>Zip Code <label id="zipCodeField"></label></div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>City/Town <label id="cityTownField"></label></div>
                                                                <div>Home Country <label id="homeCountryLabel"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>State / Province <label
                                                                        id="stateProvField"></label></div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Purpose</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Business: <label id="purpBusField"></label> </div>
                                                                <div>Honeymoon: <label id="purpHonField"></label>
                                                                </div>
                                                                <div>Vacation: <label id="purpVacField"></label> </div>
                                                                <div>Specify: <label id="purpSpecifyField"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Study: <label id="purpStudyField"></label> </div>
                                                                <div>Meeting: <label id="purpMeetField"></label> </div>
                                                                <div>Visit: <label id="purpVisitField"></label> </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Conference: <label id="purpConField"></label>
                                                                </div>
                                                                <div>Sports: <label id="purpSportField"></label> </div>
                                                                <div>Other: <label id="purpOthField"></label> </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <h6 class="font-weight-bolder mb-3">Accomodation </h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Apartment: <label id="accoAptField"></label>
                                                                </div>
                                                                <div>Guest House: <label id="accoGuestField"></label>
                                                                </div>
                                                                <div>Other: <label id="accoOthField"></label> </div>
                                                                <div>Specify: <label id="accoSpecifyField"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Bed & Breakfast: <label id="accoBedField"></label>
                                                                </div>
                                                                <div>Hotel: <label id="accoHotelField"></label> </div>
                                                                <div>Visit: <label id="purpVisitField"></label> </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div>Dive: <label id="accoDiveField"></label> </div>
                                                                <div>Private Residence: <label
                                                                        id="accoPrivateField"></label> </div>
                                                                <div>Other: <label id="purpOthField"></label> </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="separator separator-dashed my-5"></div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <h6 class="font-weight-bolder mb-3">Customs:</h6>
                                                    <div class="text-dark-50 line-height-lg">

                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div>Number of Pieces of Luggage</div>
                                                                <div>Accompanied<label id="numLuggageAccField"></label>
                                                                </div>
                                                                <div>Unaccompanied<label
                                                                        id="numLuggageUnAccField"></label></div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <label class="form-check-label">
                                                                2. I am (We are) bringing:
                                                            </label>
                                                            <label class="form-check-label">
                                                                (a) fruits, plants, cut flowers, vegetables, soil, meat,
                                                                live animals and organism, honey, wildlife products,
                                                                plant material,
                                                                food, animal products or live birds
                                                            </label>
                                                            <label id="labelcusQuestFruits"></label>
                                                        </div>

                                                        <div>
                                                            <label class="form-check-label">
                                                                3. I am (We are) bringing:
                                                            </label>
                                                            <label class="form-check-label">
                                                                (b) pharmaceuticals, narcotics and other illicit
                                                                drugs,and biological substaances
                                                            </label>
                                                            <label id="labelcusQuestPhar"></label>
                                                        </div>

                                                        <div>
                                                            <label class="form-check-label">
                                                                4. I am (We are) bringing:
                                                            </label>
                                                            <label class="form-check-label">
                                                                (c) arms, ammunication, explosives, fireworks, toy guns
                                                                or other weapons
                                                            </label>
                                                            <label id="labelcusQuestArms"></label>
                                                        </div>

                                                        <div>
                                                            <label class="form-check-label">
                                                                5. I am (We are) bringing:
                                                            </label>
                                                            <label class="form-check-label">
                                                                (articles for sale, samples used for soliciitng orders
                                                                or goods that are not considered personal effects)
                                                            </label>
                                                            <label id="labelcusQuestMerch"></label>
                                                        </div>


                                                        <div>
                                                            <label class="form-check-label">
                                                                5. I am (We are) bringing:
                                                            </label>
                                                            <label class="form-check-label">
                                                                carrying currency or monetary instruments over (EC
                                                                $10,000) or equivalent:
                                                            </label>
                                                            <label id="labelcusQuestMon"></label>
                                                        </div>



                                                    </div>
                                                    <!--end::Section  onclick="updateLabel()" -->
                                                </div>
                                                @endif
                                                <!--end::Wizard Step 5 onchange="updateLabel()" -->
                                                <!--begin::Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                    <div class="mr-2">
                                                        @if ($step > 1)
                                                        <button type="button" wire:click='previousStep'
                                                            class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                            >Previous</button>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        @if ($step == 5)
                                                        <button type="button" wire:click='submitForm'
                                                            class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                            >Submit</button>
                                                        @else
                                                        <button type="button" wire:click='nextStep'
                                                            class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Next</button>
                                                            @endif
                                                    </div>
                                                </div>
                                                <!--end::Wizard Actions-->
                                                </form>
                                                <!--end::Wizard Form-->
                                            </div>
                                        </div>
                                        <!--end::Wizard Body-->
                                    </div>
                                </div>
                                <!--end::Wizard-->
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <!--doc: add "bg-white" class to have footer with solod background color-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

                <div class="" style="text-align:center">
                    <img src="{{ asset('Content/facebook2.svg') }}" class="facebook-1">
                    <img src="{{ asset('Content/twitter2.svg') }}" class="twitter-1">
                    <img src="{{ asset('Content/instagram2.svg') }}" class="instagram">
                    <br />
                    <span class="" style="padding-top:50px">
                        © 2023 Copyright: Dominica | All rights reserved.
                    </span>
                </div>

            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
