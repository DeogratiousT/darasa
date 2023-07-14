@foreach ($user->roles as $role)
    @if ($role->name == 'Super Admin')
        <span class="badge badge-success">Super Admin</span>
    @elseif ($role->name == 'Technical Admin')
        <span class="badge badge-primary">Technical Admin</span>
    @elseif ($role->name == 'Operational Admin')
        <span class="badge badge-secondary">Operational Admin</span>
    @endif
@endforeach