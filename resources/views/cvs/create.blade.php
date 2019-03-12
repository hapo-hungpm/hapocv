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
    <div class="col cv-title align-justify-center" contenteditable="true" spellcheck="false">Your CV Title</div>
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
                    <p class="name-info" contenteditable="true" spellcheck="false">bumblebee walker</p>
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
                            <td class="col col-data" contenteditable="true" spellcheck="false" id="phone">0123456789</td>
                        </tr>
                        <tr>
                            <td class="col-label">Email:</td>
                            <td class="col col-data email" contenteditable="true" spellcheck="false" id="email">bumblebee@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="col-label">Facebook:</td>
                            <td class="col col-data" contenteditable="true" spellcheck="false" id="facebook">bumblebee</td>
                        </tr>
                        <tr>
                            <td class="col-label" id="skype">Skype:</td>
                            <td class="col col-data" contenteditable="true" spellcheck="false">bumblebee</td>
                        </tr>
                        <tr>
                            <td class="col-label" id="chatwork">Chatwork:</td>
                            <td class="col col-data" contenteditable="true" spellcheck="false">bumblebee</td>
                        </tr>
                        <tr>
                            <td class="col-label">Address:</td>
                            <td class="col col-data" contenteditable="true" spellcheck="false" id="address">58 Tran Binh - Mai Dich - Cau Giay - Ha Noi</td>
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
                                <text>75%</text>
                            </svg>
                            <input class="skill-name" value="html/css" style="text-align: center; background-color: transparent; border: none;">
                        </div>
                    </div>
                    <div class="wrap-donut-chart-center">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                                <text contenteditable="true" spellcheck="false">65%</text>
                            </svg>
                            <p class="skill-name" contenteditable="true" spellcheck="false">c#.net</p>
                        </div>
                    </div>
                    <div class="wrap-donut-chart-right">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                                <text>50%</text>
                            </svg>
                            <p class="skill-name">my sql</p>
                        </div>

                    </div>
                    <div class="wrap-donut-chart-left">
                        <div class="skill-donut-chart sec-btn-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                                <text>75%</text>
                            </svg>
                            <p class="skill-name">php</p>
                        </div>
                    </div>
                    <div class="wrap-donut-chart-center">
                        <div class="skill-donut-chart">
                            <svg class="donut">
                                <circle class="donut-ring" r="47.5"></circle>
                                <circle class="donut-segment" r="47.5"></circle>
                                <text>65%</text>
                            </svg>
                            <p class="skill-name">react native</p>
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
                            <h5>team work</h5>
                            <div class="progress-bar">
                                <div><p>85%</p></div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart">
                            <h5>english</h5>
                            <div class="progress-bar">
                                <div><p>65%</p></div>
                            </div>
                        </div>
                        <div class="sec-skill-line-chart">
                            <h5>japanese</h5>
                            <div class="progress-bar">
                                <div><p>35%</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-btn" onclick="addSkillLineChart()">
                        <div class="btn btn-right">
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
                <p class="sec-intro" id="work_experience_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassunt</p>
                <div class="chart-work-edu">
                    <div class="head-line-vertical"></div>
                    <div class="chart-work">
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2019</span>) ABC COMPANY</h4>
                                <p>Developer</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2019</span>) ABC COMPANY</h4>
                                <p>Developer</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2019</span>) ABC COMPANY</h4>
                                <p>Developer</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2019</span>) ABC COMPANY</h4>
                                <p>Developer</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2019</span>) ABC COMPANY</h4>
                                <p>Developer</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
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
                <p class="sec-intro" id="education_title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincclassun</p>
                <div class="chart-work-edu">
                    <div class="head-line-vertical"></div>
                    <div class="chart-edu">
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2015</span>) DEF UNIVERSITY</h4>
                                <p>Student</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2015</span>) DEF UNIVERSITY</h4>
                                <p>Student</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2015</span>) DEF UNIVERSITY</h4>
                                <p>Student</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2015</span>) DEF UNIVERSITY</h4>
                                <p>Student</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincclassunt</p>
                            </div>
                        </div>
                        <div class="event-chart">
                            <div class="arrow-right"></div>
                            <div class="line-dot-horizon">
                            </div>
                            <div class="chart-content">
                                <h4 class="event-name">(<span>2010 - 2015</span>) DEF UNIVERSITY</h4>
                                <p>Student</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
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
                                <span class="quote-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center chart-content-ref">
                            <div class="avatar-ref avatar"></div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
                                <span class="quotes quote-end">”</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center chart-content-ref">
                            <div class="avatar-ref avatar"></div>
                            <div class="col-md sec-quotes">
                                <span class="quotes quote-open"> “</span>
                                <span class="quote-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincclassunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in</span>
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

                let skills = [];
                $( '.donut ').each(function () {
                    let skill = {
                        percent :  $( this ).children("text").text(),
                        skill_id :  $( this ).next().text(),
                    }
                    skills.push(skill);
                });
                console.log(JSON.stringify(skills));

                e.preventDefault();

                $.ajax({
                    url: '{{ route('cvs.store') }}',
                    type: 'POST',
                    data: {
                        facebook:$("#facebook").text(),
                        phone: $("#phone").text(),
                        email: $("#email").text(),
                        date_of_birth : $("#date_of_birth").text(),
                        skype : $("#skype").text(),
                        chatwork : $("#chatwork").text(),
                        address : $("#address").text(),
                        image : '',
                        position : $("#position").text(),
                        summary : $("#summary").text(),
                        image_mini : '',
                        status : '',
                        professional_skill_title : $("#professional_skill_title").text(),
                        personal_skill_title : $("#personal_skill_title").text(),
                        work_experience_title : $("#work_experience_title").text(),
                        education_title : $("#education_title").text(),
                        skills : skills,
                    },
                    success: function(result){
                        {{--window.location.href = '{{ route('home') }}';--}}
                        alert('hihi');
                        // alert(result.message);
                    }
                });
            });

            $( function() {
                var availableTags = [
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
                $( ".donut" ).next().autocomplete({
                    source: availableTags
                });
            } );


        });
    </script>
@endsection
