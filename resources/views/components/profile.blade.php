<div class="dropdown" data-strategy="absolute">
    <div class="dropdown-toggle pl-3">
        <button class="group relative flex items-center gap-x-1.5" type="button">
            <div class="avatar avatar-circle avatar-indicator avatar-indicator-online">
                <img class="avatar-img group-focus-within:ring group-focus-within:ring-primary-500"
                    src="{{asset('images/avatar1.png')}}" alt="Avatar 1" />
            </div>
        </button>
    </div>

    <div class="dropdown-content mt-1 w-56 divide-y dark:divide-slate-600">
        <div class="px-4 py-3">
            <p class="text-sm">Signed in as</p>
            <p class="truncate text-sm font-medium">admin@example.com</p>
        </div>
        <div class="py-1">
            <a href="javascript:void(0)" class="dropdown-link">
                <i width="18" height="18" data-feather="user"
                    class="text-slate-500"></i>
                <span>Profile</span>
            </a>
            <a href="javascript:void(0)" class="dropdown-link">
                <i width="18" height="18" data-feather="settings"
                    class="text-slate-500"></i>
                <span>Settings</span>
            </a>
            <a href="javascript:void(0)" class="dropdown-link">
                <i width="18" height="18" data-feather="help-circle"
                    class="text-slate-500"></i>
                <span>Support</span>
            </a>
        </div>
        <div class="py-1">
            <form method="POST" action="#">
                <button type="submit" class="dropdown-btn">
                    <i width="18" height="18" data-feather="log-out"
                        class="text-slate-500"></i>
                    <span>Sign out</span>
                </button>
            </form>
        </div>
    </div>
</div>