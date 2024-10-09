
@auth

<div class="sidebar-menu">
    <div class="container">
        <br>
<br>

<h3  class="dashboard-body">{{__($pageTitle)}}</h3>
            </div>

    <span class="sidebar-menu__close"><i class="las la-times"></i></span>
    <ul class="sidebar-menu-list">
        <li class="sidebar-menu-list__item has-dropdown active">
            <a href="{{route('user.home')}}" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
  <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
</svg></span>
            @lang('Dashboard')</span>
            </a>
        </li>

        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z"/>
  <path d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z"/>
</svg></i></span>
            <span class="text">@lang('Escrow')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.escrow.new')}}" class="sidebar-submenu-list__link">@lang('Create Escrow ')</a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.escrow.list')}}" class="sidebar-submenu-list__link">@lang('Escrow History') </a>
                    </li>
                </ul>
            </div>
        </li>

        
        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
  <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
</svg></i></span>
            <span class="text">@lang('Deposit')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.deposit')}}" class="sidebar-submenu-list__link">@lang('Add Money') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.deposit.history')}}" class="sidebar-submenu-list__link">@lang('Deposit History') </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
</svg></span>
            <span class="text">@lang('Withdraw')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.withdraw')}}" class="sidebar-submenu-list__link">@lang('Withdraw Balance') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.withdraw.history')}}" class="sidebar-submenu-list__link">@lang('Withdrawal History')</a>
                    </li>
                </ul>
            </div>
        </li>
        
        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
  <path d="M0 5a5 5 0 0 0 4.027 4.905 6.5 6.5 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05q-.001-.07.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.5 3.5 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98q-.004.07-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5m16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0m-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674z"/>
</svg></span>
            <span class="text">@lang('Exchange')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="https://app.escrow.icu/buy" class="sidebar-submenu-list__link">@lang('Buy Crypto') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="https://app.escrow.icu/sell" class="sidebar-submenu-list__link">@lang('Sell Crypto') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="https://app.escrow.icu/swap" class="sidebar-submenu-list__link">@lang('Swap Crypto')</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="sidebar-menu-list__item has-dropdown">
            <a href="{{route('user.transactions')}}" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"/>
  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"/>
  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"/>
</svg></span>
            @lang('Transactions')</span>
            </a>
        </li>
        
        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
</svg></i></span>
            <span class="text">@lang('Support')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('ticket.open')}}" class="sidebar-submenu-list__link">@lang('New Ticket') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('ticket')}}" class="sidebar-submenu-list__link">@lang('Support Tickets ')</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="sidebar-menu-list__item has-dropdown">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg></span>
            <span class="text">@lang('My Account')</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.profile.setting')}}" class="sidebar-submenu-list__link">@lang('Profile Setting')</a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.change.password')}}" class="sidebar-submenu-list__link">@lang('Password Settings') </a>
                    </li>
                  
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.twofactor')}}" class="sidebar-submenu-list__link">@lang('2FA Security') </a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="{{route('user.logout')}}" class="sidebar-submenu-list__link">@lang('Log Out') </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
@endauth
