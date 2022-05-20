@php($config = config('laravel-cookie-consent'))
@if($config['enabled'])
    <div id="__cookie-consent">
        <div id="__cookie-container-closed" class="__cookie-consent-open-link">
            <svg id="cookie-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M 16 4 C 9.373 4 4 9.373 4 16 C 4 22.627 9.373 28 16 28 C 22.627 28 28 22.627 28 16 C 28 15.514 27.96325 15.037406 27.90625 14.566406 C 27.50625 14.839406 27.022 15 26.5 15 C 25.422 15 24.511156 14.313422 24.160156 13.357422 C 23.536156 13.759422 22.798 14 22 14 C 19.791 14 18 12.209 18 10 C 18 9.265 18.212594 8.5861406 18.558594 7.9941406 C 18.538594 7.9951406 18.52 8 18.5 8 C 17.119 8 16 6.881 16 5.5 C 16 4.943 16.188094 4.4345313 16.496094 4.0195312 C 16.331094 4.0125312 16.167 4 16 4 z M 23.5 4 A 1.5 1.5 0 0 0 22 5.5 A 1.5 1.5 0 0 0 23.5 7 A 1.5 1.5 0 0 0 25 5.5 A 1.5 1.5 0 0 0 23.5 4 z M 14.052734 6.1894531 C 14.251734 7.4764531 14.998875 8.5864844 16.046875 9.2714844 C 16.015875 9.5134844 16 9.757 16 10 C 16 13.308 18.692 16 22 16 C 22.498 16 22.991703 15.936453 23.470703 15.814453 C 24.152703 16.438453 25.017125 16.850797 25.953125 16.966797 C 25.465125 22.029797 21.188 26 16 26 C 10.486 26 6 21.514 6 16 C 6 11.152 9.4677344 7.0984531 14.052734 6.1894531 z M 22 9 A 1 1 0 0 0 21 10 A 1 1 0 0 0 22 11 A 1 1 0 0 0 23 10 A 1 1 0 0 0 22 9 z M 14 10 A 1 1 0 0 0 13 11 A 1 1 0 0 0 14 12 A 1 1 0 0 0 15 11 A 1 1 0 0 0 14 10 z M 27 10 A 1 1 0 0 0 26 11 A 1 1 0 0 0 27 12 A 1 1 0 0 0 28 11 A 1 1 0 0 0 27 10 z M 11 13 A 2 2 0 0 0 9 15 A 2 2 0 0 0 11 17 A 2 2 0 0 0 13 15 A 2 2 0 0 0 11 13 z M 16 15 A 1 1 0 0 0 15 16 A 1 1 0 0 0 16 17 A 1 1 0 0 0 17 16 A 1 1 0 0 0 16 15 z M 12.5 19 A 1.5 1.5 0 0 0 11 20.5 A 1.5 1.5 0 0 0 12.5 22 A 1.5 1.5 0 0 0 14 20.5 A 1.5 1.5 0 0 0 12.5 19 z M 19.5 20 A 1.5 1.5 0 0 0 18 21.5 A 1.5 1.5 0 0 0 19.5 23 A 1.5 1.5 0 0 0 21 21.5 A 1.5 1.5 0 0 0 19.5 20 z"/>
            </svg>
        </div>
        <div id="__cookie-container-open">
            @if($alreadyAccepted)
                <a href="javascript:void(0);" id="__cookie-consent-close-button">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 460.775 460.775" xml:space="preserve"><path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>
                </a>
            @else
                <a href="javascript:void(0);" id="__cookie-consent-reject-button" title="{{ trans('laravel-cookie-consent::translations.button_accept_necessary') }}">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 460.775 460.775" xml:space="preserve"><path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>
                </a>
            @endif
            <span class="title">{!! trans('laravel-cookie-consent::translations.title') !!}</span>
            <div class="description">{!! trans('laravel-cookie-consent::translations.description') !!}</div>
            <div class="manage-cookies-container">
                @foreach($config['cookie_types'] as $type => $cookie_name)
                    <label class="cookie-type-selection"> {{ trans('laravel-cookie-consent::translations.'.$type.'.title') }}
                        <input type="checkbox" id="{{ $type }}" name="{{ $type }}" value="{{ $cookie_name }}" class="single_checkbox_accept" @if($type == 'necessary') disabled checked @endif @if(in_array($cookie_name, $cookieTypesAccepted)) checked @endif>
                        <span class="checkmark"></span>
                    </label>
                @endforeach
            </div>
            <div class="buttons">
                @if(!$alreadyAccepted)
                    <a href="javascript:void(0);" id="__cookie-consent-accept" class="cookie-btn cookie-btn-primary accept-cookies">{!! trans('laravel-cookie-consent::translations.button_accept') !!}</a>
                    <a href="javascript:void(0);" id="__cookie-consent-reject" class="cookie-btn-link accept-necessary-cookies">{!! trans('laravel-cookie-consent::translations.button_accept_necessary') !!}</a>
                @else
                    <a href="javascript:void(0);" id="__cookie-consent-save-changes" class="cookie-btn cookie-btn-primary accept-cookies">{!! trans('laravel-cookie-consent::translations.button_save_changes') !!}</a>
                @endif
            </div>
            <div class="manage">
                <a href="javascript:void(0);" id="manage-cookies-btn">
                    <svg id="manageicon" viewBox="0 0 9.62 9.57"><g id="Layer_2"><g id="Layer_1-2"><path class="gear" d="M9.46,6.06l-1.1-.78c0-.16.06-.31.06-.47a1.27,1.27,0,0,0-.06-.47L9.57,3.4l-1.15-2L7,1.93a2.74,2.74,0,0,0-.83-.47L6,0H3.61L3.35,1.46a7.14,7.14,0,0,0-.79.47L1.15,1.36,0,3.4l1.15.94c0,.16,0,.31,0,.47a1.51,1.51,0,0,0,0,.47l-1,.78A.75.75,0,0,0,0,6.17l1.15,2,1.41-.58a2.49,2.49,0,0,0,.84.47l.21,1.47H6a.53.53,0,0,1,0-.21L6.22,8.1a4,4,0,0,0,.84-.47l1.41.58,1.15-2A.75.75,0,0,0,9.46,6.06Zm-4.65.19A1.47,1.47,0,1,1,6.28,4.78,1.47,1.47,0,0,1,4.81,6.25Z"></path></g></g></svg>
                    {!! trans('laravel-cookie-consent::translations.button_more_info') !!}
                </a>
                <a href="{{ asset(app()->getLocale().'/privacy') }}" target="_blank" class="cookie-policy-btn">Cookie Policy</a>
            </div>
            {{--
            @if($alreadyAccepted)
                <div class="already-accepted-details">
                    <p>Hai già dato le tue preferenze il giorno <b>10/10/2022</b> alle ore <b>10:53</b>.</p>
                </div>
            @endif
            --}}
        </div>
        <div id="__cookie-descriptions">
            <div class="__cookie-modal">
                <a href="javascript:void(0);" id="__cookie-info-close-button">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 460.775 460.775" xml:space="preserve"><path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>
                </a>
                <span class="title">{!! trans('laravel-cookie-consent::translations.title_description') !!}</span>
                <div class="description">
                    {!! trans('laravel-cookie-consent::translations.description') !!}
                    {!! trans('laravel-cookie-consent::translations.description_policy', ['cookie_policy_link' => asset(app()->getLocale().'/privacy')]) !!}
                </div>
                <div class="list-cookies-container">
                    @foreach($config['cookie_types'] as $type => $consent_cookie_name)
                        <div class="__cookie-modal-accordion {{ $type == 'necessary' ? 'open' : null }}" data-type="{{ $type }}">
                            <div id="accordion-header-{{ $type }}" class="accordion-header">
                                {{ trans('laravel-cookie-consent::translations.'.$type.'.title') }}
                                @if(count(config('laravel-cookie-consent.cookies.'.$type)) > 0)
                                    <span class="__cookie-count-badge">{{ count(config('laravel-cookie-consent.cookies.'.$type)) }}</span>
                                @endif
                            </div>
                            <div id="accordion-body-{{ $type }}" class="accordion-body">
                                {!! trans('laravel-cookie-consent::translations.'.$type.'.description') !!}
                                @if(count(config('laravel-cookie-consent.cookies.'.$type)) > 0)
                                    <div class="cookie-table-container">
                                        <table class="cookie-table">
                                            <thead>
                                            <tr>
                                                <th>{{ trans('laravel-cookie-consent::translations.table.name') }}</th>
                                                <th>{{ trans('laravel-cookie-consent::translations.table.provider') }}</th>
                                                <th>{{ trans('laravel-cookie-consent::translations.table.domain') }}</th>
                                                <th>{{ trans('laravel-cookie-consent::translations.table.duration') }}</th>
                                                <th>{{ trans('laravel-cookie-consent::translations.table.description') }}</th>
                                            </tr>
                                            </thead>
                                            @foreach(config('laravel-cookie-consent.cookies.'.$type) as $cookie_name => $cookie_info)
                                                <tr>
                                                    <td>{{ $cookie_name }}</td>
                                                    <td>{{ $cookie_info['provider'] }}</td>
                                                    <td>{{ $cookie_info['domain'] }}</td>
                                                    <td>{{ $cookie_info['duration']['value'] }} {{ trans('laravel-cookie-consent::translations.um.'.$cookie_info['duration']['um']) }}</td>
                                                    <td>{!! trans('laravel-cookie-consent::translations.cookies.'.$cookie_name) !!}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                @else
                                <p class="cookie-table"><strong>{{ trans('laravel-cookie-consent::translations.no_cookies_used') }}</strong></p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{ asset('/vendor/laravel-cookie-consent/styles.css') }}">
    <script id="__laravel-cookie-consent-script" type="text/javascript" src="{{ asset('/vendor/laravel-cookie-consent/scripts.js') }}"
        data-cookie-lifetime="{{ $config['cookie_lifetime'] }}"
        data-cookie-name="{{ $config['cookie_name'] }}"
        data-session-secure="{{ config('session.secure') }}"
        data-button-label-accept-selected="{{ trans('laravel-cookie-consent::translations.button_accept_selected') }}"
        data-button-label-accept-all="{{ trans('laravel-cookie-consent::translations.button_accept') }}"
        data-cookie-types='<?php echo json_encode($config['cookie_types']) ?>'
        data-cookie-selected='<?php echo json_encode($cookieTypesAccepted) ?>'
    ></script>
@endif
