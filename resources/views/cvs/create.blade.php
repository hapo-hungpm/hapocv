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
<div class="row toolbar">
    <div class="col cv-title align-justify-center" contenteditable="true" spellcheck="false" id="cv-title">Your CV Title</div>
    <button class="col-auto btn-save-cv align-justify-center btn-submit">Save CV</button>
</div>
<div class="container">
    <div class=" row">
        <div class="col-md-6 avt-cover">
            <div class="row justify-content-center">
                <div class="language language-md">
                    <span class="lan-choosed">English</span>
                    <span>Japanese</span>
                </div>
            </div>
            <div class="row justify-content-center info-cover">
                <div>
                    <div class="name-cover">
                        <div style="display: inline-block;">
                            <span id="firstname">bumblebee</span>
                            <div class="line-job line"></div>
                        </div>

                        <span id="lastname">walker</span>
                    </div>
                    <p class="job-cover" contenteditable="true" spellcheck="false" id="position">Ruby on Rail Developer</p>
                </div>
            </div>
            <div class="sec-camera">
                <i class="fas fa-camera"></i>
            </div>
        </div>
        <div class="col-md-6 info">
            <div class="row justify-content-center">
                <div>
                    <div class="language">
                        <span class="lan-choosed">English</span>
                        <span>Japanese</span>
                    </div>
                    <div class="row justify-content-center">
                        <div class="row justify-content-center avatar-change avatar">
                            <div class="sec-camera-change">
                                <i class="fas fa-camera"></i>
                            </div>
                        </div>
                    </div>
                    <p class="name-info" contenteditable="true" spellcheck="false" id="name">bumblebee walker</p>
                    <p class="birthday-info" contenteditable="true" spellcheck="false" id="date_of_birth">1992-12-25</p>
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
                <div class="row justify-content-center">
                    <div class="btn-edit-profile">
                        <span>Edit profile</span>
                        <i class="fas fa-pen"></i>
                    </div>
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
            <div class="row row-btn">
                <div class="btn btn-right btn-edit-summary">
                    <span>Edit summary</span>
                    <i class="fas fa-pen"></i>
                </div>
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
                    <div class="wrap-donut-chart-left">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                            </svg>
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65%</span>
                            <input class="skill-name" value="html/css">
                        </div>
                    </div>
                    <div class="wrap-donut-chart-center">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                            </svg>
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65%</span>
                            <input class="skill-name" value="c#">
                        </div>
                    </div>
                    <div class="wrap-donut-chart-right">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                            </svg>
                            <span class="donut-percent" contenteditable="true" spellcheck="false">50%</span>
                            <input class="skill-name" value="mysql">
                        </div>

                    </div>
                    <div class="wrap-donut-chart-left">
                        <div class="skill-donut-chart sec-btn-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                            </svg>
                            <span class="donut-percent" contenteditable="true" spellcheck="false">50%</span>
                            <input class="skill-name" value="php">
                        </div>
                    </div>
                    <div class="wrap-donut-chart-center">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                            </svg>
                            <span class="donut-percent" contenteditable="true" spellcheck="false">65%</span>
                            <input class="skill-name" value="react native">
                        </div>
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
                <p class="sec-intro" id="personal_skill_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassunt</p>
                <div class="skill-chart">
                    <div class="row sec-skill-line-charts">
                        <div class="sec-skill-line-chart">
                            <h5 contenteditable="true">team work</h5>
                            <div class="progress-bar">
                                <div><p class="line-chart-percent" contenteditable="true">85%</p></div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart">
                            <h5 contenteditable="true">english</h5>
                            <div class="progress-bar">
                                <div><p contenteditable="true">65%</p></div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart">
                            <h5 contenteditable="true">japanese</h5>
                            <div class="progress-bar">
                                <div><p contenteditable="true">35%</p></div>
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
                            <div class="chart-content work-ex-content">
                                (<span class="timeline"><span contenteditable="true" class="start">2010</span> - <span class="end" contenteditable="true">2019</span></span></span>)
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
                            <div class="chart-content work-ex-content">
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
                            <div class="chart-content edu-content">
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
                            <div class="chart-content edu-content">
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
                <a href="#">All</a>
                <a href="#">Feature</a>
                <a href="#">2018</a>
                <a href="#">2017</a>
                <a href="#">>></a>
            </div>
            <div class="row justify-conthent-center sec-graphic">
                <div class="row justify-content-center rec1 rec-horizon">
                    <div><img src="{{ asset('imgs/1111.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec2 rec-vertical">
                    <div><img src="{{ asset('imgs/2222.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec3 rec-horizon">
                    <div><img src="{{ asset('imgs/1111.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec4 rec-horizon">
                    <div><img src="{{ asset('imgs/1111.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec5 rec-horizon">
                    <div><img src="{{ asset('imgs/1111.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec6 rec-vertical">
                    <div><img src="{{ asset('imgs/1111.png') }}" alt="project-img"></div>
                </div>
                <div class="row justify-content-center rec7 rec-horizon">
                    <div><img src="{{ asset('imgs/2222.png') }}" alt="project-img"></div>
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
            <div class="sec-header">
                <div class="line line-top"></div>
                <p>References</p>
                <div class="line line-bottom"></div>
            </div>
            <div class="col-md-12">
                <div class="regular">
                    <div>
                        <div class="row justify-content-center chart-content-ref">
                            <div class="avatar-ref avatar"></div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center chart-content-ref">
                            <div class="avatar-ref avatar"></div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center chart-content-ref">
                            <div class="avatar-ref avatar"></div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content" contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
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
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <script src="YourJquery source path"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".btn-submit").click(function(e) {

                //add all donut skill into skills
                let skills = [];
                $( '.donut ').each(function () {
                    let skill = {
                        percent :  $( this ).next().text().slice(0, -1),
                        name :  $( this ).next().next().val(),
                        type: 1,
                    }
                    skills.push(skill);
                });

                //add all line skill into skills
                $( '.sec-skill-line-chart ').each(function () {
                    let skill = {
                        percent :  $( this ).children("div").children("div").children("p").text().slice(0, -1),
                        name :  $( this ).children("h5").text(),
                        type: 2,
                    }
                    skills.push(skill);
                });

                //add all workExperiences data into worExperiences
                let workExperiences = [];
                $( '.work-ex-content ').each(function () {
                    let workExperience = {
                        start :  $( this ).children(".timeline").children(".start").text(),
                        end: $( this ).children(".timeline").children(".end").text(),
                        company_name: $( this ).children(".company").text(),
                        position: $( this ).children(".position").text(),
                        work_content: $( this ).children(".work-content").text(),
                        type: 1,
                    }
                    workExperiences.push(workExperience);
                });

                //add all education data into edus
                let edus = [];
                $( '.edu-content ').each(function () {
                    let edu = {
                        start :  $( this ).children(".timeline").children(".start").text(),
                        end: $( this ).children(".timeline").children(".end").text(),
                        school_name: $( this ).children(".school").text(),
                        position: $( this ).children(".position").text(),
                        achievements: $( this ).children(".achievement").text(),
                        type: 2,
                    }
                    edus.push(edu);
                });

                //JSON transformation
                skills = JSON.stringify(skills);
                workExperiences = JSON.stringify(workExperiences);
                edus = JSON.stringify(edus);

                e.preventDefault();
                $.ajax({
                    url: '{{ route('cvs.store') }}',
                    type: 'POST',
                    data: {
                        cv_title: $("#cv-title").text(),
                        name: $("#name").text(),
                        date_of_birth : $("#date_of_birth").text(),
                        phone: $("#phone").text(),
                        facebook: $("#facebook").text(),
                        email: $("#email").text(),
                        skype : $("#skype").text(),
                        chat_work : $("#chat_work").text(),
                        address : $("#address").text(),
                        image : 'a',
                        position : $("#position").text(),
                        summary : $("#summary").text(),
                        image_mini : 'a',
                        professional_skill_title : $("#professional_skill_title").text(),
                        personal_skill_title : $("#personal_skill_title").text(),
                        work_experience_title : $("#work_experience_title").text(),
                        education_title : $("#education_title").text(),
                        skills : skills,
                        work_experiences: workExperiences,
                        educations: edus,
                    },
                    success: function(result){
                        alert(result);
                    }
                });
            });

            //Recommend testing...
            $( function() {
                let availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme"
                ];
                $( ".skill-name" ).autocomplete({
                    source: availableTags
                });
            } );
        });
    </script>
@endsection
