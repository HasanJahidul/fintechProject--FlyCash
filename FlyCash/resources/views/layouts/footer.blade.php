<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" target="blank" class="nav-link">
                    {{ __('FlyCash') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" target="blank" class="nav-link">
                    {{ __('Contract') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ __('About Us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ __('Address') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('Made With') }} <i class="tim-icons icon-heart-2"></i> {{ __('by') }}
            <a href="#" target="_blank">{{ __('FlyMembers') }}</a> &amp;
            <a href="#" target="_blank">{{ __('FlyFriends') }}</a> {{ __('For A Better Web') }}.
        </div>
    </div>
</footer>
