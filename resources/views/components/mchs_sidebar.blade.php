<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                    </svg>
                                    Админ.панель</a>
                            </li>
                            <li class="nav-title">Разделы</li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-spreadsheet"></use>
                                    </svg>Главная
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cabinet') }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                    </svg>Рабочее место
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reports') }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                                    </svg>Отчеты
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dictionaries') }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                                    </svg>Справочники
                                </a>
                            </li>


                            <li class="nav-group">
                                <a class="nav-link nav-group-toggle" href="#">
                                <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                    </svg> Пользователи
                                </a>
                                <ul class="nav-group-items">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('users.admin') }}">
                                            <span class="nav-icon"></span>
                                            Администраторы
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('users') }}">
                                            <span class="nav-icon"></span>
                                            Пользователи
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('references') }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                    </svg>Справки
                                </a>
                            </li>

                            <li class="nav-title">Тестирование</li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('showSendEventForm') }}" target="_blank">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                    </svg>Тестовое событие
                                </a>
                            </li>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 256px; height: 1296px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 581px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>