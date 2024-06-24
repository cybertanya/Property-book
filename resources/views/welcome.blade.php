<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>
   
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Varino.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Varino%20Normal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Hero-Clean-Reverse-images.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navbar-Centered-Links-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pricing-Free-Paid-badges.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

</head>

<body style="overflow-x: hidden;">
    @extends('property_book.navbar')
    
    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-smooth-scroll="true">
        <section id="home" class="p-md-5" style="background: #155bd5;padding-top: 0px;padding-bottom: 0px;color: rgb(255,255,255);">
            <div class="row g-0 d-lg-flex justify-content-lg-start align-items-lg-center m-md-5">
                <div class="col-md-6 text-start d-lg-flex justify-content-lg-start align-items-lg-center p-3 p-md-0">
                    <div class="text-start" style="width: fit-content;">
                        <h1 style="margin-bottom: 20px;">{{$header_data->main_name}}</h1>
                        <p>{{$header_data->description}}</p>
                        <div class="row d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center" style="margin: 0px;padding: 0px;">
                            <div class="col-auto d-lg-flex" style="padding: 0;padding-right: 0;padding-bottom: 0;margin: 0px;margin-right: 5px;margin-left: 5px;"><button class="btn btn-primary text-uppercase" type="button" style="background: #ffffff;color: #155bd5;font-weight: bold;font-size: 13px;border-radius: 4px;">get started</button></div>
                            <div class="col-auto" style="padding: 0;margin-right: 5px;margin-left: 5px;"><a class="btn btn-primary border rounded-circle shadow-none d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center" role="button" style="background: #ffffff;color: #155bd5;height: 40px;padding: 12px;width: 40px;" href="#" target="_blank" rel="external"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-player-play">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 4v16l13 -8z"></path>
                                    </svg></a></div>
                            <div class="col-auto" style="padding: 0;margin-right: 5px;margin-left: 5px;"><span>Watch intro</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center justify-content-md-center align-items-md-center p-3 p-md-0" style="padding: 0;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;"><img class="rounded img-fluid" src="{{asset('assets/img/'.$header_data->image)}}" style="margin: auto;width: 100%;"></div>
            </div>
        </section>
        <section id="about-us" class="p-md-5" style="background: #fafafa;padding-top: 0px;padding-bottom: 0px;color: var(--bs-emphasis-color);">
            <div class="row g-0 d-lg-flex justify-content-lg-start align-items-lg-center m-md-5">
                <div class="col-md-6 d-flex justify-content-center align-items-center justify-content-md-center align-items-md-center p-3 p-md-0" style="padding: 0;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;"><img class="rounded img-fluid px-5" src="{{asset('assets/img/'.$story_data->image)}}" style="margin: auto;"></div>
                <div class="col-md-6 text-start d-lg-flex justify-content-lg-start align-items-lg-center p-3 p-md-0">
                    <div class="text-start" style="width: fit-content;">
                        <h1 class="text-uppercase fs-6 fw-bold d-lg-flex justify-content-lg-start align-items-lg-center" style="margin-bottom: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-dash-lg" style="color: #155bd5;">
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"></path>
                            </svg>&nbsp;OUR STORY</h1>
                        <h1 style="margin-bottom: 20px;">{{$story_data->main_name}}</h1>
                        <div class="px-2">
                            <ul class="nav nav-tabs" role="tablist" style="background: #efefef;border-style: none;border-radius: 5px;padding: 8px;">
                                <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Who We Are</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Our Vision</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Our History</a></li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <p>{{$story_data->who_are_we}}</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <p>{{$story_data->our_vision}}</p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-3">
                                    <p>{{$story_data->history}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="p-md-5">
            <div class="row">
                <div class="col-12 d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center my-5"><button class="btn btn-outline-primary fw-semibold link-primary border rounded-pill border-2 border-primary px-4" type="button" style="background: var(--bs-gray-100);">Services</button></div>
            </div>
            <div class="row">
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center my-2" style="border-radius: 50%;border: 2px solid #155bd5;padding: 10px;width: 70px;height: 70px;"><img src="{{asset('assets/img/icons8-pill-48.png')}}" style="width: 100%;height: 100%;min-height: 0px;position: relative;display: block;"></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">Refreshing Design</h4>
                            <p class="card-text">{{$services_data->refreshing_design}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center my-2" style="width: 70px;border-radius: 50%;border: 2px solid #155bd5;height: 70px;padding: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bootstrap-fill" style="width: 100%;height: 100%;color: #155bd5;position: relative;display: block;">
                                    <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"></path>
                                    <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"></path>
                                </svg></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">Solid Bootstrap 5</h4>
                            <p class="card-text">{{$services_data->solid_bootstrap}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center my-2" style="width: 70px;border-radius: 50%;border: 2px solid #155bd5;height: 70px;padding: 15px;"><span style="color: #155bd5;font-size: 20px;font-family: Varino;position: relative;display: block;">&lt;s&gt;</span></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">100+ Components</h4>
                            <p class="card-text">{{$services_data->components}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center p-3 my-2" style="width: 70px;border-radius: 50%;border: 2px solid #155bd5;height: 70px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2" style="width: 40px;height: 40px;color: #155bd5;position: relative;display: block;">
                                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
                                </svg></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">Speed Optimized</h4>
                            <p class="card-text">{{$services_data->speed}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center p-3 my-2" style="width: 70px;border-radius: 50%;border: 2px solid #155bd5;height: 70px;"><img src="{{asset('assets/img/icons8-stack-48%20(1).png')}}" style="width: 100%;"></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">Fully Customizable</h4>
                            <p class="card-text">{{$services_data->fully_customizable}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 12px;">
                    <div class="card">
                        <div class="card-body p-4" style="border-color: rgb(240,240,240);"><span class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center p-3 my-2" style="width: 70px;border-radius: 50%;border: 2px solid #155bd5;height: 70px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-refresh" style="width: 100%;height: 100%;color: #155bd5;">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                                </svg></span>
                            <h4 class="card-title" style="color: var(--bs-emphasis-color);">Regular Updates</h4>
                            <p class="card-text">{{$services_data->regular_updates}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing" class="p-md-5" style="background: #fafafa;z-index: 9999;position: relative;">
            <div class="row d-xl-flex justify-content-xl-center align-items-xl-center">
                <div class="col-12 d-flex justify-content-center align-items-center my-5"><button class="btn btn-outline-primary fw-semibold link-primary border rounded-pill border-2 border-primary d-xl-flex align-self-center justify-content-xl-center align-items-xl-center px-4" type="button" style="background: var(--bs-gray-100);">Pricing</button></div>
            </div>
            <div class="container py-4 py-xl-5" style="position: relative;z-index: 100;">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 d-xl-flex">
                    <div class="col col-md-4">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body text-center p-4">
                                <div class="row d-xl-flex align-content-center align-self-center mx-auto justify-content-xl-center align-items-xl-center" style="width: 100%;">
                                    <div class="col-12"><button class="btn btn-outline-primary fw-semibold link-primary border rounded-pill border-2 border-primary px-4 mb-3" type="button" style="background: #ffffff;">Starter</button></div>
                                    <div class="col-12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold" style="font-size: 22px;"><sup><span style="color: rgba(33, 37, 41, 0.75);">$</span></sup></h4>
                                            </div>
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold">{{$pricing_data->starter}}<span class="fs-4 fw-normal" style="color: rgba(33, 37, 41, 0.75);"><sub>/mo</sub></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-outline-primary text-uppercase fw-semibold link-primary border rounded border-1 border-primary px-4" type="button" style="background: #ffffff;">Start free trial</button></div>
                                </div>
                                <div class="border rounded border-0 p-4" style="background: #ffffff;">
                                    <ul class="list-unstyled" style="background: #ffffff;">
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Cras justo odio.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Dapibus ac facilisis in.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-secondary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Morbi leo risus.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-secondary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Excepteur sint occaecat velit.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card border-0 shadow-lg mb-4">
                            <div class="card-body text-center p-4">
                                <div class="row d-xl-flex align-content-center align-self-center mx-auto justify-content-xl-center align-items-xl-center" style="width: 100%;">
                                    <div class="col-12"><button class="btn btn-primary fw-semibold border rounded-pill border-2 border-primary px-4 mb-3" type="button" style="border-style: none;">Exclusive</button></div>
                                    <div class="col-12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold" style="font-size: 22px;"><sup><span style="color: rgba(33, 37, 41, 0.75);">$</span></sup></h4>
                                            </div>
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold">{{$pricing_data->exclusive}}<span class="fs-4 fw-normal" style="color: rgba(33, 37, 41, 0.75);"><sub>/mo</sub></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-primary text-uppercase fw-semibold border rounded border-1 border-primary px-4" type="button">Start free trial</button></div>
                                </div>
                                <div class="border rounded border-0 p-4" style="background: #ffffff;">
                                    <ul class="list-unstyled" style="background: #ffffff;">
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Cras justo odio.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Dapibus ac facilisis in.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Morbi leo risus.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-secondary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Excepteur sint occaecat velit.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body text-center p-4">
                                <div class="row d-xl-flex align-content-center align-self-center mx-auto justify-content-xl-center align-items-xl-center" style="width: 100%;">
                                    <div class="col-12"><button class="btn btn-outline-primary fw-semibold link-primary border rounded-pill border-2 border-primary px-4 mb-3" type="button" style="background: #ffffff;">Premium</button></div>
                                    <div class="col-12">
                                        <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                                    </div>
                                    <div class="col">
                                        <div class="row d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold" style="font-size: 22px;"><sup><span style="color: rgba(33, 37, 41, 0.75);">$</span></sup></h4>
                                            </div>
                                            <div class="col-auto text-center d-xl-flex align-self-center justify-content-xl-center align-items-xl-center" style="padding: 0px;">
                                                <h4 class="display-5 fw-bold">{{$pricing_data->premium}}<span class="fs-4 fw-normal" style="color: rgba(33, 37, 41, 0.75);"><sub>/mo</sub></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12"><button class="btn btn-outline-primary text-uppercase fw-semibold link-primary border rounded border-1 border-primary px-4" type="button" style="background: #ffffff;">Start free trial</button></div>
                                </div>
                                <div class="border rounded border-0 p-4" style="background: #ffffff;">
                                    <ul class="list-unstyled" style="background: #ffffff;">
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Cras justo odio.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg" style="font-size: 13px;">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Dapibus ac facilisis in.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Morbi leo risus.</span></li>
                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-circle border rounded-circle border-1 border-primary bs-icon me-2" style="width: 18px;height: 18px;color: var(--bs-secondary);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg text-primary" style="font-size: 13px;color: var(--bs-secondary);">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                </svg></span><span>Excepteur sint occaecat velit.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @extends('property_book.footer')
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>