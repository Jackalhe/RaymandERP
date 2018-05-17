<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="@lang('messages.Search')" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->

    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item active"><a href="#"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">@lang('menus.Dashboard')</span><span class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
                <ul class="menu-content">
                    <?php if (GetUserAccess(10010103)){ ?>
                    <li><a href="#" data-i18n="nav.dash.main" class="menu-item">@lang('menus.Dashboard')</a>
                    </li>
                    <li><a href="#" data-i18n="nav.dash.main" class="menu-item">@lang('menus.ToDoList')</a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            
            <li class=" nav-item"><a href="#"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">@lang('menus.GeneralSubsystem')</span></a>
                <ul class="menu-content">
                    <li><a href="#" data-i18n="nav.invoice.invoice_template" class="menu-item">@lang('menus.GeneralSubsystem-BaseInfo')</a>
                        <ul class="menu-content">
                            <li><a href="{{route('Fiscalyear.index')}}" data-i18n="nav.error_pages.error_400" class="menu-item">@lang('menus.GeneralSubsystem-BaseInfo-FiscalYear')</a>
                            </li>
                            <li><a href="{{route('SelectionList.index')}}" data-i18n="nav.error_pages.error_400" class="menu-item">@lang('menus.GeneralSubsystem-BaseInfo-SelectionList')</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#" data-i18n="nav.invoice.invoice_template" class="menu-item">@lang('menus.GeneralSubsystem-Security')</a>
                        <ul class="menu-content">
                            <li><a href="{{route('OrganizationRole.index')}}" data-i18n="nav.error_pages.error_400" class="menu-item">@lang('menus.GeneralSubsystem-Security-Role')</a>
                            </li>
                            <li><a href="{{route('UserAccount.index')}}" data-i18n="nav.error_pages.error_400" class="menu-item">@lang('menus.GeneralSubsystem-Security-UserAccount')</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            {{--<li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Menu levels</span></a>--}}
                {{--<ul class="menu-content">--}}
                    {{--<li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Second level</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Second level child</a>--}}
                        {{--<ul class="menu-content">--}}
                            {{--<li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main" class="menu-item">Third level child</a>--}}
                                {{--<ul class="menu-content">--}}
                                    {{--<li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1" class="menu-item">Fourth level</a>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2" class="menu-item">Fourth level</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class=" navigation-header"><span data-i18n="nav.category.support">@lang('messages.Support')</span><i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-document-text"></i><span data-i18n="nav.support_documentation.main" class="menu-title">@lang('messages.Documentation')</span></a>
            </li>
        </ul>
    </div>
    <!-- /main menu content-->

    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->

</div>
<!-- / main menu-->