@extends('layouts.app')
@section('head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Port+Lligat+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_cv_sample.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="row">
    <label for="select" style="color: #000;">Status: </label>
    <select id="isPublic">
        <option value="1">Public</option>
        <option value="0">Private</option>
    </select>
</div>
<div class="row toolbar">
    <div class="col cv-title align-justify-center" contenteditable="true" spellcheck="false" id="cv-title">Your CV Title</div>
    <button class="col-auto btn-save-cv align-justify-center btn-submit">Save CV</button>
</div>
<div class="container">
    <div class=" row">
        <div class="col-md-6 avt-cover">
            <div class="row justify-content-center">
                <div class="language language-md">
                    <span class="lan-chose">English</span>
                    <span>Japanese</span>
                </div>
            </div>
            <div class="row justify-content-center info-cover">
                <div>
                    <div class="name-cover">
                        <div style="display: inline-block;">
                            <span id="firstName">bumblebee</span>
                            <div class="line-job line"></div>
                        </div>

                        <span id="lastName">walker</span>
                    </div>
                    <p class="job-cover" contenteditable="true" spellcheck="false" id="position">Ruby on Rail Developer</p>
                </div>
            </div>
            <div class="sec-camera">
                <i class="fas fa-camera" style=""></i>
                <input type="file" style="line-height: 60px;opacity: 0;" class="cover-image">
            </div>
        </div>
        <div class="col-md-6 info">
            <div class="row justify-content-center">
                <div>
                    <div class="language">
                        <span class="lan-chose">English</span>
                        <span>Japanese</span>
                    </div>
                    <div class="row justify-content-center">
                        <div class="row justify-content-center avatar-change avatar">
                            <div class="sec-camera-change">
                                <i class="fas fa-camera"></i>
                                <input type="file" style="line-height: 60px; opacity: 0;" class="image_mini">
                            </div>
                        </div>
                    </div>
                    <p class="name-info" contenteditable="true" spellcheck="false" id="name">bumblebee walker</p>
                    <p contenteditable="true">
                        <input class="birthday-info" id="date_of_birth" type="date" value="1992-12-25" style=" background-color: transparent;">
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">

            </div>
            <div class="info-form-wrap">
                <div class="row justify-content-center">
                    <div class="col-md-12 line-info line"></div>
                </div>
                <div class="row justify-content-center">
                    <table class="row justify-content-center">
                        <tbody>
                        <tr>
                            <td class="col-label">Phone:</td>
                            <td class="col col-data"><span contenteditable="true" spellcheck="false" id="phone">0123456789</span></td>
                        </tr>
                        <tr>
                            <td class="col-label">Email:</td>
                            <td class="col col-data email"><span contenteditable="true" spellcheck="false" id="email">bumblebee@gmail.com</span></td>
                        </tr>
                        <tr>
                            <td class="col-label">Facebook:</td>
                            <td class="col col-data"><span contenteditable="true" spellcheck="false" id="facebook">bumblebee</span></td>
                        </tr>
                        <tr>
                            <td class="col-label">Skype:</td>
                            <td class="col col-data"><span contenteditable="true" spellcheck="false" id="skype">bumblebee</span></td>
                        </tr>
                        <tr>
                            <td class="col-label">Chatwork:</td>
                            <td class="col col-data"><span contenteditable="true" spellcheck="false" id="chat_work">bumblebee</span></td>
                        </tr>
                        <tr>
                            <td class="col-label">Address:</td>
                            <td class="col col-data"><span contenteditable="true" spellcheck="false" id="address">58 Tran Binh - Mai Dich - Cau Giay - Ha Noi</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center sec-profess-sum">
        <div class="col-md-12 wrap-col wrap-row-content">
            <div class="sec-header">
                <div class="line line-top"></div>
                <div>
                    <div style="display: inline-block;">
                        <span>professional</span>
                        <div class="line"></div>
                    </div>
                    summary
                </div>
            </div>
            <div>
                <p class="sec-intro" contenteditable="true" spellcheck="false" id="summary">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt
                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum
                    iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dol. Lorem ipsum
                    dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet
                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dol.
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center sec-skills ">
        <div class="row wrap-row-content">
            <div class="col-md-6 wrap-col wrap-col-left">
                <div class="sec-header">
                    <div class="line line-top"></div>
                    <div>
                        <div style="display: inline-block;">
                            <span>professional</span>
                            <div class="line"></div>
                        </div>
                        skills
                    </div>
                </div>
                <p class="sec-intro" contenteditable="true" spellcheck="false" id="professional_skill_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassunt</p>
                <div class="row skill-chart sec-skill-donut-chart">
                    <div class="skill-donut-chart delete-sec donut-chart">
                        <i class="fas fa-trash-alt delete-btn"></i>
                        <svg class="donut">
                            <circle class="donut-ring" r="47.5"></circle>
                            <circle class="donut-segment" r="47.5"></circle>
                        </svg>
                        <span class="donut-percent-wrap">
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65</span>%
                        </span>
                        <input class="skill-name" value="html/css">
                    </div>
                    <div class="skill-donut-chart delete-sec donut-chart">
                        <i class="fas fa-trash-alt delete-btn"></i>
                        <svg class="donut">
                            <circle class="donut-ring" r="47.5"></circle>
                            <circle class="donut-segment" r="47.5"></circle>
                        </svg>
                        <span class="donut-percent-wrap">
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65</span>%
                        </span>
                        <input type="text" class="skill-name" value="c#">
                    </div>
                    <div class="skill-donut-chart delete-sec donut-chart">
                        <i class="fas  fa-trash-alt delete-btn"></i>
                        <svg class="donut">
                            <circle class="donut-ring" r="47.5"></circle>
                            <circle class="donut-segment" r="47.5"></circle>
                        </svg>
                        <span class="donut-percent-wrap">
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65</span>%
                        </span>
                        <input class="skill-name" value="mysql">
                    </div>

                    <div class="skill-donut-chart delete-sec donut-chart">
                        <i class="fas  fa-trash-alt delete-btn"></i>
                        <svg class="donut">
                            <circle class="donut-ring" r="47.5"></circle>
                            <circle class="donut-segment" r="47.5"></circle>
                        </svg>
                        <span class="donut-percent-wrap">
                            <span class="donut-percent" contenteditable="true" spellcheck="false">50</span>%
                        </span>
                        <input class="skill-name" value="php">
                    </div>
                    <div class="skill-donut-chart delete-sec donut-chart">
                        <i class="fas  fa-trash-alt delete-btn"></i>
                        <svg class="donut">
                            <circle class="donut-ring" r="47.5"></circle>
                            <circle class="donut-segment" r="47.5"></circle>
                        </svg>
                        <span class="donut-percent-wrap">
                            <span class="donut-percent" contenteditable="true" spellcheck="false">75</span>%
                        </span>
                        <input class="skill-name" value="react native">
                    </div>
                    <div class="wrap-donut-chart-right wrap-donut-btn">
                        <div class="skill-donut-chart btn-donut-chart">
                            <div class="row justify-content-center">
                                <div class="btn btn-add-donut-chart" onclick="addSkillCircleChart()">
                                    <span>Add skill</span>
                                    <i class="fa fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-btn btn-donut-chart-md">
                    <div class="btn" onclick="addSkillCircleChart()">
                        <span>Add skill</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wrap-col">
                <div class="sec-header">
                    <div class="line line-top"></div>
                    <div>
                        <div style="display: inline-block;">
                            <span>personal</span>
                            <div class="line"></div>
                        </div>
                        skills
                    </div>
                </div>
                <p class="sec-intro" contenteditable="true" spellcheck="false" id="personal_skill_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassunt</p>
                <div class="skill-chart">
                    <div class="row sec-skill-line-charts">
                        <div class="sec-skill-line-chart delete-sec">
                            <i class="fas  fa-trash-alt delete-btn"></i>
                            <h5 contenteditable="true">team work</h5>
                            <div class="progress-bar">
                                <div>
                                    <p><span class="line-chart-percent" contenteditable="true" spellcheck="false">65</span>%</p>
                                </div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart delete-sec">
                            <i class="fas  fa-trash-alt delete-btn"></i>
                            <h5 contenteditable="true">english</h5>
                            <div class="progress-bar">
                                <div>
                                    <p><span class="line-chart-percent" contenteditable="true" spellcheck="false">50</span>%</p>
                                </div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart delete-sec">
                            <i class="fas  fa-trash-alt delete-btn"></i>
                            <h5 contenteditable="true">japanese</h5>
                            <div class="progress-bar">
                                <div>
                                    <p><span class="line-chart-percent" contenteditable="true" spellcheck="false">65</span>%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-btn">
                        <div class="btn btn-right" onclick="addSkillLineChart()">
                            <span>Add skill</span>
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center sec-work-edu">
        <div class="row wrap-row-content">
            <div class="col-md-6 wrap-col sec-work wrap-col-left">
                <div class="sec-header">
                    <div class="line line-top"></div>
                    <div>
                        <div style="display: inline-block;">
                            <span>work</span>
                            <div class="line"></div>
                        </div>
                        experience
                    </div>
                </div>
                <p class="sec-intro" id="work_experience_title" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassunt</p>
                <div class="chart-work-edu">
                    <div class="head-line-vertical"></div>
                    <div class="chart-work">
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content work-ex-content delete-sec">
                                <i class="fas  fa-trash-alt delete-btn"></i>
                                (<span class="timeline"><span contenteditable="true" class="start">2010</span> - <span class="end" contenteditable="true">2019</span></span>)
                                <span class="event-name company" contenteditable="true" spellcheck="false"> ABC COMPANY</span>
                                <p contenteditable="true" spellcheck="false" class="position">Developer</p>
                                <p contenteditable="true" spellcheck="false" class="work-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content work-ex-content delete-sec">
                                <i class="fas  fa-trash-alt delete-btn"></i>
                                (<span class="timeline"><span contenteditable="true" class="start">2010</span> - <span class="end" contenteditable="true">2019</span></span>)
                                <span class="event-name company" contenteditable="true" spellcheck="false"> ABC COMPANY</span>
                                <p contenteditable="true" spellcheck="false" class="position">Developer</p>
                                <p contenteditable="true" spellcheck="false" class="work-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-btn">
                    <div class="btn btn-work-edu" onclick="addEventWorkChart()">
                        <span>Add work experience</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wrap-col sec-edu">
                <div class="sec-header">
                    <div class="line line-top"></div>
                    <p>Education</p>
                    <div class="line line-bottom"></div>
                </div>
                <p class="sec-intro" id="education_title" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassun</p>
                <div class="chart-work-edu">
                    <div class="head-line-vertical"></div>
                    <div class="chart-edu">
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content edu-content delete-sec">
                                <i class="fas  fa-trash-alt delete-btn"></i>
                                (<span class="timeline"><span contenteditable="true" class="start">2010</span> - <span class="end" contenteditable="true">2019</span></span>)
                                <span class="event-name school" contenteditable="true" spellcheck="false"> DEF UNIVERSITY</span>
                                <p class="position" contenteditable="true" spellcheck="false">Student</p>
                                <p class="achievement" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content edu-content delete-sec">
                                <i class="fas  fa-trash-alt delete-btn"></i>
                                (<span class="timeline"><span contenteditable="true" class="start">2010</span> - <span class="end" contenteditable="true">2019</span></span>)
                                <span class="event-name school" contenteditable="true" spellcheck="false"> DEF UNIVERSITY</span>
                                <p class="position" contenteditable="true" spellcheck="false">Student</p>
                                <p class="achievement" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-btn">
                    <div class="btn btn-work-edu" onclick="addEventEduChart()">
                        <div>
                            <span>Add edu experience</span>
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center sec-portfolio">
        <div class="col-md-12 wrap-col wrap-row-content">
            <div class="sec-header">
                <div class="line line-top"></div>
                <p>Portfolio</p>
                <div class="line line-bottom"></div>
            </div>
            <div class="row menu">
                <span class="part-chose">All</span>
                <span>feature</span>
            </div>
            <div class="row justify-content-center sec-graphic">
                <div class="row justify-content-center rec1 rec-horizon project-sec delete-sec">
                    <i class="fas  fa-trash-alt delete-btn"></i>
                    <div data-toggle="modal" data-target="#projectModal" class="project-data">
                        <img src="{{ asset('imgs/1111.png') }}" alt="project-img">
                        <form hidden>
                            <input type="date" value="2016-01-01" class="project-start-time">
                            <input type="date" value="2017-12-01" class="project-end-time">
                            <input type="text" value="1" class="project-name" required>
                            <input type="text" value="1" class="project-technologies" required>
                            <input type="text" value="1" class="project-description" required>
                            <input type="text" value="1" class="project-responsibilities" required>
                            <input type="checkbox" class="project-is-feature" checked>
                            <input class="project-view-color" value="1">
                            <input class="project-is-horizon" value="1">
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center rec2 rec-vertical project-sec delete-sec">
                    <i class="fas fa-trash-alt delete-btn"></i>
                    <div data-toggle="modal" data-target="#projectModal" class="project-data">
                        <img src="{{ asset('imgs/2222.png') }}" alt="project-img">
                        <form hidden>
                            <input type="date" value="2017-01-01" class="project-start-time">
                            <input type="date" value="2018-12-01" class="project-end-time">
                            <input type="text" value="2" class="project-name" required>
                            <input type="text" value="2" class="project-technologies" required>
                            <input type="text" value="2" class="project-description" required>
                            <input type="text" value="2" class="project-responsibilities" required>
                            <input type="checkbox" name="" class="project-is-feature" checked>
                            <input class="project-view-color" value="2">
                            <input class="project-is-horizon" value="0">
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center rec3 rec-horizon project-sec delete-sec">
                    <i class="fas fa-trash-alt delete-btn"></i>
                    <div class="project-data" data-toggle="modal" data-target="#projectModal">
                        <img src="{{ asset('imgs/1111.png') }}" alt="project-img">
                        <form hidden>
                            <input type="date" value="2018-01-01" class="project-start-time">
                            <input type="date" value="2019-12-01" class="project-end-time">
                            <input type="text" value="3" class="project-name">
                            <input type="text" value="3" class="project-technologies" required>
                            <input type="text" value="3" class="project-description" required>
                            <input type="text" value="3" class="project-responsibilities" required>
                            <input type="checkbox" class="project-is-feature" required checked>
                            <input class="project-view-color" value="3">
                            <input class="project-is-horizon" value="1">
                        </form>
                    </div>
                </div>
                <div class="rec-horizon rec-btn">
                    <div class="row justify-content-center wrap-btn" onclick="addProjectChart()">
                        <div class="btn btn-project">
                            <span>Add project</span>
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center sec-references">
        <div class="row wrap-col wrap-row-content ">
            <div class="sec-header header-ref">
                <div class="line line-top"></div>
                <p>References</p>
                <div class="line line-bottom"></div>
            </div>
            <div class="col-md-12 delete-sec">
                <i class="fas  fa-trash-alt delete-ref-btn"></i>
                <div class="regular">
                    <div class="slide">
                        <div class="row justify-content-center chart-content-ref">
                            <div class="row justify-content-center avatar-ref avatar">
                                <div class="sec-camera-change">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" style="line-height: 60px;opacity: 0;">
                                </div>
                            </div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">1Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="row justify-content-center chart-content-ref">
                            <div class="row justify-content-center avatar-ref avatar">
                                <div class="sec-camera-change">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" style="line-height: 60px;opacity: 0;">
                                </div>
                            </div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">2Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="row justify-content-center chart-content-ref">
                            <div class="row justify-content-center avatar-ref avatar">
                                <div class="sec-camera-change">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" style="line-height: 60px;opacity: 0;">
                                </div>
                            </div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">3Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="btn btn-add-ref">
                    <span>Add references</span>
                    <i class="fa fa-plus"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center footer">
        <p>2019 Flatos.com All right reserved.</p>
    </div>
</div>

<div class="modal fade" id="projectModal" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true" style="color: black;">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #5E35B1">
            <div class="modal-body">
                <form class="form-project">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control project-name-modal" name="name" style="color: #000;">
                        </div>
                        <div class="form-group col-md-2">
                            <label class="col-form-label">Is Feature:</label>
                            <input type="checkbox" class="form-control project-is-feature-modal"  style="color: #000;">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">Start time:</label>
                            <input type="date" class="form-control project-start-time-modal" style="color: #000;">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">End time:</label>
                            <input type="date" class="form-control project-end-time-modal" style="color: #000;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Technologies:</label>
                        <input class="form-control project-technologies-modal" style="color: #000;">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Description:</label>
                        <input class="form-control project-description-modal" style="color: #000;">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Responsibility:</label>
                        <input class="form-control project-responsibilities-modal" style="color: #000;">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="recipient-name" class="col-form-label">Display color</label>
                            <select class="form-control color-picker project-view-color-modal">
                                <option class="rec1" value="1">1</option>
                                <option class="rec2" value="2">2</option>
                                <option class="rec3" value="3">3</option>
                                <option class="rec4" value="4">4</option>
                                <option class="rec5" value="5">5</option>
                                <option class="rec6" value="6">6</option>
                                <option class="rec7" value="7">7</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Display shape:</label>
                            <select class="form-control project-is-horizon-modal">
                                <option value="1">Horizon</option>
                                <option value="0">Vertical</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.delete-ref-btn').on('click', function() {
                let index = $('.slick-current').attr('data-slick-index');
                $('.regular').slick('slickRemove', index);

                //reindex for slick slide
                let j = 0;
                $(".slick-slide").each(function(){
                    $(this).attr("data-slick-index",j);
                    j++;
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".btn-submit").click(function(e) {

                let form_data = new FormData();

                //add all professional skills into form_data
                let i = 0;
                $( '.donut-chart').each(function () {
                    form_data.append(`skills[${i}][percent]`,  $( this ).find(".donut-percent").text());
                    form_data.append(`skills[${i}][name]`, $( this ).find(".skill-name").val());
                    form_data.append(`skills[${i}][type]`, '1');
                    i++;
                });

                //add all personal skills into form_data
                $( '.sec-skill-line-chart ').each(function () {
                    form_data.append(`skills[${i}][percent]`,  $( this ).find(".line-chart-percent").text());
                    form_data.append(`skills[${i}][name]`, $( this ).find("h5").text());
                    form_data.append(`skills[${i}][type]`, '2');
                    i++;
                });

                //add all work experiences into form_data
                i = 0;
                $( '.work-ex-content ').each(function () {
                    form_data.append(`work_experiences[${i}][start]`, $( this ).find(".start").text());
                    form_data.append(`work_experiences[${i}][end]`, $( this ).find(".end").text());
                    form_data.append(`work_experiences[${i}][company_name]`, $( this ).find(".company").text());
                    form_data.append(`work_experiences[${i}][position]`, $( this ).find(".position").text());
                    form_data.append(`work_experiences[${i}][work_content]`, $( this ).find(".work-content").text());
                    form_data.append(`work_experiences[${i}][type]`, '1');
                    i++;
                });

                //add all education data into form_data
                i = 0;
                $( '.edu-content ').each(function () {
                    form_data.append(`educations[${i}][start]`, $( this ).find(".start").text());
                    form_data.append(`educations[${i}][end]`, $( this ).find(".end").text());
                    form_data.append(`educations[${i}][school_name]`, $( this ).find(".school").text());
                    form_data.append(`educations[${i}][position]`, $( this ).find(".position").text());
                    form_data.append(`educations[${i}][achievements]`, $( this ).find(".achievement").text());
                    form_data.append(`educations[${i}][type]`, '2');
                    i++;
                });

                //all all projects into form_data
                i = 0;
                $( '.project-sec' ).each(function () {
                    form_data.append(`portfolios[${i}][name]`, $( this ).find('.project-name').val());
                    form_data.append(`portfolios[${i}][start]`, $( this ).find('.project-start-time').val());
                    form_data.append(`portfolios[${i}][end]`, $( this ).find('.project-end-time').val());
                    form_data.append(`portfolios[${i}][technologies]`, $( this ).find('.project-technologies').val());
                    form_data.append(`portfolios[${i}][description]`, $( this ).find('.project-description').val());
                    form_data.append(`portfolios[${i}][responsibilities]`, $( this ).find('.project-responsibilities').val());
                    form_data.append(`portfolios[${i}][is_feature]`, $( this ).find('.project-is-feature')[0].checked?1:0);
                    form_data.append(`portfolios[${i}][view_color]`, $( this ).find('.project-view-color').val());
                    form_data.append(`portfolios[${i}][is_horizon_view]`, $( this ).find('.project-is-horizon').val());
                    i++;
                });

                //add all references into form_data
                i = 0;
                $( '.chart-content-ref').each(function () {
                    form_data.append(`references[${i}][content]`, $( this ).find('.quote-content').text());
                    form_data.append(`references[${i}][image_ref]`, $( this ).find('input')[0].files[0]);
                    i++;
                });

                form_data.append('title', $("#cv-title").text());
                form_data.append('is_public', $("#isPublic").val());
                form_data.append('name', $("#name").text());
                form_data.append('date_of_birth', $("#date_of_birth").val());
                form_data.append('phone', $("#phone").text());
                form_data.append('facebook', $("#facebook").text());
                form_data.append('email', $("#email").text());
                form_data.append('skype', $("#skype").text());
                form_data.append('chat_work', $("#chat_work").text());
                form_data.append('address', $("#address").text());
                form_data.append('position', $("#position").text());
                form_data.append('summary', $("#summary").text());
                form_data.append('professional_skill_title', $("#professional_skill_title").text());
                form_data.append('personal_skill_title', $("#personal_skill_title").text());
                form_data.append('work_experience_title', $("#work_experience_title").text());
                form_data.append('education_title', $("#education_title").text());
                form_data.append('_token', '{{csrf_token()}}');
                form_data.append('image', $('.cover-image')[0].files[0]);
                form_data.append('image_mini', $('.image_mini')[0].files[0]);

                e.preventDefault();
                $.ajax({
                    url: "{{ route('cvs.store') }}",
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        {{--window.location = "{{ route('cvs.index') }}";--}}
                        console.log(result);
                    },
                    error: function (data) {
                        let errForm = [];
                        if( data.status === 422 ) {
                            let errs = data.responseJSON.errors;
                            $.each(errs, function (key, value) {
                                errForm.push(value[0]);
                            })
                        }
                        alert(errForm[0]);
                    }
                });
            });
        });
    </script>
@endsection
