<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a>
                </li>
                <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo"
                                                                                             src="{{url("")}}/app-assets/images/logo/robust-logo-light.png"
                                                                                             data-expand="{{url("")}}/app-assets/images/logo/robust-logo-light.png"
                                                                                             data-collapse="{{url("")}}/app-assets/images/logo/robust-logo-small.png"
                                                                                             class="brand-logo"></a>
                </li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile"
                                                                    class="nav-link open-navbar-container"><i
                                class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">

            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="nav-item hidden-sm-down"><a href="{{ route('login') }}" class="nav-link nav-link-expand">ورود</a></li>--}}
                {{--</ul>--}}
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i
                                    class="icon-menu5"> </i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i
                                    class="ficon icon-expand2"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           class="dropdown-toggle nav-link">
                            <i class="flag-icon flag-icon-{{Config::get('languages-flag')[Config::get('languages')[App::getLocale()]]}}">
                            </i><span class="selected-language">{{ Config::get('languages')[App::getLocale()] }}</span>
                        </a>
                        <div aria-labelledby="dropdown-flag" class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item">
                                        <i class="flag-icon flag-icon-{{Config::get('languages-flag')[$language]}}"></i> {{$language}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown"
                                                                           class="nav-link nav-link-label"><i
                                    class="ficon icon-bell4"></i><span
                                    class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">@lang('messages.Notifications')</span><span
                                            class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 @lang('messages.New')</span>
                                </h6>
                            </li>
                            <li class="list-group scrollable-container"><a href="javascript:void(0)"
                                                                           class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i
                                                    class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i
                                                    class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Five hour ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i
                                                    class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i
                                                    class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Last week
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i
                                                    class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)"
                                                                class="dropdown-item text-muted text-xs-center">@lang('messages.ReadAll')</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown"
                                                                           class="nav-link nav-link-label"><i
                                    class="ficon icon-mail6"></i><span
                                    class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">@lang('messages.Messages')</span><span
                                            class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span>
                                </h6>
                            </li>
                            <li class="list-group scrollable-container"><a href="javascript:void(0)"
                                                                           class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="{{url("")}}/app-assets/images/portrait/small/avatar-s-1.png"
                                                        alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Margaret Govan</h6>
                                            <p class="notification-text font-small-3 text-muted">I like your portfolio,
                                                let's start the project.</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-busy rounded-circle"><img
                                                        src="{{url("")}}/app-assets/images/portrait/small/avatar-s-2.png"
                                                        alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Bret Lezama</h6>
                                            <p class="notification-text font-small-3 text-muted">I have seen your work,
                                                there is</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Tuesday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-online rounded-circle"><img
                                                        src="{{url("")}}/app-assets/images/portrait/small/avatar-s-3.png"
                                                        alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Carie Berra</h6>
                                            <p class="notification-text font-small-3 text-muted">Can we have call in
                                                this week ?</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">Friday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span
                                                    class="avatar avatar-sm avatar-away rounded-circle"><img
                                                        src="{{url("")}}/app-assets/images/portrait/small/avatar-s-6.png"
                                                        alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Eric Alsobrook</h6>
                                            <p class="notification-text font-small-3 text-muted">We have project party
                                                this saturday night.</p>
                                            <small>
                                                <time datetime="2015-06-11T18:29:20+08:00"
                                                      class="media-meta text-muted">last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)"
                                                                class="dropdown-item text-muted text-xs-center">@lang('messages.ReadAll')</a></li>
                        </ul>

                    </li>
                            <li class="dropdown dropdown-user nav-item">
                    @guest
                        {{--<li><a href="{{ route('login') }}">ورود</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">تعریف</a></li>--}}
                        @else
                                <a href="#" data-toggle="dropdown"
                                   class="dropdown-toggle nav-link dropdown-user-link"><span
                                            class="avatar avatar-online"><img
                                                src="{{url("")}}/app-assets/images/portrait/small/avatar-s-1.png"
                                                alt="avatar"><i></i></span><span
                                            class="user-name">{{ Auth::user()->name }}</span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i
                                                class="icon-head"></i>@lang('Messages.EditProfile')</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="dropdown-item"><i class="icon-power3"></i>@lang('Messages.Exit')</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            @endguest
                            </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
