<div class="sidebar" data="blue">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('BS') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('Business DashBoard') }}</a>
        </div>
        <ul class="nav">
            @if(Auth::user()->user_type == 'admin')
            <li @if ($pageSlug ?? '' == 'dashboard') class="active" @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' ?? '' == 'findleads') class="active" @endif>
                <a href="{{ route('pages.findleads') }}">
                    <i class="tim-icons icon-zoom-split"></i>
                    <p>{{ _('Find Leads') }}</p>
                </a>
            </li>
             <li @if ($pageSlug ?? '' ?? '' == 'prospects') class="active" @endif>
                <a href="{{ route('pages.prospects') }}">
                    <i class="tim-icons icon-check-2"></i>
                    <p>{{ _('Prospects') }}</p>
                </a>
            </li>
        
            <li>
                <a data-toggle="collapse" href="#email-management" aria-expanded="true">
                    <i class="tim-icons icon-email-85"></i>
                    <span class="nav-link-text" >{{ __('Email Management') }}</span>
                    <b class="caret mt-1"></b>
                </a>
            </li>
            <ul class="nav pl-4">
                <div class="collapse show" id="email-management">
                <li @if ($pageSlug ?? '' ?? '' == 'email_campaign') class="active" @endif>
                    <a href="{{ route('pages.email_campaign') }}" >
                        <i class="tim-icons icon-email-85"></i>
                        <p>{{ _('Email Campaign') }}</p>
                    
                    </a>   
                </li>

                <li @if ($pageSlug ?? '' ?? '' == 'compose_email') class="active" @endif>
                    <a href="{{ route('pages.compose_email') }}" >
                        <i class="tim-icons icon-single-copy-04"></i>
                        <p>{{ _('Compose Email') }}</p>
                    
                    </a>   
                </li>

               
        
                <!-- <li @if ($pageSlug ?? '' ?? '' == 'contactlist') class="active" @endif>
                    <a href="{{ route('pages.contactlist') }}" >
                        <i class="tim-icons icon-single-02"></i>
                        <p>{{ _('Contact List') }}</p>
                    
                    </a>   
                </li> -->
                </div>
            </ul>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text" >{{ __('Agents') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug ?? '' ?? '' == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' ?? '' == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            
            <li @if ($pageSlug ?? '' ?? '' == 'chats') class="active" @endif>
                <a href="/chats">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ _('Chats') }}</p>
                </a>
            </li>

            <!-- <li @if ($pageSlug ?? '' ?? '' == 'chat') class="active" @endif>
                    <a href="{{ route('pages.chat') }}" >
                        <i class="tim-icons icon-chat-33"></i>
                        <p>{{ _('Chat') }}</p>
                    
                    </a>   
                </li> -->
        </ul>
    </div>
</div>

