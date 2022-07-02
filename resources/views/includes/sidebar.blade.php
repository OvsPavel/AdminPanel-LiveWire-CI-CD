<!-- <p class="text-center">logo</p>

<ul class="">
    <li>Пользователи</li>
</ul> -->


<div class="aside col-xs-12 col-md-2 bg-dark">
    
    <div class="d-md-flex align-items-start flex-column d-sm-block h-full">

        <header class="d-sm-flex d-md-block p-3 w-100 d-flex align-items-center">
        <div class="logo_container">
        <a class="no_link" href="/">
            Логотип
        </a>
    </div>
    <hr>
        </header>

        <nav class="collapse d-md-block w-100 mb-md-3" id="headerMenuCollapse">


            <ul class="nav flex-column mb-1 ps-0">
                <li class="nav-item ">
                    <a data-turbo="true" class="nav-link d-flex align-items-center collapsed" href="{{ route('contacts') }}" data-bs-toggle="collapse" aria-expanded="false">
                        Контакты
                    </a>
                </li>

                <!-- <div class="nav collapse sub-menu ps-2 " id="menu-vse-o-postuplenii" data-bs-parent="#headerMenuCollapse">
                    <li class="nav-item ">
                        <a data-turbo="true" class="nav-link d-flex align-items-center collapsed" href="#" data-bs-toggle="collapse">
                            Бакалавриат и специалитет
                        </a>
                    </li>
                </div> -->

                <li class="nav-item ">
                    <a data-turbo="true" class="nav-link d-flex align-items-center collapsed" href="{{ route('news') }}">
                        Новости
                    </a>
                </li>
            </ul>
        </nav>

        <div class="h-100 w-100 position-relative to-top cursor d-none d-md-block mt-md-5 divider" data-action="click->html-load#goToTop" title="{{ __('Scroll to top') }}">
            <div class="bottom-left w-100 mb-2 ps-3">
            </div>
        </div>

        <footer class="p-3 mb-2 m-t d-none d-lg-block w-100">
        </footer>

    </div>
</div>