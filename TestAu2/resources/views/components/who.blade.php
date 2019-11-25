@if (Auth::guard('web')->check())
    <p class="text-success">
        You logged In as a <strong>USER</strong>
    </p>
@else
    <p class="text-danger">
        You logged Out as a <strong>USER</strong>
    </p>
@endif
@if (Auth::guard('admin')->check())
    <p class="text-success">
        You logged In as a <strong>Admin</strong>
    </p>
@else
    <p class="text-danger">
        You logged Out as a <strong>Admin</strong>
    </p>
@endif