<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>{{ __('Menü') }}</h3>
        <ul class="nav side-menu">
            <li>
                <a>
                    <i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/') }}">Dashboard</a></li>
                    <li><a href="{{ url('/') }}">Dashboard2</a></li>
                    <li><a href="{{ url('/') }}">Dashboard3</a></li>
                </ul>
            </li>

        </ul>
    </div>


</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="{{ __('Ayarlar') }}">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="{{ __('Tam Ekran') }}">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="{{__('Ekranı Kilitle')}}">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="{{ __('Çıkış Yap') }}" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->